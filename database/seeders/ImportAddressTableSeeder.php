<?php

namespace Database\Seeders;

use App\Http\Controllers\AddressController;
use Illuminate\Database\Seeder;

class ImportAddressTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = storage_path('addresses.csv');
        $addressImport = new AddressController();
        $addressImport->importAddressData($file);
    }
}
