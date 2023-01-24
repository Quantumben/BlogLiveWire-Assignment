<?php

namespace App\Http\Livewire;


use App\Models\Blog as Blogs;
use Livewire\Component;
use Livewire\WithFileUploads;

class Blog extends Component
{
    use WithFileUploads;

    public $posttop = "Post a gig to find a developer";
    public $title;
    public $description;
    public $logo;
    public $location;

    protected $rules = [
        'title' => 'required',
        'description' => 'required',
        'location' => 'required',
        'logo' => 'image'
    ];

    public function render()
    {
        return view('livewire.blog')
            ->extends('layouts.app');
    }

    public function StorePost()
    {
        $this->validate();

        $post = Blogs::create([
            'title' => $this->title,
            'description' => $this->description,
            'location' => $this->location,
            'logo' => $this->logo->store('logo')
        ]);

        if($post){
            session()->flash('message', 'You have successfully added a post.');
            return redirect()->route('home');
        }else{

            return back();
        }

    }
}
