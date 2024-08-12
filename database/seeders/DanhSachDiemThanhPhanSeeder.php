<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DanhSachDiemThanhPhanSeeder extends Seeder
{
    public function run()
    {
        $data = [];

        for ($i = 1; $i <= 40; $i++) {
            $data[] = [
                'MaSV' => 'SV' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'MaMonHoc' => 'MH' . str_pad(rand(1, 10), 3, '0', STR_PAD_LEFT),
                'DiemTX1' => rand(5, 10) + (rand(0, 99) / 100),
                'DiemDK1' => rand(5, 10) + (rand(0, 99) / 100),
                'DiemTX2' => rand(5, 10) + (rand(0, 99) / 100),
                'DiemDK2' => rand(5, 10) + (rand(0, 99) / 100),
                'DiemTB' => rand(5, 10) + (rand(0, 99) / 100),
                'khoa' => rand(1, 4),
                'GhiChu' => $i % 2 == 0 ? 'Cần cải thiện' : 'Điểm tốt',
                'CREATEO_BY' => 'admin',
                'CREATEO_DATE' => now(),
                'UPDATEO_BY' => 'admin',
                'UPDATEO_DATE' => now(),
                'DELETEO_BY' => null,
                'DELETEO_DATE' => null,
            ];
        }

        DB::table('danhsachdiemthanhphan')->insert($data);
    }
}
