<?php

use App\Livewire\Expense\ExpenseCreatePage;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(ExpenseCreatePage::class)
        ->assertStatus(200);
});
