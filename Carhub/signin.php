   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarHub Sign In</title>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<style>
    *{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:
    linear-gradient(rgba(5,10,25,.85),
    rgba(5,10,25,.85)),
    url('https://images.unsplash.com/photo-1503376780353-7e6692767b70')
    center/cover;
}

.signin-container{
    width:100%;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:20px;
}

.signin-card{
    width:420px;
    background:rgba(255,255,255,0.08);
    backdrop-filter:blur(15px);
    border:1px solid rgba(255,255,255,0.15);
    border-radius:20px;
    padding:40px;
    color:white;
    box-shadow:0 15px 40px rgba(0,0,0,.4);
}

.logo{
    display:flex;
    align-items:center;
    justify-content:center;
    gap:10px;
    margin-bottom:20px;
}

.logo i{
    color:#ff3c3c;
    font-size:30px;
}

.logo h1{
    color:#fff;
    font-size:28px;
    letter-spacing:2px;
}

.signin-card h2{
    text-align:center;
    margin-bottom:10px;
}

.signin-card p{
    text-align:center;
    color:#c9d1e3;
    margin-bottom:25px;
}

.input-box{
    position:relative;
    margin-bottom:18px;
}

.input-box i{
    position:absolute;
    left:15px;
    top:50%;
    transform:translateY(-50%);
    color:#ff3c3c;
}

.input-box input{
    width:100%;
    padding:14px 14px 14px 45px;
    border:none;
    outline:none;
    border-radius:10px;
    background:rgba(255,255,255,0.08);
    color:white;
}

.input-box input::placeholder{
    color:#b8bfd6;
}

.options{
    display:flex;
    justify-content:space-between;
    margin-bottom:20px;
    font-size:14px;
}

.options a{
    color:#ff3c3c;
    text-decoration:none;
}

.signin-btn{
    width:100%;
    padding:14px;
    border:none;
    border-radius:10px;
    background:#ff3c3c;
    color:white;
    font-size:16px;
    cursor:pointer;
    transition:.3s;
}

.signin-btn:hover{
    background:#ff2020;
}

.divider{
    text-align:center;
    margin:20px 0;
    position:relative;
}

.divider::before{
    content:"";
    position:absolute;
    width:100%;
    height:1px;
    background:#444;
    left:0;
    top:50%;
}

.divider span{
    background:#10182f;
    padding:0 15px;
    position:relative;
}

.google-btn{
    width:100%;
    padding:14px;
    border:none;
    border-radius:10px;
    background:white;
    color:#333;
    font-weight:600;
    cursor:pointer;
}

.google-btn i{
    margin-right:10px;
}

.signup-link{
    margin-top:20px;
}

.signup-link a{
    color:#ff3c3c;
    text-decoration:none;
    font-weight:600;
}
.error{
    color:black;
    text-align:center;
    margin-bottom:15px;
}
   </style> 
<body>

    <div class="signin-container">
        <div class="signin-card">
 
            <div class="logo">
                <i class="fas fa-car"></i>
                <h1>CARHUB</h1>
            </div>
             <h2>Welcome Back</h2>
             
            <p>Sign in to explore premium cars and services.</p>

               <?php
    if(isset($_GET['error'])){
        echo "<p class='error'>Invalid email or Password</p>";
    }
    ?>
      
            <form action="authenticate.php" method="post">
                <div class="input-box">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="Email Address" required>
                </div>

                <div class="input-box">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" required>
                </div>

                <div class="options">
                    <label>
                        <input type="checkbox">
                        Remember Me
                    </label>

                    <a href="index.php">Forgot Password?</a>
                </div>

                <button type="submit" name="register" class="signin-btn">
                    Log In
                </button>
                <p class="signup-link">
                    Don't have an account?
                    <a href="index.php">Sign Up</a>
                </p>

            </form>
        </div>
    </div>

</body>
</html>