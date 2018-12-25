<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class UserController extends Controller
{
    function list_user(){
        $users = User::all();
        return response()->json([
            'success' => true,
            'data'=> $users
        ]);
    }

    function show($id){
        $user = User::find($id);
        return response()->json([
            'success' => true,
            'data'=> $user
        ]);
    }

    function store(Request $request){
        $input = $request->all();

        $user = new User();
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->email_verified_at = $input['email_verified_at'];
        $user->profile_image_path = $input['profile_image_path'];
        $user->role_id = $input['role_id'];
        $user->profile_image_url = $input['profile_image_url'];
        $user->save();

        return response()->json([
            'success' => true
        ]);
    }

    function update(Request $request){
        $input = $request->all();

        $user = new User();
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->email_verified_at = $input['email_verified_at'];
        $user->profile_image_path = $input['profile_image_path'];
        $user->role_id = $input['role_id'];
        $user->profile_image_url = $input['profile_image_url'];
        $user->save();

        return response()->json([
            'success' => true
        ]);
    }

    function destroy(Request $request){
        $input = $request->all();

        $user = User::find($input['id'])->delete();

        return response()->json([
            'success' => true
        ]);
    }
}
