<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;
use StdClass;

class ListCard extends Component
{
    protected $listeners = [
        'updateListCardPost' => '$refresh'
    ];
    public function posts()
    {
        return Post::query()->with('comments')->orderBy('id', 'DESC')->get();
    }

    public function render()
    {
        $response = new StdClass;
        $response->posts = $this->posts();

        return view('livewire.post.list-card',['response' => $response]);
    }
}
