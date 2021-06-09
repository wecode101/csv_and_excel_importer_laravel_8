<?php

namespace App\Imports;

use App\Models\Address;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AddressImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return Model|null
    */
    public function model(array $row)
    {
        return new Address([
            'address' => $row['address'],
            'city' => $row['city'],
            'postal_code' => $row['postal_code'],
            'state' => $row['state'],
        ]);
    }
}
