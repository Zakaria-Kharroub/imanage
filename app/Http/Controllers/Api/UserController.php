<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Show the registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegisterForm()
    {
        return view('register');
    }

    /**
     * Create a new user.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function registerUser(Request $request)
    {
        try {
            // Validate user input
            $validateUser = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required'
            ]);

            if ($validateUser->fails()) {
                return redirect('/register')->withErrors($validateUser)->withInput();
            }

            // Create a new user
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            return redirect('/login')->with('success', 'Registration successful. Please login.');
        } catch (\Throwable $th) {
            return redirect('/register')->with('error', $th->getMessage())->withInput();
        }
    }

    /**
     * Show the login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('login');
    }

    /**
     * Login a user.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function loginUser(Request $request)
    {
        try {
            if (!Auth::attempt($request->only('email', 'password'))) {
                return redirect('/login')->with('error', 'Invalid credentials')->withInput();
            }
            
            // Set session variable
            session(['authenticated' => true]);
    
            return redirect()->intended('/');
        } catch (\Throwable $th) {
            return redirect('/login')->with('error', $th->getMessage())->withInput();
        }
    }
    
/**
 * Logout the authenticated user.
 *
 * @param Request $request
 * @return \Illuminate\Http\RedirectResponse
 */
public function logoutUser(Request $request)
{
    try {
        // Revoke the current user's token
        $request->user()->tokens()->delete();

        // Unset session variable
        session()->forget('authenticated');

        // Redirect to the login view after logout
        return Redirect::route('login')->with([
            'status' => true,
            'message' => 'User logged out successfully',
        ]);
    } catch (\Throwable $th) {
        return Redirect::route('login')->with([
            'status' => false,
            'message' => $th->getMessage(),
        ]);
    }
}

}
