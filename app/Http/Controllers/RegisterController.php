<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //

    public function index(){
        return view('login');
    }

    public function create(){
        return view('register');
    }
    public function store(Request $request){
        $data['id'] = $request->id;
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = $request->password;

        Register::create($data);
        return redirect()->route('posts.index')->with('success', 'Registration Created Successfully');

        // return view('register');
    }
}
