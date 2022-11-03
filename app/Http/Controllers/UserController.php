<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class UserController extends Controller
{

    public function index()
    {
        if (Auth::id()) {
            if (Auth::user()->user_id == '0') {

                return view('layouts.User.index');
            } else {
                return view('layouts.Admin.index');
            }
        } else {
            return redirect()->back();
        }
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
