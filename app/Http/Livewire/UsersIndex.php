<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersIndex extends Component
{
    use WithPagination;

    public $searchTerm;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        $users = User::where('last_name', 'like', $searchTerm)->orderBy('id', 'desc')->with(['permissions', 'roles', 'providers'])->paginate();

        return view('livewire.users-index', compact('users'));
    }
}
