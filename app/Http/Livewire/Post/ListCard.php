<?php

namespace App\Http\Livewire\Post;

use App\Models\Comment;
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
//        return
//        $post = Post::query();
//        $post->join('comments','comments.id','posts.comment_id')
//            ->join('users', 'users.id','comments.user_id')
//            ->orderBy('posts.id', 'DESC')->get();

        $post = Comment::query();
        $post = $post->join('posts as p','p.user_id','comments.user_id')
            ->join('users','users.id','p.user_id');
        $post = $post->where('users.id', 1)

            ->limit(1)
            ->get();
        dd($post);



        $rolesDB = Role::query()
            ->join('tenants as tenant','tenant.id','roles.tenant_id')
            ->join('users as user','user.tenant_id', 'tenant.id')
            ->orderBy('name', 'ASC');

        if ($scope == 'Integrador' && isset($orderDB) && $orderDB) {
            $rolesDB->where(function($query) use ($orderDB) {
                $query->where('tenant.scope', 'Integrador')
                    ->where('id',$orderDB->integrator_id)
                    ->where('user.status', 'Ativo');
            });
        }

        if (isset($scope) && !$orderDB) {
            $rolesDB->withoutGlobalScope('tenant')->whereHas('tenant', function ($query) use ($scope) {
                $query->where('scope', $scope);
            });
        }

        if ($scope == 'Integrador' && isset($orderDB) && $orderDB) {
            $rolesDB->withoutGlobalScope('tenant')->whereHas('tenant', function ($query) use ($orderDB) {
                $query->where('scope', 'Integrador')
                    ->where('id', $orderDB->integrator_id);
            });
        }

        if ($scope == 'Distribuidor' && isset($orderDB) && $orderDB) {
            $rolesDB->withoutGlobalScope('tenant')->whereHas('tenant', function ($query) use ($orderDB) {
                $query->where('scope', 'Distribuidor')
                    ->where('id', $orderDB->distributor_id);
            });
        }

        $rolesDB = $rolesDB->get();
    }

    public function render()
    {
        $response = new StdClass;
        $response->posts = $this->posts();

        return view('livewire.post.list-card',['response' => $response]);
    }
}
