<?php

namespace App\Http\Livewire\Admin;

use App\Models\Resource;
use Livewire\Component;
use Livewire\WithFileUploads;

class Videos extends Component
{
    use WithFileUploads;
    public $video1,$video2,$video3;
    public $file1,$file2,$file3;
    public function mount()
    {
        $this->video1 = Resource::find(2);
        $this->video2 = Resource::find(3);
        $this->video3 = Resource::find(4);
    }
    public function store1()
    {
        $this->validate([
            'file1' => 'required|file|mimes:mp4,mov,ogg,qt',
        ]);

        $url = $this->file1->store('videos');
        $this->video1->url = $url;
        $this->video1->save();
        $this->emit('video1Stored');
    }
    public function store2()
    {
        $this->validate([
            'file2' => 'required|file|mimes:mp4,mov,ogg,qt',
        ]);

        $url = $this->file2->store('videos');
        $this->video2->url = $url;
        $this->video2->save();
        $this->emit('video2Stored');
    }
    public function store3()
    {
        $this->validate([
            'file3' => 'required|file|mimes:mp4,mov,ogg,qt',
        ]);

        $url = $this->file3->store('videos');
        $this->video3->url = $url;
        $this->video3->save();
        $this->emit('video3Stored');
    }
    public function render()
    {
        return view('livewire.admin.videos');
    }
}
