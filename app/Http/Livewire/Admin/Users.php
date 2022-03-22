<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Users extends Component
{
    public $roles,$users;
    public function mount(){
        $this->roles = Role::all();
        $this->users = User::all();
    }
    public function render()
    {
        return view('livewire.admin.users');
    }
}
