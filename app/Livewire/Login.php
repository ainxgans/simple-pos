<?php

namespace App\Livewire;

use Livewire\Component;

class Login extends Component
{
    public $name,$password;

    public function login()
    {
        $validated = $this->validate([
            'name' => 'required',
            'password' => 'required'
        ]);
        if(\Auth::attempt($validated)) {
            return redirect()->route('home');
        }else{
            session()->flash('error','Alamat email atau password salah');
        }
    }
    public function render()
    {
        return view('livewire.login')->layout('components.layouts.guests');
    }
}
