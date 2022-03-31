<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('pages.users');
    }
    
    public function create()
    {
        return "create user";
    }
    
    public function store(Request $request)
    {
        return "store user";
    }
    
    public function show($id)
    {
        return "show user {$id}";
    }

    public function edit($id)
    {
        return "edit user";
    }

    public function update(Request $request,$id)
    {
        return "update user";
    }

    public function destroy($id)
    {
        return "delete user";
    }
}
