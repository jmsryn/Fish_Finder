<?php

namespace App\Http\Livewire\Admin;

use App\Models\Fish;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddFish extends Component
{

    use WithFileUploads;

    public $fish_name;
    public $scientific_name;
    public $local_name;
    public $image;
    public $feature;
    public $development;
    public $diet;
    public $top;

    public function create() {
        // dd($this->insertModelData());
        $this->validate();
        Fish::create($this->insertModelData());
        
        session()->flash('message');

        return redirect()->route('admin.add_fish');

    }

    public function rules() {
        return [
            'fish_name' => 'required',
            'local_name' => 'required',
            'scientific_name' => 'required',
            'image' => 'required|image:jpeg,png,jpg,gif,svg',
            'feature' => 'required',
            'development' => 'required',
            'diet' => 'required',
        ];
    }

    public function insertModelData() {

        $url = $this->image->store('images', 'public');
        $this->top = $this->top != null ? $this->top : "none";

        return [
            'fish_name' => $this->fish_name,
            'scientific_name' => $this->scientific_name,
            'local_name' => $this->local_name,
            'image' => $url,
            'feature' => $this->feature,
            'development' => $this->development,
            'diet' => $this->diet,
            'top_fish' => $this->top
        ];
    }

    public function render()
    {
        return view('livewire.admin.add-fish')->layout('layouts.admin');
    }
}
