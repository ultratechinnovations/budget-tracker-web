<?php

namespace App\Livewire\Income;

use Livewire\Component;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\IncomeImport;
use Livewire\WithFileUploads;

class IncomeImportPage extends Component
{
    use WithFileUploads;
    public $excelFile;

    public function render()
    {
        return view('livewire.income.income-import-page');
    }

    public function import()
    {
        $file = $this->excelFile->store(path: 'excels');
        Log::info($file);
        Excel::import(new IncomeImport, $file);

        $this->dispatch('refresh-the-component');
    }
}
