<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function userHome()
    {
        $user_type = DB::table('user_type')->get();
        return view('user-form', compact('user_type'));
    }

    public function userList(){

        $users = DB::table('users')
                ->leftJoin('user_type', 'users.user_type_id', '=', 'user_type.id')
                ->select('users.*', 'user_type.display_name as user_type_display_name')
                ->get();

        return view('user-list', compact('users'));
    }

    public function userEdit($id)
    {
        return "<h1>Hello! This is User Edit: $id.</h1>";
    }

    public function userAdd()
    {
        return "<h1>Hello! This is User Add.</h1>";
    }

    public function deleteID($id)
    {
        return "<h1>Hello! This is User Delete: $id.</h1>";
    }

    public function userSubmit(Request $request)
    {
        $request->validate(
            [
                'fname' => ['required', 'max:10'],
                'lname' => ['required', 'min:2'],
                'email' => ['required', 'email', 'ends_with:@gmail.com'],
                'password' => ['required'],
                'user_type' => ['required']

            ],
            [
                'fname.required' => 'Ang pangalan mo ay kailangan',
                'lname.required' => 'Ilagay mo rin ang iyong apelyido'
            ]
        );
        Log::info("First name: " . $request->fname);
        Log::info("Middle name: " . $request->mname);
        Log::info("Last name: " . $request->lname);
        Log::info("Email: " . $request->email);
        Log::info("User type: " . $request->user_type);

        DB::table('users')->insert(
            [
                'first_name' => $request->fname,
                'middle_name' => $request->mname,
                'last_name' => $request->lname,
                'email' => $request->email,
                'user_type_id' => $request->user_type,
                'password' => Hash::make($request->password),
            ]
        );
        Log::info("======================= END USER SUBMITTED =======================");

        return redirect()->route('user.list');
    }

    public function showUserUpdate($id){
        $user = DB::table('users')->find($id);
        $user_type = DB::table('user_type')->get();

        return view('user-update', compact('user', 'user_type'));
    }

    public function updateSubmit(Request $request, $id)
    {
        $request->validate(
            [
                'fname' => ['required', 'max:10'],
                'lname' => ['required', 'min:2'],
                'email' => ['required', 'email', 'ends_with:@gmail.com'],
                'user_type' => ['required', 'exists:user_type,id']
            ],
            [
                'fname.required' => 'Ang pangalan mo ay kailangan',
                'lname.required' => 'Ilagay mo rin ang iyong apelyido'
            ]
        );

        DB::table('users')
            ->where('id', $id)
            ->update([
                'first_name' => $request->fname,
                'middle_name' => $request->mname,
                'last_name' => $request->lname,
                'email' => $request->email,
                'user_type_id' => $request->user_type
            ]);

        return redirect()->route('user.list');
    }
}
