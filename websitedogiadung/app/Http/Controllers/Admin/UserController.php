<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\AddUserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function getUser() {
        $userlist = User::all();
        return view('back.user',compact('userlist'));
    }
    public function getAddUser(){
        return view('back.adduser');
    }
    public function postAddUser(AddUserRequest $request){
        $filename = $request->img->getClientOriginalName();
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->level = $request->level;
        $user->description = $request->description;
        $user->save();
        return view('back.user');
    }
    public function getEditUser($id){
        $data['user'] = User::find($id);
        return view('back.edituser',$data);
    }
    public function postEditUser(Request $request,$id){
        $user =new User;
        $arr['name'] = $request->name;
        $arr['email'] = $request->email;
        $arr['password'] = Hash::make($request->password);
        $arr['level'] = $request->level;
        $arr['description'] = $request->description;

        $user::where('id',$id)->update($arr);
        return back();
    }
    public function getDeleteUser($id){
        User::destroy($id);
        return back();
    }
}
