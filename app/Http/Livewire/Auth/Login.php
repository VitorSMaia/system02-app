<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $state;

    public function login()
    {
            if(Auth::attempt($this->state)) {
                return $this->redirect('/');
            }
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}
