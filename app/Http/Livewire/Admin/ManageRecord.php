<?php

namespace App\Http\Livewire\Admin;

use DateTime;
use DateTimeZone;
use App\Models\Record;
use Livewire\Component;
use Livewire\WithPagination;

class ManageRecord extends Component
{
    use WithPagination;

    public $search;
    public $paginate = 5;
    public $showModal = false;
    public $recordId;

    public $fish_name;
    public $port_name;
    public $catch;
    public $date;
    public $status;

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
        Record::destroy($id);
    }

    public function showUpdateModal($id) {
        $data = Record::join('fish', 'fish.fish_id', '=', 'records.fish_id')->join('ports', 'ports.port_id', '=', 'records.port_id')->where('id','=', $id)->get(['records.id','records.status','fish.fish_name','ports.port_name', 'catch', 'date', 'status']);

        $this->recordId = $id;
        $this->showModal = true;

        $this->fish_name = $data[0]->fish_name;
        $this->port_name = $data[0]->port_name;
        $this->catch = $data[0]->catch;
        $this->status = $data[0]->status;

        $date = new DateTime('now', new DateTimeZone('+0800'));
        $timestamp = $data[0]->date/1000;
        $date->setTimestamp($timestamp);
        $this->date = $date->format('Y-m-d');
    }

    public function update() {
        Record::find($this->recordId)->update($this->modelData());

        $this->showModal = false;

        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'title' => 'Record updated successfully',
            'text' => ''
        ]);
    }

    public function modelData() {
        return [
            'catch' => $this->catch,
            'status' => $this->status
        ];
    }

    public function render()
    {
        $recordss = Record::join('fish', 'fish.fish_id', '=', 'records.fish_id')->join('ports', 'ports.port_id', '=', 'records.port_id')->search(trim($this->search))->paginate($this->paginate);

        return view('livewire.admin.manage-record', ['records' => $recordss,'recordss' => $recordss])->layout('layouts.admin');
    }
}
