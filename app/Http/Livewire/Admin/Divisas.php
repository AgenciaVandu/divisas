<?php

namespace App\Http\Livewire\Admin;

use App\Models\Divisa;
use Livewire\Component;

class Divisas extends Component
{
    public $divisas,$divisa;
    public $name,$compra,$venta;
    public $edit=false;

    public function mount()
    {
        $this->divisas = Divisa::all();
    }

    public function edit(Divisa $divisa){
        $this->edit=true;
        $this->divisa=$divisa;
        $this->name = $divisa->name;
        $this->compra = $divisa->compra;
        $this->venta = $divisa->venta;
    }

    public function update(){
        $this->validate([
            'name' => 'required',
            'compra' => 'required',
            'venta' => 'required',
        ]);

        $divisa = Divisa::find($this->divisa->id);
        $divisa->name = $this->name;
        $divisa->compra = $this->compra;
        $divisa->venta = $this->venta;
        $divisa->save();

        $this->edit=false;
        $this->reset('name','compra','venta');
        $this->divisas = Divisa::all();
    }

    public function render()
    {
        return view('livewire.admin.divisas');
    }
}
