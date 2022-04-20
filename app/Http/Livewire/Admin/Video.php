<?php

namespace App\Http\Livewire\Admin;

use App\Models\Resource;
use Livewire\Component;
use Livewire\WithFileUploads;

class Video extends Component
{
    use WithFileUploads;

    public $video,$file;

    public function mount()
    {
        $this->video = Resource::find(1);
    }

    //funcion para guardar el video con livewire
    public function store()
    {
        $this->validate([
            'file' => 'required|file|mimes:mp4,mov,ogg,qt',
        ]);

        $url = $this->file->store('videos');
        $this->video->url = $url;
        $this->video->save();
        $this->emit('videoStored');
    }

    public function render()
    {
        return view('livewire.admin.video');
    }
}
