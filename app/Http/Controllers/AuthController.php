<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\HosoGiangvien;
use PhpParser\Node\Stmt\TryCatch;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    // Login
    public function login()
    {
        $credentials = request(['magv', 'password']);

        if (!$token = auth('api')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }


        $refreshToken = $this->createRefreshToken();
        return $this->respondWithToken($token, $refreshToken);
    }

    // Logout
    public function logout()
    {
        auth('api')->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    // // Xử lý RefreshToken
    // public function refresh() {
    //     $refreshToken = request()->refresh_token;
    //     try {
    //         $decode = JWTAuth::getJWTProvider()->decode($refreshToken);
    //         // Xử lý cấp lại token mới
    //         // -> Lấy thông tin user
    //         $user = User::find($decode['magv']);
    //         if (!$user) {
    //             return response()->json(['error'=> 'User not found'], 404);
    //         }

    //         // Vô hiệu hóa token hiện tại
    //         JWTAuth::invalidate(JWTAuth::getToken());
    //         $token = auth('api')->login($user);
    //         $refreshToken = $this->createRefreshToken();

    //         return $this->respondWithToken($token, $refreshToken);
    //     } catch (Exception $exception) {
    //        return response()->json(['error' => 'Refresh Token Invalid'], 500); 
    //     }
    // }

    // Xử lý RefreshToken
    public function refresh()
    {
        $refreshToken = request()->refresh_token;
        try {
            // Giải mã refresh token
            $decode = JWTAuth::getJWTProvider()->decode($refreshToken);

            // Lấy thông tin người dùng từ mã giảng viên
            $user = HosoGiangvien::find($decode['MaGV']);
            if (!$user) {
                return response()->json(['error' => 'User not found'], 404);
            }

            // Vô hiệu hóa token hiện tại
            JWTAuth::invalidate(JWTAuth::getToken());

            // Tạo token mới
            $token = auth('api')->login($user);
            $RefreshToken = $this->createRefreshToken();

            return $this->respondWithToken($token, $RefreshToken);
            // return redirect()->route('/api/homepage'); // Điều hướng đến route tên là 'home'
        } catch (Exception $exception) {
            return response()->json(['error' => 'Refresh Token Invalid'], 500);
        }
    }


    // Profile
    public function profile()
    {
        try {
            return response()->json(auth('api')->user());
        } catch (Exception $exception) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

    //Respone token
    private function respondWithToken($token, $refreshToken)
    {
        $ttl = config('jwt.ttl'); // Lấy TTL từ cấu hình
        return response()->json([
            'access_token' => $token,
            'refresh_token' => $refreshToken,
            'token_type' => 'bearer',
            'expires_in' => $ttl * 60// Chuyển đổi phút thành giây
        ]);
    }

    // Create RefreshToken
    private function createRefreshToken()
    {
        $data = [
            'MaGV' => auth('api')->user()->MaGV, // Sử dụng MaGV từ model HosoGiangvien
            'random' => rand() . time(),
            'exp' => time() + config('jwt.refresh_ttl')
        ];
        $refreshToken = JWTAuth::getJWTProvider()->encode($data);
        return $refreshToken;
    }
}