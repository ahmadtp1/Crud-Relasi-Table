<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pembeliproduk extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('produk')->insert([
            'jenisproduk'=>'MOTOR'
         ]);
       DB::table('produk')->insert([
            'jenisproduk'=>'MOBIL'
         ]);
       DB::table('produk')->insert([
            'jenisproduk'=>'HANDPHONE'
         ]);

       DB::table('pembeli')->insert([
            'idpembeli'=>'001',
            'nama'=>'Ahmad',
            'harga'=>'Rp20.000.000',
            'produk'=>'1',
         ]);
       DB::table('pembeli')->insert([
            'idpembeli'=>'002',
            'nama'=>'Cristian',
            'harga'=>'Rp200.000.000',
            'produk'=>'2',
         ]);
       DB::table('pembeli')->insert([
            'idpembeli'=>'003',
            'nama'=>'Abdul',
            'harga'=>'Rp2.450.000', 
            'produk'=>'3',
         ]);
       
    }
}
