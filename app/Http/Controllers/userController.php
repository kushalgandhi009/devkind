<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Carbon;

class userController extends Controller
{
    public function edit(){
        $id = Auth::User()->id;
        $user = User::find($id);
        return view('editProfile', compact('user'));
    }

    public function update(Request $request){

        $dt = new Carbon\Carbon();
        $before = $dt->subYears(18)->format('Y-m-d');

        $message = [
            'dob.before' => 'User must be 18 year old to register',
        ];

        Validator::make($request->all(), [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'dob' => 'required|date|before:' . $before,
            'email' => "required|email|unique:users,email,{$request->id}",
        ], $message)->validate();

        $user = User::find(request('id'));
        $input = $request->all();
        $user->update($input);

        return view('editProfile',compact('user'));
    }
}
