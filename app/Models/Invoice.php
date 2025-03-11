<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'purchase_order_id', 
        'invoice_number', 
        'total_amount', 
        'due_date', 
        'status'
    ];

    public function purchaseOrder() {
        return $this->belongsTo(PurchaseOrder::class);
    }

    public static function generateInvoiceNumber() {
        return 'INV-' . now()->format('Ymd') . '-' . mt_rand(1000, 9999);
    }
}
