<?php

use App\Livewire\Expense\ExpenseListPage;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(ExpenseListPage::class)
        ->assertStatus(200);
});
