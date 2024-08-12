<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nganh extends Model
{
    use HasFactory;

    protected $table = 'tb_nganh'; // Tên bảng trong cơ sở dữ liệu

    protected $fillable = [
        'MaNganh',
        'TenNganh',
        'GhiChu',
    ];

    protected $primaryKey = 'id'; // Tên cột khóa chính nếu không phải là 'id'
    public $incrementing = true; // Nếu khóa chính là tự động tăng
    protected $keyType = 'int'; // Kiểu của khóa chính

    public $timestamps = false; // Bảng không có các cột created_at và updated_at

    // Quan hệ với bảng tb_hoso
    public function hosos()
    {
        return $this->hasMany(HoSo::class, 'Nganh_ID');
    }
}
