<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'remark',
        'date',
        'user_id',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
