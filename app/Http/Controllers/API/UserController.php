<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\UserRequest;
use App\Http\Resources\UserResource;
use App\Mail\VerifyAdminMai;
use App\Mail\VerifyUserMail;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function store(UserRequest $request){
        try {
            $inputs=$request->all();
            $inputs['marketer_id']=auth('api')->user()->id;
            $user = User::create($inputs);
            $user->uploadFile();
            // Mail::to(env('MAIL_FROM_NAME'))->send(new VerifyUserMail($user));
            $data['user'] = new UserResource($user);
            return successResponse($data);
        } catch (Exception $e) {
            return failedResponse($e->getMessage());
        }
    }
}
