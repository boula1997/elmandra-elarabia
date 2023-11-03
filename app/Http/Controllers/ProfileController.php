<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;

class ProfileController extends Controller
{

    public function  update(Request $request,$id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'password' => 'required_without:_method|same:confirm_password',
        ]);

        // dd($request->confirm_password);
        $user = user::find($id);

    }
}
