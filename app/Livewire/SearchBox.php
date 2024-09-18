<?php

namespace App\Livewire;

use Livewire\Component;

class SearchBox extends Component
{

    public $search = '';
    // hook named after varible
    // public function updatedSearch()
    // {
    //     $this->dispatch('search', search : $this->search);
    // }

    public function update()
    {
        $this->dispatch('search', search : $this->search);
    }

    public function render()
    {
        return view('livewire.search-box');
    }
}
