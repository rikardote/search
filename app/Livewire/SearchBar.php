<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class SearchBar extends Component
{
    public $search = "";

    public function render()
    {
        $results = [];

        if (strlen($this->search) >= 1) {
            $results = User::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('num_empleado', 'like', '%' . $this->search . '%')
            ->limit(10)
            ->get();
        }

        return view('livewire.search-bar', [
            'users' => $results
        ]);
    }
    public function link($id){
        dd($id);
    }
}
