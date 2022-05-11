<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email;
    public $password;

    public function login() {

        $this->validate(['email' => 'required|email', 'password' => 'required']);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect('/admin/dashboard');
        } else {
            session()->flash('error', "Email or password doesn't match.");

            return redirect('/admin/login');
        }

    }

    public function render()
    {
        return view('livewire.auth.login')->layout('layouts.auth');
    }
}
