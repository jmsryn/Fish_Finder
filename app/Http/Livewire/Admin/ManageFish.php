<?php

namespace App\Http\Livewire\Admin;

use App\Models\Fish;
use Livewire\Component;
use Livewire\WithPagination;

class ManageFish extends Component
{
    use WithPagination;

    public $search;
    public $paginate = 5;
    public $fishId;
    public $showModal = false;

    public $fish_name;
    public $local_name;
    public $scientific_name;
    public $feature;
    public $development;
    public $diet;
    public $updateDiet;
    // public $fishId;

    protected $listeners = ['delete'];

    public function deleteModal($id) {
        $this->dispatchBrowserEvent('swal:deleteModal', [
            'type' => 'warning',
            'title' => 'Are you sure?',
            'text' => "You won't be able to revert this!",
            'id' => $id
        ]);
    }

    public function delete($id) {
        Fish::destroy($id);
    }

    public function render()
    {
        return view('livewire.admin.manage-fish', ['fishes' => Fish::search(trim($this->search))->paginate($this->paginate)])->layout('layouts.admin');
    }
}
