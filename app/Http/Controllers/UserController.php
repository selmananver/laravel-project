<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\UserModel;

class UserController extends Controller
{
    public function index()
    {
        return view('users.create');
    }

   public function store(Request $request)
   {
       $request->validate([
       'name'=>'required',
       'email'=>'required|email|unique:user_registration',
   ]);
   UserModel::create([
    'name'=>$request->name,
    'email'=>$request->email,
    'referralcode'=>$request->referralcode
   ]);
   return view('users.create');
   }

   public function admin(Request $request)
   {
    $admins =UserModel::all();
    return view('admin.show',['admins'=>$admins]);
   }
}

?>