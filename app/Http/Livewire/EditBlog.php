<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;

class EditBlog extends Component
{
    public $posttop = "Post a gig to find a developer";
    public $title;
    public $description;
    public $location;
    public $logo;
    public $Blogs;
    public $allDatas;
    public $page;


    protected $rules = [
        'title' => 'required',
        'description' => 'required',
        'location' => 'required',
        'logo' => ''
    ];

    public function mount($id)
    {
        // $this->allDatas = Blog::find($id);
    }

    public function edit($id)
    {
        $list = Blog::find($id);

        $this->title = $list->title;
        $this->description = $list->description;
        $this->location = $list->location;
        $this->logo = $list->logo;
    }

    public function render()
    {

        return view('livewire.edit-blog')
            ->extends('layouts.app');
    }

    public function EditPost($id)
    {

        // $record = Blog::find($id);
        //     $record->update([
        //         'title' => $this->title,
        //         'description' => $this->description,
        //         'location' => $this->location,
        //         'logo' => $this->logo
        //     ]);

        $list = Blog::findOrFail($id);

        $list->update([
                    $this->title = $list->title,
                    $this->description = $list->description,
                    $this->location = $list->location,
                    $this->logo = $list->logo,
                ]);


        //  $list->update($this->validate());

        // if($edit){
        //     session()->flash('message', 'You have successfully added a post.');
        //     return redirect()->route('home');
        // }else{

        //     return back();
        // }
    }
}
