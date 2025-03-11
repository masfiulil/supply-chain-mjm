<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'cost_price',
        'supplier_id',
        'stock',
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
