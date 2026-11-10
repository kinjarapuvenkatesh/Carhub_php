<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="site.css">
</head>
<style>
    .login-section{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:
    radial-gradient(circle at top right,
    rgba(255,91,58,.15), transparent 40%),
    #0b1020;
}

.login-card{
    width:420px;
    background:#141b35;
    border:1px solid #232d52;
    border-radius:24px;
    padding:40px;
    box-shadow:0 20px 50px rgba(0,0,0,.4);
}

.login-card .logo{
    text-align:center;
    font-size:28px;
    font-weight:800;
    margin-bottom:20px;
    color:white;
}

.login-card .logo span{
    background:linear-gradient(90deg,#ff5b3a,#ffb347);
    -webkit-background-clip:text;
    color:transparent;
}

.login-card h2{
    color:white;
    text-align:center;
    margin-bottom:10px;
}

.login-text{
    text-align:center;
    color:#9aa3c7;
    margin-bottom:30px;
}

.input-group{
    margin-bottom:20px;
}

.input-group label{
    display:block;
    color:#9aa3c7;
    margin-bottom:8px;
    font-size:14px;
}

.input-group input{
    width:100%;
    padding:14px;
    border:1px solid #232d52;
    background:#0f1830;
    color:white;
    border-radius:12px;
    outline:none;
}

.input-group input:focus{
    border-color:#ff5b3a;
}

.login-btn{
    width:100%;
    padding:14px;
    border:none;
    border-radius:30px;
    background:linear-gradient(90deg,#ff5b3a,#ffb347);
    color:white;
    font-size:16px;
    font-weight:600;
    cursor:pointer;
    transition:.3s;
}

.login-btn:hover{
    transform:translateY(-2px);
}
.error-msg{
    background:#ff4d4d;
    color:white;
    padding:12px;
    border-radius:10px;
    text-align:center;
    margin-bottom:15px;
    font-size:14px;
}
</style>    
<body>
<div class="login-section">

    <div class="login-card">
        <?php
            // Check if there is an error message in the URL
            if (isset($_GET['error'])) {
                echo '<div class="error-msg">Invalid username or password</div>';
            }
        ?>
        <div class="logo">
            <span>Admin</span> Login
        </div>

        <form action="authenticate.php" method="POST">

            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" required>
            </div>

            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>

            <button type="submit" name="register" class="login-btn">
                Login
            </button>

        </form>

    </div>

</div>

</body>
</html>