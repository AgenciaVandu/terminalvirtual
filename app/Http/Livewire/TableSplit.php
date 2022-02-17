<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TableSplit extends Component
{
    public $splits,$total=0,$id_splits;

    public function getTotal(){
        
    }
    public function render()
    {
        return view('livewire.table-split');
    }
}
