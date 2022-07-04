<?php

use App\Mail\Contact;
use App\Models\Divisa;
use App\Models\Resource;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $divisas = Divisa::where('id','!=',8)->get();
    $dolar_especial = Divisa::find(8);
    $header = Resource::find(1);
    $video1 = Resource::find(2);
    $video2 = Resource::find(3);
    $video3 = Resource::find(4);
    $sliders = Slider::all();
    return view('index',compact('divisas','dolar_especial','header','video1','video2','video3','sliders'));
});

Route::post('/contacto', function(Request $request){

    $request->validate([
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'asunto' => 'required',
        'policy' => 'required',
    ]);

    if ($request->policy == 'on') {
        Mail::to('director@divisasureste.com')->send(new Contact($request));
    }

    return back()->with('success', 'Mensaje enviado correctamente');
})->name('contacto');
