<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Logout extends Component
{
    public function logout() {
        Auth::logout();
        return redirect('/admin/login');
    }

    public function render()
    {
        return view('livewire.auth.logout')->layout('layouts.admin');
    }
}
