<?php

namespace App\Http\Livewire\Admin;

use App\Models\Section;
use Livewire\Component;
use Livewire\WithFileUploads;

class Aliados extends Component
{
    use WithFileUploads;
    public $aliados,$files=[];

    public function mount(){
        $this->aliados = Section::where('name','aliados')->where('page','index')->first();
    }
    public function render()
    {
        return view('livewire.admin.aliados');
    }
}
