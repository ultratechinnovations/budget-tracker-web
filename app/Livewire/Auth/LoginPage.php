<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LoginPage extends Component
{
    public string $email;
    public string $password;

    public function mount()
    {
        $this->email = 'test@example.com';
        $this->password = 'password';
    }
    public function render()
    {
        if(Auth::check()){
            return redirect()->route('dashboard');
        }
        return view('livewire.auth.login-page');
    }

    public function login()
    {
        if (Auth::attempt(['email'=>$this->email, 'password'=>$this->password])) {
            session()->regenerate();
 
            return redirect()->intended('dashboard');
        }
    }
}
