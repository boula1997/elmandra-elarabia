<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class ProfileController extends Controller
{
    public function show(){
        return view('front.profile');
    }

    public function  update(Request $request,$id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
        ]);
        try{
            // dd($request->confirm_password);
            $data=$request->except('image');
            if($request->has('password'))
            $data['password']=Hash::make($request->password);
        
            $user = user::find($id);
            $user->updateFile();
            $user->update($data);
            return redirect()->route('show_profile')
            ->with('success', trans('general.update_successfully'));
        }catch(Exception $e){
            return redirect()->back()->with(['error' => __('general.something_wrong')]);

        }
    }
}
