<?php

use App\Livewire\Income\IncomeListPage;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(IncomeListPage::class)
        ->assertStatus(200);
});
