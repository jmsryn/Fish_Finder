<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Settings extends Component
{
    public $userId;
    public $name;
    public $email;
    public $password;
    public $currentPass;

    public $currentPassword;
    public $newPassword;
    public $confirmPassword;

    protected $listeners = ['delete'];

    public function mount() {
        $this->userId = auth()->user()->id;
        $this->name = auth()->user()->name;
        $this->email = auth()->user()->email;
    }

    public function deleteAccount() {
        $this->dispatchBrowserEvent('swal:deleteModal', [
            'type' => 'warning',
            'title' => 'Are you sure?',
            'text' => "You won't be able to revert this!",
        ]);
    }

    public function delete() {
        $user = User::find(auth()->user()->id);

        Auth::logout();

        if($user->delete()) {
            return redirect()->route('admin.login');
        }
    }

    public function saveProfile() {
        User::find($this->userId)->update($this->profileData());

        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'title' => 'Success',
            'text' => "Successfully updated profile",
        ]);
    }

    public function profileData() {
        return [
            'name' => $this->name,
            'email' => $this->email
        ];
    }

    public function savePassword() {
        $this->validate();
        if(Hash::check($this->currentPassword, auth()->user()->password)) {
            User::find($this->userId)->update($this->passwordData());
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'title' => 'Success',
                'text' => "Successfully updated profile",
            ]);
            $this->currentPassword = "";
            $this->newPassword = "";
            $this->confirmPassword = "";
        } else {
            $this->currentPass = "asda";
        }
    }

    public function passwordData() {
        return [
            'password' => Hash::make($this->newPassword),
        ];
    }

    public function rules() {
        return [
            'currentPassword' => 'required',
            'newPassword' => 'required',
            'confirmPassword' => 'required|same:newPassword'
        ];
    }

    public function render()
    {
        return view('livewire.admin.settings')->layout('layouts.admin');
    }
}
