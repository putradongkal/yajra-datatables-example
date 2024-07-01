<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index');
    }

    public function datatables(Request $request)
    {
        $users = User::query();

        return DataTables::of($users)
                        ->make();
    }
}
