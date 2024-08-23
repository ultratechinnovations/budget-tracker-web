<?php

use App\Livewire\Income\IncomeCreatePage;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(IncomeCreatePage::class)
        ->assertStatus(200);
});
