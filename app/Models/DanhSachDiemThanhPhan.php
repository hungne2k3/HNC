<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhSachDiemThanhPhan extends Model
{
    use HasFactory;

    protected $table = 'danhsachdiemthanhphan'; // Tên bảng trong cơ sở dữ liệu

    protected $primaryKey = 'id'; // Khóa chính
    public $incrementing = true; // Sử dụng AUTO_INCREMENT
    protected $keyType = 'int'; // Loại của khóa chính

    protected $fillable = [
        'MaSV',
        'MaMonHoc',
        'DiemTX1',
        'DiemDK1',
        'DiemTX2',
        'DiemDK2',
        'DiemTB',
        'khoa',
        'GhiChu',
        'CREATEO_BY',
        'CREATEO_DATE',
        'UPDATEO_BY',
        'UPDATEO_DATE',
        'DELETEO_BY',
        'DELETEO_DATE',
    ];

    public $timestamps = false; // Bảng không có các cột timestamps (created_at, updated_at)
}
