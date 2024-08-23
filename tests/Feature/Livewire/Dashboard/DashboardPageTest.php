<?php

use App\Livewire\Dashboard\DashboardPage;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(DashboardPage::class)
        ->assertStatus(200);
});
