<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Http\Request;

class Login extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function render()
    {
        return view('livewire.login')
            ->extends('layouts.app');
    }

    public function login(Request $request)
    {
        $userinfo = $this->validate();

        if(auth()->attempt($userinfo)) {
            $request->session()->regenerate();

            return redirect()->route('dashboard');
        }
        return back()->with('Something went wrong');
    }
}
