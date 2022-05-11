<?php

namespace App\Http\Livewire\Admin;

use App\Models\Fish;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditFishPage extends Component
{
    use WithFileUploads;

    public $fishId;
    public $fish_name;
    public $local_name;
    public $scientific_name;
    public $feature;
    public $development;
    public $diet;
    public $image;
    public $top;
    public $oldImage;

    public function mount($fish_id) {

        $this->fishId = $fish_id;

        $data = Fish::where('fish_id', $fish_id)->get();
        $this->fish_name = $data[0]->fish_name;
        $this->local_name = $data[0]->local_name;
        $this->scientific_name = $data[0]->scientific_name;
        $this->feature = $data[0]->feature;
        $this->development = $data[0]->development;
        $this->diet = $data[0]->diet;
        $this->oldImage = $data[0]->image;
        if ($data[0]->top_fish == "none") {
            $this->top = "";
        } else {
            $this->top = $data[0]->top_fish;
        }

        // dd($this->top);
    }

    public function update() {
        Fish::find($this->fishId)->update($this->modelData());
        session()->flash('update');

        return redirect()->route('admin.manage_fish');
    }

    public function modelData() {
        $this->top = $this->top != null ? $this->top : "none";
        if ( $this->image == null || $this->image == "null" ) {
            return [
                'fish_name' => $this->fish_name,
                'local_name' => $this->local_name,
                'scientific_name' => $this->scientific_name,
                'feature' => $this->feature,
                'development' => $this->development,
                'diet' => $this->diet,
                'top_fish' => $this->top,
                'image' => $this->oldImage,
            ];
        } else {
            $url = $this->image->store('images', 'public');

            return [
                'fish_name' => $this->fish_name,
                'local_name' => $this->local_name,
                'scientific_name' => $this->scientific_name,
                'feature' => $this->feature,
                'development' => $this->development,
                'diet' => $this->diet,
                'top_fish' => $this->top,
                'image' => $url,
            ];
        }
    }

    public function render()
    {
        return view('livewire.admin.edit-fish-page')->layout('layouts.admin');
    }
}
