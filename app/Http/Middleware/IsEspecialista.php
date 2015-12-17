<?php

namespace Oral_Plus\Http\Middleware;

use Closure;

class IsEspecialista
{
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next)
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
                //return redirect()->to('especialista');
                break;

            default:
                return redirect()->to('auth/login');
                break;
        }

        return $next($request);
    }
}
