<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HoSoSeeder extends Seeder
{
    public function run()
    {
        $data = [];

        for ($i = 1; $i <= 40; $i++) {
            $data[] = [
                'MaHoSo' => 'HS' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'HoDem' => 'Họ ' . $i,
                'Ten' => 'Tên ' . $i,
                'NgayThangNamSinh' => now()->subYears(rand(18, 25))->format('Y-m-d'),
                'GioiTinh' => rand(0, 1) == 0 ? 'Nam' : 'Nữ',
                'DanToc' => 'Kinh',
                'CCCD' => '123456789012345',
                'MaTinh' => 'T' . str_pad(rand(1, 99), 2, '0', STR_PAD_LEFT),
                'MaQuanHuyen' => 'Q' . str_pad(rand(1, 99), 2, '0', STR_PAD_LEFT),
                'MaPhuongXa' => 'P' . str_pad(rand(1, 99), 2, '0', STR_PAD_LEFT),
                'MaTinhTruong' => 'T' . str_pad(rand(1, 99), 2, '0', STR_PAD_LEFT),
                'MaQuanHuyenTruong' => 'Q' . str_pad(rand(1, 99), 2, '0', STR_PAD_LEFT),
                'TenTruong' => 'Trường ' . $i,
                'NamTotNghiep' => now()->subYears(rand(1, 5))->format('Y'),
                'Email' => 'email' . $i . '@example.com',
                'SDT' => '0123456789',
                'DoiTuongUT' => null,
                'KhuVucUT' => 'KV01',
                'DiaChi' => 'Địa chỉ ' . $i,
                'NgayNop' => now(),
                'Nganh_ID' => rand(1, 10),
                'updated_at' => now(),
            ];
        }

        DB::table('tb_hoso')->insert($data);
    }
}
