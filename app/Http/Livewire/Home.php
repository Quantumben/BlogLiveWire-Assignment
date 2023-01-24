<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Home extends Component
{
    use WithPagination;
    public $blogs;
    public $search = '';
    // public $Singleblogs;

    public function mount()
    {
        $this->blogs = Blog::all();
    }

    public function render()
    {
        return view('livewire.home')
            ->extends('layouts.app');
    }

    public function search()
    {
        $searchR = Blog::where('title', 'like', '%' . $this->search . '%')
            ->paginate(10);

    }

    public function DeletePost($id)
    {
        // Blog::delete();

        // $this->emit('alert', [
        //     'success',
        //     'Delete Blog success'
        // ]);
        // DB::table('blogs')->where('id', $id)->delete();
        // dd('ben');
        if ($id) {
            $record = Blog::where('id', $id);
            $record->delete();
        }
    }
}
