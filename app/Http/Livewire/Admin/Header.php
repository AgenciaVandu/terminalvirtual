<?php

namespace App\Http\Livewire\Admin;

use App\Models\Image;
use App\Models\Section;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Header extends Component
{
    use WithFileUploads;

    public $photo,$header,$link;

    public function mount(){
        $this->header = Section::where('name','header')->where('page','index')->first();
        $this->link = $this->header->image->link;
    }

    public function updatedPhoto()
    {
        $this->validate([
            'photo' => 'image|max:1024',
        ]);
    }

    public function save(){
        if ($this->header->image) {
            Storage::delete($this->header->image->first()->url);
            $this->header->image->delete();
        }
        $url = $this->photo->store('sections');
        $this->header->images()->create([
            'url' => $url,
            'link' => $this->link
        ]);

        $this->emit('saved');
        $this->header = Section::where('name','header')->where('page','index')->first();

    }

    public function delete(Image $image){
        $image->delete();
        $this->header = Section::where('name','header')->where('page','index')->first();
    }

    public function render()
    {
        return view('livewire.admin.header');
    }
}
