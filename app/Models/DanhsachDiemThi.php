<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhsachDiemThi extends Model
{
    use HasFactory;

    protected $table = 'danhsachdiemthi'; // Tên bảng trong cơ sở dữ liệu

    protected $fillable = [
        'MaSV',
        'MaMonHoc',
        'DiemThiLan1',
        'DiemThiLan2',
        'DiemTrungBinhCaKy',
        'khoa',
        'GhiChu',
        'CREATEO_BY',
        'CREATEO_DATE',
        'UPDATEO_BY',
        'UPDATEO_DATE',
        'DELETEO_BY',
        'DELETEO_DATE',
    ];

    public $timestamps = false; // Nếu bảng không có các cột timestamps (created_at, updated_at)

    // Định nghĩa các quan hệ nếu cần
    public function sinhVien()
    {
        return $this->belongsTo(SinhVien::class, 'MaSV', 'MaSV');
    }

    public function monHoc()
    {
        return $this->belongsTo(DanhSachMonHoc::class, 'MaMonHoc', 'MaMonHoc');
    }
}
