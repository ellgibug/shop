<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth');
    }

    public function index()
    {
        return view('users.index');
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required',
            'birthday' => 'required',
            'sex' => 'required',
            'city' => 'required',
            'mobile_phone' => 'required',
            'rules' => 'required'
        ]);

        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->patronymic = $request->patronymic;
        $user->birthday = $request->birthday;
        $user->sex = $request->sex;
        $user->city = $request->city;
        $user->address = $request->address;
        $user->mobile_phone = $request->mobile_phone;
        $user->optional_phone = $request->optional_phone;
        $user->home_phone = $request->home_phone;
        $user->rules = $request->rules;
        $user->dispatch = $request->dispatch;

        $user->save();

        return back();
    }
}
