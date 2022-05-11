<?php

namespace App\Http\Livewire\Admin;

use App\Models\Port;
use Livewire\Component;

class AddPort extends Component
{
    public $longitude;
    public $latitude;
    public $port_name;
    public $deleteModalVisible;

    public function deleteMarker() {
        $this->latitude = null;
        $this->longitude = null;
    }

    public function create() {
        $this->validate();
        Port::create($this->modelData());
        
        $this->reset();

        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'title' => 'Port added successfully',
            'text' => ''
        ]);
    }

    public function modelData() {
        return [
            'port_name' => $this->port_name,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
        ];
    }

    public function rules() {
        return [
            'port_name' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
        ];
    }

    public function render()
    {
        return view('livewire.admin.add-port')->layout('layouts.admin');
    }
}
