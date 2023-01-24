<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;

class DeleteBlog extends Component
{
    public $Singleblogs;

    public function render()
    {
        return redirect()->route('home');
    }

    
}
