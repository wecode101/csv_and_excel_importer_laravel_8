<?php

namespace App\Http\Controllers;

use App\Imports\AddressImport;
use Maatwebsite\Excel\Facades\Excel;

class AddressController extends Controller
{

    public function importAddressData($file)
    {
        Excel::import(new AddressImport(), $file);
    }
}
