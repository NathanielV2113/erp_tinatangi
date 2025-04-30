<?php

namespace Database\Seeders;

use App\Models\MandatoryDeduction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MandatoryDeductionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        MandatoryDeduction::create([
            'name' => 'SSS',
            'amount' => '650'
        ]);
        MandatoryDeduction::create([
            'name' => 'Pag-ibig',
            'amount' => '200'
        ]);
        MandatoryDeduction::create([
            'name' => 'Philhealth',
            'amount' => '250'
        ]);
    }
}
