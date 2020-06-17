<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function profile($id){
        $user = User::find($id);

        if ($user) {
            return view('layouts.profile')->withUser($user);
        } else {
            return redirect()-back();
        }

    }




    public function edit(){
        if(Auth::user()){
            $user = User::find(Auth::user()->id);

            if($user) {
                return view('layouts.edit')->withUser($user);
            }else{
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }

    public function update(Request $request) {
        $user = User::find(Auth::user()->id);

        if ($user) {
            $validate = null;
            if (Auth::user()->email === $request['email']){
             $validate = $request->validate([
                'name' => 'required|min:2',
                'email' => 'required|email'
            ]);   
            } else {
                $validate = $request->validate([
                    'name' => 'required|min:2',
                    'email' => 'required|email|unique:users'
                ]);  
            }
            if ($validate) {
            $user->name = $request['name'];
            $user->email = $request['email'];
            

            $user->save();
            }else{
                return redirect()->flash('success', 'La demande est bien modifié ');
            }   
            return redirect()->back();
        } else  {
            return redirect()->back();
        }
    }

    public function passwordEdit(){
        if(Auth::user()){
        
                return view('layouts.password');
        } else {
            return redirect()->back();
        }
    }



    public function passwordUpdate(Request $request){
        $validate = $request->validate([
            'oldPassword' => 'required|min:7',
            'password' => 'required|min:7',

        ]);  
        $user = User::find(Auth::user()->id);

        if ($user ){
            if (Hash::check($request['oldPAssword'], $user->password) && $validate){
                $user->password = Hash::make($request['password']);

                $user->save();

                $request->session()->flash('success', 'your password have been update');
                return redirect()->back();
            } else {
                $request->session()->flash('error', 'The entered does not match your current password');
                return redirect()->back();
            }
        }
    }
}
