<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function login()
    {
        $loginValidationStatus = "";
        return view('login', compact('loginValidationStatus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function loginvalidation(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        try {
            $user = User::where('email', $request['email'])->first();
            $id = $user['id'];
            if ($request['password'] === $user['password']) {
                return redirect()->route('user.show', $id);
            } else {
                $loginValidationStatus = "Wrong Password";
                return view('login', compact('loginValidationStatus'));
            }
        } catch (\Throwable $th) {
            $loginValidationStatus = "Wrong Email";
            return view('login', compact('loginValidationStatus'));
        }
    }

    public function registration()
    {
        return view('registration');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = new User();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        $id = $user->id;
        return redirect()->route('user.show', $id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findorFail($id);
        $userTasks = Task::where('user_id', $id)->orderBy('id', 'desc')->get();
        return view('home', compact('user', 'userTasks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
