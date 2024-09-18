<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\{Computed, Url, On};

class PostList extends Component
{
    use WithPagination;

    #[Url()]
    public $sort = 'desc';
    #[Url()]
    public $search = '';

    public function setSort($sort)
    {
        $this->sort = ($sort === 'desc') ? 'desc' : 'asc';
    }

    #[On('search')]
    public function updateSearch($search)
    {
        $this->search = $search;
        $this->resetPage();
    }

    public function clearSearch()
    {
        $this->search = "";
        $this->resetPage();
    }

    #[Computed()]
    public function posts()
    {
        return Post::published()
            ->orderBy('published_at', $this->sort)
            ->where('title', 'like', "%{$this->search}%")
            ->simplePaginate(5);

    }

    public function render()
    {
        return view('livewire.post-list');
    }
}
