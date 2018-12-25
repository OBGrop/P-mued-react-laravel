<?php

namespace App\Http\Controllers\Api;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    function list_role(){
        $roles = Role::all();
        dd($roles);
        return response()->json([
            'success' => true,
            'data'=> $roles
        ]);
    }

    function store(Request $request){
        $input = $request->all();

        $role = new Role();
        $role->can_edit_admin = $input['edit_admin'];
        $role->can_view_article = $input['view_article'];
        $role->can_edit_article = $input['edit_article'];
        $role->can_view_contact = $input['view_contact'];
        $role->can_edit_contact = $input['edit_contact'];
        $role->can_view_office = $input['view_office'];
        $role->can_edit_office = $input['edit_office'];
        $role->can_view_enity = $input['view_enity'];
        $role->can_edit_enity = $input['edit_enity'];
        $role->can_view_report = $input['view_report'];
        $role->can_edit_field = $input['edit_field'];
        $role->entity_list = $input['entity_list'];
        $role->name = $input['name'];
        $role->admin = $input['admin'];
        $role->article = $input['article'];
        $role->contact = $input['contact'];
        $role->office = $input['office'];
        $role->field = $input['field'];
        $role->report = $input['report'];
        $role->entity = $input['entity'];
        $role->save();

        return response()->json([
           'success' => true
        ]);
    }

    function update(Request $request){
        $input = $request->all();

        $role = Role::find($input['id']);
        $role->can_edit_admin = $input['edit_admin'];
        $role->can_view_article = $input['view_article'];
        $role->can_edit_article = $input['edit_article'];
        $role->can_view_contact = $input['view_contact'];
        $role->can_edit_contact = $input['edit_contact'];
        $role->can_view_office = $input['view_office'];
        $role->can_edit_office = $input['edit_office'];
        $role->can_view_enity = $input['view_enity'];
        $role->can_edit_enity = $input['edit_enity'];
        $role->can_view_report = $input['view_report'];
        $role->can_edit_field = $input['edit_field'];
        $role->entity_list = $input['entity_list'];
        $role->name = $input['name'];
        $role->admin = $input['admin'];
        $role->article = $input['article'];
        $role->contact = $input['contact'];
        $role->office = $input['office'];
        $role->field = $input['field'];
        $role->report = $input['report'];
        $role->entity = $input['entity'];
        $role->save();

        return response()->json([
            'success' => true
        ]);
    }

    function destroy(Request $request){
        $input = $request->all();

        $role = Role::find($input['id'])->delete();

        return response()->json([
            'success' => true
        ]);
    }
}
