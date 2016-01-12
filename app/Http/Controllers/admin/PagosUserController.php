<?php

namespace Oral_Plus\Http\Controllers\admin;

use Illuminate\Http\Request;

use Oral_Plus\Http\Requests;
use Oral_Plus\Http\Controllers\Controller;
use Oral_Plus\Pagos;

class PagosUserController extends Controller
{

    public function index($id)
    {
        $pagos = Pagos::where('user_id', $id)->orderBy('fecha', 'asc')->paginate();

        return view('admin.pagosUser.index', compact('pagos'));
    }

}
