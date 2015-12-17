<?php

namespace Oral_Plus\Http\Controllers;

use Illuminate\Http\Request;

use Oral_Plus\Http\Requests;
use Oral_Plus\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        return view('welcome2');
    }
}
