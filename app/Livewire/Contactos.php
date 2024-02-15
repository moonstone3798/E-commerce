<?php

namespace App\Livewire;

use App\Mail\ContactoMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contactos extends Component
{
    public $nombre;
    public $email;
    public $mensaje;

    protected $rules = [
        'nombre' =>'required',
        'email' => 'required|email',
        'mensaje' => 'required|min:6'
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
        session()->flash('enviado');
        
    return redirect()->to('/contactos');
    }
    public function enviarMail(){
        $contacto =$this->validate();
        Mail::to('avellaneda@gmail.com')->send(new ContactoMail($contacto));
        $this->resetForm();
        
    }
    private function resetForm()
    {
        $this->nombre='';
        $this->email='';
        $this->mensaje='';
 
    }
    public function render()
    {
        return view('livewire.contactos')
        ->layout('layouts.plantilla');
    }
}
