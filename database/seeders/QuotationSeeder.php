<?php

namespace Database\Seeders;

use App\Models\Quotation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuotationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Quotation::create([
            'quotation_code' => Quotation::generateQuotationCode(),
            'customer_name' => 'PT Jaya Abadi',
            'customer_contact' => '082233445566',
            'total_amount' => 1200000,
            'status' => 'pending',
        ]);
    }
}
