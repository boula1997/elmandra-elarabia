<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\UserRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(UserRequest $request){
        try {
            $inputs=$request->all();
            $inputs['seller_id']=auth('api')->user()->id;
            $data = User::create($inputs);
            return successResponse($data);
        } catch (Exception $e) {
            return failedResponse($e->getMessage());
        }
    }
}
