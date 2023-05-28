<?php

namespace App\Imports;

use App\Models\diem;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStartRow;

class DiemImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // var_dump($row);
        return new diem([
            'diem' => $row['diem'],
            'nam' => $row['nam'],
            'khoi_thi' => $row['khoi_thi'],
            'ma_nganh' => $row['ma_nganh'],
        ]);
    }
}
