<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuanheGd extends Model
{
    use HasFactory;
    protected $table = 'quanhe_gd'; // Tên bảng trong cơ sở dữ liệu

    protected $fillable = [
        'SinhVien_ID',
        'HoTen',
        'NamSinh',
        'SDT',
        'Email',
        'NgheNghiep',
        'HKTT',
        'GhiChu',
        'edited',
    ];

    public $timestamps = false; // Nếu bảng không có các cột timestamps (created_at, updated_at)
}
