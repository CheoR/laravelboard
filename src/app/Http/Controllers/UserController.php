<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')
                ->with('message', 'Hola!');
        }

        return back()
            ->withErrors(['email' => 'Invalid Credentials'])
            ->onlyInput('email');
    }

    public function create() {
        return view('users.register');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:4'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        // log user in automatically after user signup
        $user = User::create($formFields);
        auth()->login($user);

        return redirect('/')
            ->with('message', 'Thank you for signing up! BARK!');
    }

    public function login() {
        return view('users.login');
    }

    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'Logged out');
    }
}
