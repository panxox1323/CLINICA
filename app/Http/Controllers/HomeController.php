<?php

namespace Oral_Plus\Http\Controllers;

use Illuminate\Http\Request;

use Oral_Plus\Http\Requests;
use Oral_Plus\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index()
    {
        return redirect('/');
    }

    public function cita()
    {
        return view('frontend.cita');
    }

}
