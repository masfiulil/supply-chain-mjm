<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;

    protected $fillable = [
        'quotation_code',
        'customer_name',
        'customer_contact',
        'total_amount',
        'status',
    ];


    public function details() {
        return $this->hasMany(QuotationDetail::class);
    }

    public static function generateQuotationCode() {
        $prefix = 'LCQUOT';
        $randomNumber = mt_rand(1000000, 9999999);
        $code = $prefix . ' ' . $randomNumber;

        // Pastikan kode unik
        while (self::where('quotation_code', $code)->exists()) {
            $randomNumber = mt_rand(1000000, 9999999);
            $code = $prefix . ' ' . $randomNumber;
        }

        return $code;
    }

    protected static function boot() {
        parent::boot();

        static::creating(function ($quotation) {
            if (empty($quotation->quotation_code)) {
                $quotation->quotation_code = self::generateQuotationCode();
            }
        });
    }

}
