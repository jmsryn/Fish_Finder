<?php

namespace App\Http\Livewire\Admin;

use App\Models\Fish;
use App\Models\Port;
use App\Models\Record;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $final = [];

        $fishCount = Fish::count();
        $portCount = Port::count();
        $recordCount = Record::count();

        $topCountId = Fish::select('fish_id')->where('top_fish', 'top')->get()->toArray();
        $topCount = Fish::where('top_fish', 'top')->get()->toArray();

        // dd($topCountId);
        
        // for ($i = 0; $i < $topCount; $i++) {
        //     $emptyArr = [];

        //     $fishId = $topCountId[$i]['fish_id'];
            
        // }

        return view('livewire.admin.dashboard', ['fishCount' => $fishCount, 'portCount' => $portCount, 'recordCount' => $recordCount])->layout('layouts.admin');
    }
}
