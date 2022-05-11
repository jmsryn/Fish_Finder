<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $cpassword;

    public function register() {
        $this->validate();

        User::create($this->modelData());

        return redirect()->route('admin.dashboard');
    }

    public function modelData() {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ];
    }

    public function rules() {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => ['required', Password::min(6)->letters()->symbols()],
        ];
    }

    public function render()
    {
        return view('livewire.auth.register')->layout('layouts.auth');
    }
}
