<?php

namespace App\Http\Livewire;
use App\Models\Like;
use Livewire\Component;
use App\Models\Comment as Comments;
use Illuminate\Support\Facades\Auth;

class Comment extends Component
{
    public $comments = [];
    public $comment;

    protected $rules = [
        'comment' => 'required'
    ];

    public function render()
    {
        return view('livewire.comment')
            ->extends('layouts.app');
    }

    public function mount()
    {
        $this->comments = Comments::all();
    }

    public function AddComment()
    {
        $validatedData = $this->validate();

        Comments::create($validatedData);

        $this->reset();

    }

    public function like()
    {
          dd($this->comment);
        Like::create([
            'user_id' => Auth::user()->id,
            'comment_id' => 'dddd'
        ]);

        return redirect()->route('comment');
    }

}
