<?php

namespace App\Http\Livewire;

use App\Models\Comment;

use Livewire\Component;
use App\Models\Like as Likes;
use Illuminate\Support\Facades\Auth;

class Like extends Component
{
    public function render()
    {
        return view('livewire.like')
            ->extends('layouts.app');
    }

    public function like(Comment $comment)
    {
        dd($comment->likes()->id);
        Likes::create([
            'user_id' => Auth::user()->id,
            'comment_id' => $comment->id
        ]);

        return redirect()->route('comment');
    }
}
