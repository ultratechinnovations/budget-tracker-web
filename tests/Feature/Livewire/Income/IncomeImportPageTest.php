<?php

use App\Livewire\Income\IncomeImportPage;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(IncomeImportPage::class)
        ->assertStatus(200);
});
