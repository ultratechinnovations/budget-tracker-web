<?php

namespace App\Livewire\Expense;

use Livewire\Component;
use Livewire\Attributes\On; 
use App\Models\Expense;
use Livewire\WithPagination;
use App\Exports\ExpenseExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Log;

class ExpenseListPage extends Component
{
    use WithPagination;

    public $excelFile;

    #[On('refresh-the-component')]
    public function render()
    {
        $expenses = Expense::with('category')->orderBy('id','desc')->paginate();
        return view('livewire.expense.expense-list-page', compact('expenses'));
    }

    public function export()
    {
        //dd(now()->timestamp);
        return Excel::download(new ExpenseExport, 'expense_'.now()->timestamp.'.xlsx');
    }

    
}
