<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'supplier_id',
        'quotation_id',
        'order_date',
        'status',
        'total_amount',
    ];

    public function supplier() {
        return $this->belongsTo(Supplier::class);
    }

    public function quotation() {
        return $this->belongsTo(Quotation::class);
    }

    public function details() {
        return $this->hasMany(PurchaseOrderDetail::class);
    }
}
