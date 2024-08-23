<?php

namespace App\Exports;

use App\Models\Expense;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExpenseExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Expense::leftJoin('categories as c', 'c.id', 'expenses.category_id')
                    ->select('c.name', 'expenses.amount', 'expenses.remark', 'expenses.date')
                    ->get();
    }

    public function headings(): array
    {
        return [
            'Category',
            'Amount',
            'Remark',
            'Date',
        ];
    }
}
