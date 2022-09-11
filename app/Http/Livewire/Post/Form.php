<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Form extends Component
{
    public $state = [
        'title' => '',
        'body' => ''
    ];

    public function save()
    {
        $this->state['user_id'] = Auth::user()->id;

        Post::query()->create($this->state);
        $this->emit('updateListCardPost');
//        $this->reset([
//            'title' => '',
//            'body' => ''
//        ]);
    }

    public function render()
    {
        return view('livewire.post.form');
    }
}
