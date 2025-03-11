<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'purchase_order_id', 
        'total_purchase', 
        'total_selling'
    ];

    public function purchaseOrder() {
        return $this->belongsTo(PurchaseOrder::class);
    }

    public function getProfitAttribute() {
        return $this->total_selling - $this->total_purchase;
    }
}
