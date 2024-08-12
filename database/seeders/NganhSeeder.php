<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NganhSeeder extends Seeder
{
    public function run()
    {
        DB::table('tb_nganh')->insert([
            [
                'MaNganh' => 'N001',
                'TenNganh' => 'Kỹ thuật phần mềm',
                'GhiChu' => 'Ngành học về phát triển phần mềm',
            ],
            [
                'MaNganh' => 'N002',
                'TenNganh' => 'Mạng máy tính',
                'GhiChu' => 'Ngành học về hệ thống mạng và bảo mật',
            ],
            [
                'MaNganh' => 'N003',
                'TenNganh' => 'Trí tuệ nhân tạo',
                'GhiChu' => 'Ngành học về AI và học máy',
            ],
            [
                'MaNganh' => 'N004',
                'TenNganh' => 'Khoa học dữ liệu',
                'GhiChu' => 'Ngành học về phân tích và xử lý dữ liệu',
            ],
            [
                'MaNganh' => 'N005',
                'TenNganh' => 'Quản trị hệ thống',
                'GhiChu' => 'Ngành học về quản trị và bảo trì hệ thống',
            ],
            [
                'MaNganh' => 'N006',
                'TenNganh' => 'Kỹ thuật mạng',
                'GhiChu' => 'Ngành học về thiết kế và quản lý mạng',
            ],
            [
                'MaNganh' => 'N007',
                'TenNganh' => 'Công nghệ thông tin',
                'GhiChu' => 'Ngành học về công nghệ thông tin và hệ thống máy tính',
            ],
            [
                'MaNganh' => 'N008',
                'TenNganh' => 'Đồ họa máy tính',
                'GhiChu' => 'Ngành học về thiết kế đồ họa và đa phương tiện',
            ],
            // Thêm các bản ghi khác nếu cần
        ]);
    }
}
