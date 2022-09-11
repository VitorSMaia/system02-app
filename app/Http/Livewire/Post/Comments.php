<?php

namespace App\Http\Livewire\Post;

use App\Models\Comment;
use App\Models\Post;
use App\Notifications\PostCommented;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use StdClass;

class Comments extends Component
{
    protected $listeners = [
        'updateComments' => '$refresh'
    ];
    public $idPost;

    public $state;

    public function mount($id)
    {
        if ($id) {

            $this->idPost = $id;

            $this->getPosts();
        }
    }

    public function getPosts()
    {
        return Post::query()->where('id',$this->idPost)->with('comments')->orderBy('id', 'DESC')->get();
    }

    public function save()
    {
        $returnCreateCommentPost = Comment::query()->with(['post', 'post.users'])->create([
            'user_id' => Auth::user()->id,
            'post_id' => $this->idPost,
            'body' => $this->state['body']
        ]);

        $author = $returnCreateCommentPost->post->user->first();

        $author->notify(new PostCommented($returnCreateCommentPost));
        $this->emit('updateComments');
    }

    public function render()
    {
        $response = new StdClass;
        $response->posts = $this->getPosts();

        return view('livewire.post.comments', ['response' => $response]);
    }
}
