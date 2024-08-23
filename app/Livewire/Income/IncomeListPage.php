<?php

namespace App\Livewire\Income;

use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use App\Models\Income;
use App\Exports\IncomeExport;
use Maatwebsite\Excel\Facades\Excel;

class IncomeListPage extends Component
{
    use WithPagination;

    #[On('refresh-the-component')]
    public function render()
    {
        $incomes = Income::with('category')->orderBy('id','desc')->paginate();
        return view('livewire.income.income-list-page', compact('incomes'));
    }

    public function export()
    {
        //dd(now()->timestamp);
        return Excel::download(new IncomeExport, 'income_'.now()->timestamp.'.xlsx');
    }
}
