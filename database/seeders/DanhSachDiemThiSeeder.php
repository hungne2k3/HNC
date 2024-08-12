<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DanhSachDiemThiSeeder extends Seeder
{
    public function run()
    {
        $records = [];

        for ($i = 1; $i <= 40; $i++) {
            $records[] = [
                'MaSV' => 'SV' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'MaMonHoc' => 'MH' . str_pad(rand(1, 10), 3, '0', STR_PAD_LEFT),
                'DiemThiLan1' => rand(5, 10) + (rand(0, 99) / 100), // Tạo điểm từ 5.00 đến 10.00
                'DiemThiLan2' => rand(5, 10) + (rand(0, 99) / 100),
                'DiemTrungBinhCaKy' => rand(5, 10) + (rand(0, 99) / 100),
                'khoa' => rand(0, 1),
                'GhiChu' => null, // Trường ghi chú để trống
                'CREATEO_BY' => 'admin',
                'CREATEO_DATE' => now(),
                'UPDATEO_BY' => 'admin',
                'UPDATEO_DATE' => now(),
                'DELETEO_BY' => null,
                'DELETEO_DATE' => null,
            ];
        }

        DB::table('danhsachdiemthi')->insert($records);
    }
}
