<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            ['name'=>'Food', 'icon'=>'restaurant-line', 'type'=>'Expense'],
            ['name'=>'Gifts', 'icon'=>'gift-line', 'type'=>'Expense'],
            ['name'=>'Health/medical', 'icon'=>'heart-pulse-line', 'type'=>'Expense'],
            ['name'=>'Home', 'icon'=>'home-7-line', 'type'=>'Expense'],
            ['name'=>'Transportation', 'icon'=>'bus-fill', 'type'=>'Expense'],
            ['name'=>'Personal', 'icon'=>'user-2-line', 'type'=>'Expense'],
            ['name'=>'Pets', 'icon'=>'baidu-line', 'type'=>'Expense'],
            ['name'=>'Utilities', 'icon'=>'dashboard-line', 'type'=>'Expense'],
            ['name'=>'Travel', 'icon'=>'suitcase-2-line', 'type'=>'Expense'],
            ['name'=>'Debt', 'icon'=>'money-dollar-circle-line', 'type'=>'Expense'],
            ['name'=>'Snack', 'icon'=>'drinks-2-line', 'type'=>'Expense'],
            ['name'=>'Education', 'icon'=>'graduation-cap-line', 'type'=>'Expense'],
            ['name'=>'Visa', 'icon'=>'passport-line', 'type'=>'Expense'],
            ['name'=>'Internet/topup', 'icon'=>'wifi-line', 'type'=>'Expense'],
            ['name'=>'Salary', 'icon'=>'wallet-3-line', 'type'=>'Income'],
            ['name'=>'Savings', 'icon'=>'bank-line', 'type'=>'Income'],
            ['name'=>'Other', 'icon'=>'aed-line', 'type'=>'Both']
        ]);
    }
}
