<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhsachMonHoc extends Model
{
    use HasFactory;

    protected $table = 'danhsach_monhoc'; // Tên bảng trong cơ sở dữ liệu

    protected $primaryKey = 'MaMonHoc'; // Khoá chính của bảng

    public $incrementing = false; // Khóa chính không tự động tăng

    protected $keyType = 'string'; // Kiểu khóa chính

    protected $fillable = [
        'MaMonHoc',
        'TenMon',
        'SoTin',
        'LoaiMonHoc',
        'Nganh_ID',
        'SoTiet',
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
    public function nganh()
    {
        return $this->belongsTo(Nganh::class, 'Nganh_ID', 'id');
    }
}
