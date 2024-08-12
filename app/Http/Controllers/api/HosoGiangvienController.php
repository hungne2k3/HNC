<?php

namespace App\Http\Controllers\api;

use App\Models\HosoGiangvien;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;

class HosoGiangvienController extends Controller
{
    public function getHosoGiangvien(Request $request, $magv)
    {
        // Lấy thông tin giảng viên dựa trên mã giảng viên
        $hosoGiangvien = HosoGiangvien::where('MaGV', $magv)->first();
    }
}
