<?php

namespace App\Http\Livewire\Admin;

use App\Models\Resource;
use App\Models\Slider;
use Livewire\Component;
use Livewire\WithFileUploads;

class Sliders extends Component
{
    use WithFileUploads;
    public $sliders,$file,$slider,$title,$rand;
    public $create=false;

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

    public function store(){
        $this->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|min:3|max:255',
        ]);

        $slider = new Slider();
        $slider->url = $this->file->store('sliders');
        $slider->title = $this->title;
        $slider->save();

        $this->sliders = Slider::all();
        $this->create=false;

    }

    public function render()
    {
        return view('livewire.admin.sliders');
    }
}
