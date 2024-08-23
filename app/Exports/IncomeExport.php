<?php

namespace App\Exports;

use App\Models\Income;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class IncomeExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Income::leftJoin('categories as c', 'c.id', 'incomes.category_id')
                    ->select('c.name', 'incomes.amount', 'incomes.remark', 'incomes.date')
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
