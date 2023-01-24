<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;

class SingleBlog extends Component
{
    public $Singleblogs;

    public function mount($id)
    {
        $this->Singleblogs = Blog::find($id);

    }

    public function render()
    {
        return view('livewire.single-blog')
                   ->extends('layouts.app');
    }

}
