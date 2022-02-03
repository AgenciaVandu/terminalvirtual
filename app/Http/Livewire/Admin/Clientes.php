<?php

namespace App\Http\Livewire\Admin;

use App\Models\Image;
use App\Models\Section;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Clientes extends Component
{
    use WithFileUploads;
    public $clientes,$file,$name,$open=false,$rand,$image;
    public $editImage;
    public $editForm = [
        'open' => false,
        'name' => null,
        'url' => null,
    ];

    public function mount(){
        $this->clientes = Section::where('name','clientes')->where('page','index')->first();
        $this->rand = rand();
    }


    public function store(){
        $url = $this->file->store('clientes');
        $this->clientes->images()->create([
            'url'=> $url,
            'name' => $this->name
        ]);

        $this->reset('name','file');
        $this->clientes = Section::where('name','clientes')->where('page','index')->first();
    }

    public function edit(Image $image){
        $this->reset('editImage');
        $this->image = $image;
        $this->editForm['open'] = true;
        $this->editForm['name'] = $image->name;
        $this->editForm['url'] = $image->url;
    }


    public function update(){
        if ($this->editImage) {
            Storage::delete($this->editForm['url']);
            $this->editForm['url'] = $this->editImage->store('clientes');
        }
        $this->image->update($this->editForm);
        $this->reset(['editForm', 'editImage']);
        $this->clientes = Section::where('name','clientes')->where('page','index')->first();

    }

    public function delete(Image $image)
    {
        Storage::delete($image->url);
        $image->delete();
        $this->clientes = Section::where('name','clientes')->where('page','index')->first();
    }


    public function render()
    {
        return view('livewire.admin.clientes');
    }
}
