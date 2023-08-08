<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class TableList extends Component
{
    use WithPagination;

    public function render()
    {
        $users = User::paginate(10);

        return view('livewire.table-list',
        ['users' => $users]);
    }
}
