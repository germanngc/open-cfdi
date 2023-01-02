<?php

namespace App\Http\Livewire;

use App\Models\User;
use Hash;
use Livewire\Component;

class Register extends Component
{
    public $email, $name, $password, $password_confirmed;

    public $pageDescription = 'Register to OpenCFDI';
    public $pageTitle = 'Register';

    public function mount()
    {
        $this->_reset();
    }

    /**
     * Register a new user.
     */
    public function register()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'confirmed|required|min:8',
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $this->_reset();
    }

    /**
     * Render the component.
     */
    public function render()
    {
        return view('livewire.register')
        ->layout('layouts.guest')
        ->layoutData([
            'pageDescription' => $this->pageDescription,
            'pageTitle' => $this->pageTitle
        ]);
    }

    /**
     * Reset the component.
     */
    public function _reset(): void
    {
        $this->email = '';
        $this->password = '';
        $this->name = '';
    }
}
