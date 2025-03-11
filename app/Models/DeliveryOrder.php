<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'purchase_order_id', 
        'delivery_date', 
        'status'
    ];

    public function purchaseOrder() {
        return $this->belongsTo(PurchaseOrder::class);
    }
}
