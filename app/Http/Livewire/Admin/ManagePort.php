<?php

namespace App\Http\Livewire\Admin;

use App\Models\Port;
use Livewire\Component;
use Livewire\WithPagination;

class ManagePort extends Component
{

    use WithPagination;

    public $search;
    public $paginate = 5;

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
        Port::destroy($id);
    }

    public function render()
    {
        return view('livewire.admin.manage-port', ['ports' => Port::search(trim($this->search))->paginate($this->paginate)])->layout('layouts.admin');
    }
}
