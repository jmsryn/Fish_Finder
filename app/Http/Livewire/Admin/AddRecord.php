<?php

namespace App\Http\Livewire\Admin;

use DateTime;
use DateTimeZone;
use App\Models\Fish;
use App\Models\Port;
use App\Models\Record;
use Livewire\Component;

class AddRecord extends Component
{
    public $fishId;
    public $portId;
    public $catch;
    public $date;
    public $status;
    public $price_from;
    public $price_to;
    public $finalDate;
    

    public function create() {
        $this->validate();
        Record::create($this->modelData());
        
        $this->reset();

        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'title' => 'Record added successfully',
            'text' => ''
        ]);
    }

    public function modelData() {
        $initDate = new DateTime($this->date);
        $initDate->setTimezone(new DateTimeZone('+0800'));
        $initDate->setTime(0,0,0);
        $this->finalDate = $initDate->getTimestamp() * 1000;

        return [
            'fish_id' => $this->fishId,
            'port_id' => $this->portId,
            'date' => $this->finalDate,
            'catch' => $this->catch,
            'status' => $this->status,
            'price_from' => $this->price_from,
            'price_to' => $this->price_to,
        ];
    }

    public function rules() {
        return [
            'fishId' => 'required',
            'portId' => 'required',
            'catch' => 'required',
            'date' => 'required',
            'status' => 'required',
            'price_from' => 'required',
            'price_to' => 'required',
        ];
    }

    public function render()
    {
        return view('livewire.admin.add-record', ['fishs' => Fish::all(), 'portt' => Port::all()])->layout('layouts.admin');
    }
}
