<?php

namespace Oral_Plus\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class RedirectIfAuthenticated
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->check())
        {
            switch($this->auth->user()->type)
            {
                case 'admin':
                    return redirect()->to('admin');
                    break;

                case 'user':
                    return redirect()->to('user');
                    break;

                case 'secretaria':
                    return redirect()->to('secretaria');
                    break;

                case 'espcialista':
                    return redirect()->to('especialista');
                    break;

                default:
                    return redirect()->to('auth/login');
                    break;
            }
            return redirect('/admin');

        }

        return $next($request);
    }

}
