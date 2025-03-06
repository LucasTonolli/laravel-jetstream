<?php

namespace App\Livewire;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;
use Laravel\Jetstream\ConfirmsPasswords;
use Livewire\Component;

class ShowUserData extends Component
{
    use ConfirmsPasswords;

    public ?Authenticatable $user = null;
    public bool $showUser = false;
    public function render()
    {
        if ($this->passwordIsConfirmed()) {
            $this->showUser();
        }
        return view('livewire.show-user-data');
    }

    public function showUser()
    {
        $this->ensurePasswordIsConfirmed();
        $this->user = Auth::user();
        $this->showUser = true;
    }
}
