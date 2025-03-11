<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Supplier::create([
            'name' => 'ABC Supplies',
            'contact_person' => 'John Doe',
            'phone' => '08123456789',
            'email' => 'john@abc.com',
            'address' => 'Jakarta, Indonesia',
        ]);

        Supplier::create([
            'name' => 'XYZ Industries',
            'contact_person' => 'Jane Smith',
            'phone' => '08198765432',
            'email' => 'jane@xyz.com',
            'address' => 'Surabaya, Indonesia',
        ]);
    }
}
