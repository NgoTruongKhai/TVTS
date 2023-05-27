<?php

namespace App\Imports;

use App\Models\diem;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DiemImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new diem([
            'diem' => $row['diem'],
            'nam' => $row['nam'],
            'ma_nganh' => $row['ma_nganh'],
        ]);
    }
}
