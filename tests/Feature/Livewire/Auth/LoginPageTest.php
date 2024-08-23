<?php

use App\Livewire\Auth\LoginPage;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(LoginPage::class)
        ->assertStatus(200);
});
