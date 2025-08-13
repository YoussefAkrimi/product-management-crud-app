<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Product::factory(20)->create();

        // instead : 
        $companies = Company::all();
                // For each company, create 1 product linked to it
foreach ($companies as $company)
{
    Product::factory()->create([
        'company_id' => $company->id,
    ]);
}
    }
}
