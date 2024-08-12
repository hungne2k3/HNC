<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class HosoGiangvien extends Authenticatable implements JWTSubject
{
    protected $table = 'hoso_giangvien'; // Chỉ định bảng sử dụng

    protected $primaryKey = 'MaGV'; // Chỉ định khóa chính

    public $incrementing = false; // MaGV không phải auto-increment

    protected $fillable = [
        'MaGV', 'HoDem', 'Ten', 'password', 'Email', // Các cột cần thiết cho xác thực
    ];

    protected $hidden = [
        'password', // Ẩn trường password
    ];

    /**
     * Get the identifier that will be stored in the token.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey(); // Trả về khóa chính của người dùng
    }

    /**
     * Get the custom claims for the token.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return []; // Trả về mảng claims tùy chỉnh nếu có
    }
}
