<?php

use App\Livewire\Category\CategoryListPage;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(CategoryListPage::class)
        ->assertStatus(200);
});
