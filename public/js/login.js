document.addEventListener("DOMContentLoaded", function () {
    // Xử lý form đăng nhập
    document
        .getElementById("loginForm")
        .addEventListener("submit", function (event) {
            event.preventDefault();

            const formData = new FormData(this);
            const data = {
                magv: formData.get("magv"),
                password: formData.get("password"),
            };

            fetch("/api/auth/login", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(data),
            })
                .then((response) => response.json())
                .then((data) => {
                    if (data.access_token) {
                        localStorage.setItem("access_token", data.access_token);
                        localStorage.setItem(
                            "refresh_token",
                            data.refresh_token
                        );
                        // Gọi API check profile sau khi đăng nhập thành công
                        fetchProfile();
                        swal("Thông báo", "Đăng nhập thành công!", "success");
                        setInterval(() => {
                            // Điều hướng người dùng đến trang chủ
                            window.location.href = "/homepage";
                        }, 2000);
                    } else {
                        swal(
                            "Lỗi",
                            "Tên đăng nhập hoặc mật khẩu không đúng!",
                            "error"
                        );
                    }
                })
                .catch((error) => {
                    console.error("Error:", error);
                    alert("Có lỗi xảy ra, vui lòng thử lại");
                });
        });

    // Lấy thông tin người dùng
    function fetchProfile() {
        const accessToken = localStorage.getItem("access_token");
        if (accessToken) {
            fetch("/api/auth/profile", {
                method: "GET",
                headers: {
                    Authorization: `Bearer ${accessToken}`,
                },
            })
                .then((response) => response.json())
                .then((data) => {
                    console.log(data); // Thông tin người dùng
                })
                .catch((error) => {
                    console.error("Error:", error);
                    // Nếu token hết hạn, gọi hàm refreshToken
                    refreshToken();
                });
        }
    }

    // Làm mới token
    function refreshToken() {
        const refreshToken = localStorage.getItem("refresh_token");

        fetch("/api/auth/refresh", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify({ refresh_token: refreshToken }),
        })
            .then((response) => response.json())
            .then((data) => {
                if (data.access_token) {
                    localStorage.setItem("access_token", data.access_token);
                    localStorage.setItem("refresh_token", data.refresh_token);
                    // Retry original request or handle success
                    fetchProfile(); // Gọi lại API profile
                } else {
                    console.error("Refresh token error:", data.error);
                }
            })
            .catch((error) => {
                console.error("Error:", error);
            });
    }
});
