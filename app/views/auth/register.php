<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(#EEF4F8);
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    .container {
        width: 100%;
        max-width: 450px;
    }

    .register-card {
        background: white;
        border-radius: 20px;
        padding: 40px 35px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
        text-align: center;
    }

    .icon-user {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 25px;
        box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
    }

    .icon-user i {
        font-size: 35px;
        color: white;
    }

    .title {
        font-size: 24px;
        font-weight: 600;
        color: #333;
        margin-bottom: 8px;
    }

    .subtitle {
        font-size: 14px;
        color: #888;
        margin-bottom: 30px;
    }

    .alert {
        padding: 12px 15px;
        border-radius: 8px;
        margin-bottom: 20px;
        font-size: 14px;
        text-align: left;
    }

    .alert-error {
        background-color: #fee;
        color: #c33;
        border: 1px solid #fcc;
    }

    .alert-success {
        background-color: #efe;
        color: #3c3;
        border: 1px solid #cfc;
    }

    .register-form {
        text-align: left;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        font-size: 13px;
        font-weight: 500;
        color: #555;
        margin-bottom: 8px;
    }

    .form-group input {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 14px;
        transition: all 0.3s ease;
        outline: none;
    }

    .form-group input:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
    }

    .form-group input::placeholder {
        color: #aaa;
    }

    .btn-register {
        width: 100%;
        padding: 14px;
        background: #4F46E5;
        color: white;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 10px;
    }

    .btn-register:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
    }

    .btn-register:active {
        transform: translateY(0);
    }

    .login-link {
        margin-top: 20px;
        font-size: 14px;
        color: #666;
    }

    .login-link a {
        color: #667eea;
        text-decoration: none;
        font-weight: 600;
    }

    .login-link a:hover {
        text-decoration: underline;
    }

    @media (max-width: 480px) {
        .register-card {
            padding: 30px 25px;
        }

        .title {
            font-size: 22px;
        }

        .icon-user {
            width: 70px;
            height: 70px;
        }

        .icon-user i {
            font-size: 30px;
        }
    }
</style>

<body>
    <div class="container">
        <div class="register-card">
            <div class="icon-user">
                <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="50" cy="50" r="50" fill="#4F46E5" />
                    <path d="M27 71.4672L27 64C27 59.5817 30.5817 56 35 56H52C56.4183 56 60 59.5817 60 64V73" stroke="white" stroke-width="3.5" stroke-linecap="round" />
                    <path d="M43 29.75C48.7319 29.75 53.25 34.1847 53.25 39.5C53.25 44.8153 48.7319 49.25 43 49.25C37.2681 49.25 32.75 44.8153 32.75 39.5C32.75 34.1847 37.2681 29.75 43 29.75Z" stroke="white" stroke-width="3.5" />
                    <line x1="71.5" y1="38.5" x2="71.5" y2="53.5" stroke="white" stroke-width="3" stroke-linecap="round" />
                    <line x1="78.5" y1="45.5" x2="63.5" y2="45.5" stroke="white" stroke-width="3" stroke-linecap="round" />
                </svg>
            </div>
            <h2 class="title">Buat Akun Baru</h2>
            <p class="subtitle">Mulai kelola tugas Anda hari ini</p>

            <?php if (isset($_SESSION['error'])): ?>
                <div class="alert alert-error">
                    <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                    ?>
                </div>
            <?php endif; ?>

            <?php if (isset($_SESSION['success'])): ?>
                <div class="alert alert-success">
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </div>
            <?php endif; ?>

            <form action="" method="POST" class="register-form">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input
                        type="text"
                        id="nama"
                        name="nama"
                        placeholder="Nama Lengkap"
                        required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Email"
                        required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Password"
                        required>
                </div>

                <div class="form-group">
                    <label for="konfirmasi_password">Konfirmasi Password</label>
                    <input
                        type="password"
                        id="konfirmasi_password"
                        name="konfirmasi_password"
                        placeholder="Konfirmasi Password"
                        required>
                </div>

                <button type="submit" class="btn-register">Daftar</button>
            </form>

            <p class="login-link">
                Sudah memiliki akun? <a href="login.php">Masuk</a>
            </p>
        </div>
    </div>
</body>

</html>