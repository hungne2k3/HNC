<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuanheGdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('quanhe_gd')->insert([
            [
                'SinhVien_ID' => 1,
                'HoTen' => 'Nguyễn Văn A',
                'NamSinh' => '1970',
                'SDT' => '0912345678',
                'Email' => 'nguyenvana@example.com',
                'NgheNghiep' => 'Giáo viên',
                'HKTT' => '123 Đường Lê Lợi, Quận 1, TP. Hồ Chí Minh',
                'GhiChu' => 'Bố của sinh viên.',
                'edited' => 0,
            ],
            [
                'SinhVien_ID' => 1,
                'HoTen' => 'Trần Thị B',
                'NamSinh' => '1975',
                'SDT' => '0987654321',
                'Email' => 'tranthib@example.com',
                'NgheNghiep' => 'Kinh doanh',
                'HKTT' => '456 Đường Trần Hưng Đạo, Quận 5, TP. Hồ Chí Minh',
                'GhiChu' => 'Mẹ của sinh viên.',
                'edited' => 0,
            ],
            [
                'SinhVien_ID' => 2,
                'HoTen' => 'Phạm Văn C',
                'NamSinh' => '1965',
                'SDT' => '0911122233',
                'Email' => 'phamvanc@example.com',
                'NgheNghiep' => 'Kỹ sư',
                'HKTT' => '789 Đường Nguyễn Huệ, Quận 3, TP. Hồ Chí Minh',
                'GhiChu' => 'Bố của sinh viên.',
                'edited' => 0,
            ],
        ]);
    }
}
