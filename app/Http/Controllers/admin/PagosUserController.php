<?php

namespace Oral_Plus\Http\Controllers\admin;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Oral_Plus\Http\Requests;
use Oral_Plus\Http\Controllers\Controller;
use Oral_Plus\Pagos;

class PagosUserController extends Controller
{

    public function index(Request $request)
    {
        $id = Auth::user()->id;
        $pagos = Pagos::fecha($request->get('fecha'))->where('user_id', $id)->orderBy('fecha', 'asc')->paginate(8);

        return view('admin.pagosUser.index', compact('pagos'));
    }

}
