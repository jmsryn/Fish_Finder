<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;

class Home extends Component
{
    public $search;

    public function submit() {
        // dd($this->search);
        return redirect()->route('user.fish_profiles', $this->search);
    }

    public function render()
    {
        return view('livewire.home.home')->layout('layouts.home');
    }
}
