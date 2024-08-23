<?php

namespace App\Livewire\Income;

use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class IncomeCreatePage extends Component
{

    public $amount;
    #[Validate('required')]
    public $category;
    public $remark;
    public $date;

    public function mount()
    {
        Auth::loginUsingId(1);
        $this->category = '';
    }

    public function render()
    {
        $categories = Category::whereIn('type', ['Income','Both'])->orderBy('name','asc')->get();
        return view('livewire.income.income-create-page', compact('categories'));
    }

    public function store()
    {
        $this->validate();

        auth()->user()->incomes()->create([
            'amount' => $this->amount,
            'category_id' => $this->category,
            'remark' => $this->remark,
            'date' => $this->date
        ]);

        $this->dispatch('refresh-the-component');
        
    }
}
