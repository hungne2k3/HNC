<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoSo extends Model
{
    use HasFactory;

    protected $table = 'tb_hoso'; // Tên bảng trong cơ sở dữ liệu

    protected $fillable = [
        'MaHoSo',
        'HoDem',
        'Ten',
        'NgayThangNamSinh',
        'GioiTinh',
        'DanToc',
        'CCCD',
        'MaTinh',
        'MaQuanHuyen',
        'MaPhuongXa',
        'MaTinhTruong',
        'MaQuanHuyenTruong',
        'TenTruong',
        'NamTotNghiep',
        'Email',
        'SDT',
        'DoiTuongUT',
        'KhuVucUT',
        'DiaChi',
        'NgayNop',
        'Nganh_ID',
    ];

    protected $primaryKey = 'id'; // Tên cột khóa chính nếu không phải là 'id'
    public $incrementing = true; // Nếu khóa chính là tự động tăng
    protected $keyType = 'int'; // Kiểu của khóa chính

    public $timestamps = true; // Bảng có các cột created_at và updated_at

    // Ràng buộc khóa ngoại
    public function sinhvien()
    {
        return $this->hasMany(User::class, 'HoSo_ID');
    }

    public function nganh()
    {
        return $this->belongsTo(Nganh::class, 'Nganh_ID');
    }
}