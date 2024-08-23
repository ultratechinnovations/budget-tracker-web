<?php

use App\Livewire\Expense\ExpenseImportPage;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(ExpenseImportPage::class)
        ->assertStatus(200);
});
