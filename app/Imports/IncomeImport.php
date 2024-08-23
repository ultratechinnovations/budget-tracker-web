<?php

namespace App\Imports;

use App\Models\Income;
use App\Models\Category;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class IncomeImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Income([
            'category_id' => Category::where('name', $row['category'])->pluck('id')->first(),
            'user_id' => auth()->user()->id,
            'amount' => $row['amount'],
            'remark' => $row['remark'],
            'date' => $row['date'],
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
