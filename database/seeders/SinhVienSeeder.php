<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SinhVienSeeder extends Seeder
{
    public function run()
    {
        $data = [];

        for ($i = 1; $i <= 40; $i++) {
            $data[] = [
                'HoSo_ID' => $i, // ID của bảng `tb_hoso`
                'MaSV' => 'SV' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'password' => bcrypt('password123'),
                'AnhChanDung' => 'images/sv' . str_pad($i, 3, '0', STR_PAD_LEFT) . '.jpg',
                'TrangThaiHoc' => $i % 2 == 0 ? 'Đã tốt nghiệp' : 'Đang học',
                'GiayTotNghiepTT' => rand(0, 1),
                'CCCD' => rand(0, 1),
                'GiayKhamSucKhoe' => rand(0, 1),
                'GiayKhaiSinh' => rand(0, 1),
                'BanSaoBangTotNghiep' => rand(0, 1),
                'BanSaoHocBa' => rand(0, 1),
                'LyLichSinhVien' => rand(0, 1),
                'Anh3x4' => rand(0, 1),
                'CREATEO_BY' => 'admin',
                'CREATEO_DATE' => now(),
                'UPDATEO_BY' => 'admin',
                'UPDATEO_DATE' => now(),
                'DELETEO_BY' => null,
                'DELETEO_DATE' => null,
                'GhiChu' => $i % 2 == 0 ? 'Sinh viên đã tốt nghiệp.' : 'Sinh viên năm thứ nhất.',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('sinhvien')->insert($data);
    }
}
