<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'remark',
        'date',
        'user_id',
        'category_id'
    ];

    protected function casts(): array
    {
        return [
            'date' => 'date',
        ];
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
