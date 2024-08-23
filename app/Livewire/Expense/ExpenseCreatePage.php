<?php

namespace App\Livewire\Expense;

use App\Jobs\BalanceAlertJob;
use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class ExpenseCreatePage extends Component
{
    public $amount;
    #[Validate('required')]
    public $category;
    public $remark;
    public $date;

    public function mount()
    {
        $this->category = '';
    }

    public function render()
    {
        $categories = Category::whereIn('type', ['Expense','Both'])->orderBy('name','asc')->get();
        return view('livewire.expense.expense-create-page', compact('categories'));
    }

    public function store()
    {
        $this->validate();


        if(\auth()->user()->expenses->sum('amount') >= \auth()->user()->incomes->sum('amount')){
            BalanceAlertJob::dispatch(Auth::user());
            $this->dispatch('refresh-notification');
        }else{
            auth()->user()->expenses()->create([
                'amount' => $this->amount,
                'category_id' => $this->category,
                'remark' => $this->remark,
                'date' => $this->date
            ]);
            $this->dispatch('refresh-the-component');
        }

    }
}
