<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/login', App\Livewire\Auth\LoginPage::class)->name('login');

Route::middleware(['auth'])->group(function(){
    Route::get('/', App\Livewire\Dashboard\DashboardPage::class)->name('home');
    Route::get('/dashboard', App\Livewire\Dashboard\DashboardPage::class)->name('dashboard');
    Route::get('/categories', App\Livewire\Category\CategoryListPage::class)->name('categories.index');
    Route::get('/incomes', App\Livewire\Income\IncomeListPage::class)->name('incomes.index');
    Route::get('/expenses', App\Livewire\Expense\ExpenseListPage::class)->name('expenses.index');

    Route::post('/logout', function(){
        Auth::logout();
        return redirect()->route('login');
    })->name('logout');
});

