<?php

namespace App\Http\Controllers\Auth;

use Session;
use Illuminate\Support\Facades\Hash;
use App\Rules\MatchCurrentPassword;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChangePasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function showChangePasswordForm()
    {
        return view('auth.passwords.update');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
          'current_password' => ['required','string','min:6',new MatchCurrentPassword()],
          'new_password' => 'required|string|min:6|confirmed',
        ]);

        auth()->user()->update(['password' => Hash::make($request['new_password'])]);

        Session::flash('status', 'Password changed successfully!');
        return redirect()->back();
    }
}
