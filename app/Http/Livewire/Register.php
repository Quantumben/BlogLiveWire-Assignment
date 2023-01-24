<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $regtop = "Create an account to post gigs";

    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required|confirmed'
    ];

    public function render()
    {
        return view('livewire.register')
             ->extends('layouts.app');
    }

     // Create New User
     public function register() {

        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        if($user){

            session()->flash('message', 'Your Registration successful.');
            return redirect()->route('login');

        }else{

            return back()->with('Something went Wrong');

            $this->reset(['name', 'email', 'password']);

        }


    }
}
