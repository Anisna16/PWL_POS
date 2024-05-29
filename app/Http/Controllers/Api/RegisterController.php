<?php

namespace App\Http\Controllers\Api;

use App\Models\UserModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function __invoke(Request $request ) 
    {
        //SET VALIDATION
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'nama' => 'required',
            'password' => 'required|min:5|confirmed',
            'level_id' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        //if validation fails
        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        //CREATE USER
        $user = UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => bcrypt($request->password),
            'level_id' => $request->level_id,
            'image' => $request->image
        ]);

        //RETURN RESPONSE JSON USER IS CREATED
        if($user){
            return response()->json([
                'success' => true,
                'user' => $user,
            ], 201);
        }

        //RETURN JSON PROCESS INSERT FAILED
        return response()->json([
            'success' => false,
        ], 409);
    }
}
