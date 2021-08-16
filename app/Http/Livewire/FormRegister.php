<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Mail\DemoEmail;
use App\Mail\Register;
use Illuminate\Support\Facades\Mail;

class FormRegister extends Component
{
    public $nombre, $apellidos, $telefono, $pais = "", $email, $marca_dual = "", $aviso;
    public $validate_form = false;
    public $completed = false;

    protected function rules()
    {
        return [
            'nombre' => 'required',
            'apellidos' => 'required',
            'telefono' => 'required',
            'pais' => 'required',
            'email' => ['required', 'max:255', 'email', 'regex:/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/', 'unique:users'],
            'marca_dual' => 'required',
            'aviso' => 'required',
        ];
    }

    protected $messages = [
        'required' => 'Campo vacío',
        'email.email' => 'Email inválido',
        'email.unique:users' => 'Este correo ya esta registrado'
    ];

    public function submit()
    {
        $this->validate_form = true;
        $this->validate();
        $this->validate_form = false;

        $user = User::create([
            'nombre' => $this->nombre,
            'apellidos' => $this->apellidos,
            'telefono' => $this->telefono,
            'pais' => $this->pais,
            'email' => $this->email,
            'marca_dual' => $this->marca_dual,

        ]);
        $user->assignRole('user');
        $this->completed = true;
        Mail::to($this->email)->send(new Register);

        $this->reset(['nombre', 'apellidos', 'telefono', 'pais', 'email', 'marca_dual']);
    }

    public function render()
    {
        return view('livewire.form-register');
    }
}
