<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhSachDiemDanh extends Model
{
    use HasFactory;

    protected $table = 'danhsachdiemdanh'; // Tên bảng trong cơ sở dữ liệu

    protected $fillable = [
        'MaSV',
        'MaMonHoc',
        'SoTietDiMuon',
        'NgayDiemDanh',
        'GhiChu',
        'CREATEO_BY',
        'CREATEO_DATE',
        'UPDATEO_BY',
        'UPDATEO_DATE',
        'DELETEO_BY',
        'DELETEO_DATE',
    ];

    protected $primaryKey = 'id'; // Tên cột khóa chính nếu không phải là 'id'
    public $incrementing = true; // Nếu khóa chính là tự động tăng
    protected $keyType = 'int'; // Kiểu của khóa chính

    public $timestamps = false; // Bảng không có các cột created_at và updated_at

    // Quan hệ với bảng sinhvien
    public function sinhvien()
    {
        return $this->belongsTo(SinhVien::class, 'MaSV', 'MaSV');
    }
}
