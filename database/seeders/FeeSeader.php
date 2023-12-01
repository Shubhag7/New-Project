<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class FeeSeader extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
		$fees = array(
            array('fee_type' => 'admission', 'class' => null, 'amount' => '2000'),
            array('fee_type' => 'late', 'class' => null, 'amount' => '50'),
            array('fee_type' => 'regular', 'class' => 'PC', 'amount' => '3300'),
            array('fee_type' => 'regular', 'class' => 'UKG', 'amount' => '3300'),
            array('fee_type' => 'regular', 'class' => 'One', 'amount' => '3800'),
            array('fee_type' => 'regular', 'class' => 'Two', 'amount' => '3800'),
            array('fee_type' => 'regular', 'class' => 'Three', 'amount' => '3800'),
            array('fee_type' => 'regular', 'class' => 'Four', 'amount' => '3800'),
            array('fee_type' => 'regular', 'class' => 'Five', 'amount' => '3800'),
            array('fee_type' => 'regular', 'class' => 'Six', 'amount' => '4300'),
            array('fee_type' => 'regular', 'class' => 'Seven', 'amount' => '4300'),
            array('fee_type' => 'regular', 'class' => 'Eight', 'amount' => '4300'),
        );
        DB::table('fees')->insert($fees);
        
    }
}
