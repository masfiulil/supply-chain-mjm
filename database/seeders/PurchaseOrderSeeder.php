<?php

namespace Database\Seeders;

use App\Models\PurchaseOrder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PurchaseOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PurchaseOrder::create([
            'supplier_id' => 1,
            'quotation_id' => 1,
            'order_date' => now(),
            'status' => 'approved',
            'total_amount' => 1200000,
        ]);
    }
}
