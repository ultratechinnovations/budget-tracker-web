<?php

namespace App\Livewire\Expense;

use Livewire\Component;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ExpenseImport;
use Livewire\WithFileUploads;

class ExpenseImportPage extends Component
{
    use WithFileUploads;
    public $excelFile;

    public function render()
    {
        return view('livewire.expense.expense-import-page');
    }

    public function import()
    {
        $file = $this->excelFile->store(path: 'excels');
        Log::info($file);
        Excel::import(new ExpenseImport, $file);

        $this->dispatch('refresh-the-component');
    }
}
