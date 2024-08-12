<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SinhVien extends Model
{
    use HasFactory;

    protected $table = 'sinhvien'; // Tên bảng trong cơ sở dữ liệu

    protected $primaryKey = 'id'; // Khóa chính
    public $incrementing = true; // Sử dụng AUTO_INCREMENT
    protected $keyType = 'int'; // Loại của khóa chính

    protected $fillable = [
        'HoSo_ID',
        'MaSV',
        'password',
        'AnhChanDung',
        'TrangThaiHoc',
        'GiayTotNghiepTT',
        'CCCD',
        'GiayKhamSucKhoe',
        'GiayKhaiSinh',
        'BanSaoBangTotNghiep',
        'BanSaoHocBa',
        'LyLichSinhVien',
        'Anh3x4',
        'CREATEO_BY',
        'CREATEO_DATE',
        'UPDATEO_BY',
        'UPDATEO_DATE',
        'DELETEO_BY',
        'DELETEO_DATE',
        'GhiChu',
        'remember_token',
    ];

    public $timestamps = true; // Bảng có cột created_at và updated_at

    // Định nghĩa quan hệ với bảng `tb_hoso`
    public function hoso()
    {
        return $this->belongsTo(HoSo::class, 'HoSo_ID', 'id');
    }
}
