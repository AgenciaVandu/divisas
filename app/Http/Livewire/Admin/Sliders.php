<?php

namespace App\Http\Livewire\Admin;

use App\Models\Resource;
use App\Models\Slider;
use Livewire\Component;
use Livewire\WithFileUploads;

class Sliders extends Component
{
    use WithFileUploads;
    public $sliders,$file,$fileEdit,$slider,$title,$url,$rand;
    public $create=false,$edit=false;
    public $editForm = [
        'title'=>'',
        'url'=>'',
    ];

    public function mount()
    {
        $this->sliders = Slider::all();

    }

    public function create(){
        $this->create=true;
        $this->file = null;
        $this->title = '';
        $this->rand=rand(1,100);
    }

    public function edit(Slider $slider){
        $this->edit=true;
        $this->slider = $slider;
        $this->url = $slider->url;
        $this->editForm = [
            'title'=>$slider->title,
            'url'=>$slider->url,
        ];
        $this->rand=rand(1,100);
    }

    public function store(){
        $this->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|min:3|max:255',
        ]);

        $slider = new Slider();
        $slider->url = $this->file->store('sliders');
        $slider->title = $this->title;
        $slider->save();
        $this->reset('sliders');
        $this->sliders = Slider::all();
        $this->create=false;

    }

    public function update(){
        $this->validate([
            'editForm.title' => 'required|min:3|max:255',
        ]);

        if($this->fileEdit){
            $this->slider->url = $this->fileEdit->store('sliders');
        }
        $this->slider->title = $this->editForm['title'];
        $this->slider->update();
        $this->edit=false;
        $this->reset('sliders');
        $this->sliders = Slider::all();
        $this->fileEdit = null;

    }

    public function render()
    {
        return view('livewire.admin.sliders');
    }
}
