<?php

namespace App\Http\Livewire\Home;

use App\Models\Fish;
use App\Models\Record;
use Livewire\Component;

class FishProfileMap extends Component
{
    public $fishId;
    public $chart;

    public function mount($id) {
        $this->fishId = $id;
    }


    public function render()
    {
        $final = [];

        $fishData = Fish::where('fish_id',$this->fishId)->first();
        $recordData = Record::with('portsModel')->where('fish_id', $this->fishId)->get();

        $portCount = Record::select('port_id')->where('fish_id', $this->fishId)->distinct('port_id')->get();
        $count = Record::select('port_id')->where('fish_id', $this->fishId)->distinct('port_id')->count();

        for ( $i = 0; $i  < $count; $i++) {
            // Initialize Empty Array for the data
            $emptyArr = [];
            // Get the Port id
            $portId = $portCount[$i]['port_id'];
            // get the data
            $data = Record::join('ports', 'ports.port_id', '=', 'records.port_id')->join('fish', 'fish.fish_id', '=', 'records.fish_id')->where([['ports.port_id', $portId], ['fish.fish_id', $this->fishId]])->select('ports.port_name', 'catch', 'date')->get();
            // get the count
            $dataCount = Record::where([['port_id', $portId], ['fish_id', $this->fishId]])->count();
            for ($k = 0; $k < $dataCount; $k++) {
                $arr = [$data[$k]['date'], $data[$k]['catch']];
                array_push($emptyArr, $arr);
            }

            // create object and push to global array
            $chartObj = (object) ['name' => $data[0]['port_name'], 'data' => $emptyArr];
            array_push($final, $chartObj);
        }


        return view('livewire.home.fish-profile-map', ['fishes' => $fishData, 'fishLocation' => $recordData, 'portCount' => $portCount, 'chartss' => $final])->layout('layouts.home');
    }
}
