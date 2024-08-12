<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DanhSachDiemDanhSeeder extends Seeder
{
    public function run()
    {
        $records = [];

        for ($i = 1; $i <= 40; $i++) {
            $records[] = [
                'MaSV' => 'SV' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'MaMonHoc' => 'MH' . str_pad(rand(1, 10), 3, '0', STR_PAD_LEFT),
                'SoTietDiMuon' => rand(0, 5),
                'NgayDiemDanh' => now()->subDays(rand(1, 30))->format('Y-m-d'),
                'GhiChu' => null, // Trường ghi chú để trống
                'CREATEO_BY' => 'admin',
                'CREATEO_DATE' => now(),
                'UPDATEO_BY' => 'admin',
                'UPDATEO_DATE' => now(),
                'DELETEO_BY' => null,
                'DELETEO_DATE' => null,
            ];
        }

        DB::table('danhsachdiemdanh')->insert($records);
    }
}
