<?php
include "connection.php";

$sql = "SELECT * FROM cars";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Available Cars</title>
    <style>
   /* Navbar */
   body{
    margin:0;
    font-family:'Poppins',sans-serif;
    background:#0b1020;
}

*{
    box-sizing:border-box;
}
.navbar{
    position:sticky;
    top:0;
    z-index:50;
    backdrop-filter:blur(14px);
    background:rgba(11,16,32,.75);
    border-bottom:1px solid #232d52;
}

.nav-inner{
    display:flex;
    justify-content:space-between;
    align-items:center;
    height:72px;
    max-width:1200px;
    margin:auto;
    padding:0 24px;
}

.logo{
    font-weight:800;
    font-size:22px;
    letter-spacing:.3px;
    color:white;
    text-decoration:none;
}

.logo span{
    background:linear-gradient(90deg,#ff5b3a,#ffb347);
    -webkit-background-clip:text;
    color:transparent;
}

.menu{
    display:flex;
    gap:22px;
    align-items:center;
}

.menu a{
    font-size:14px;
    color:#9aa3c7;
    text-decoration:none;
    transition:.2s;
    font-weight:500;
}

.menu a:hover{
    color:white;
}

.btn-outline{
    padding:8px 16px;
    border:1.5px solid #ff5b3a;
    border-radius:999px;
    color:#ff5b3a !important;
    font-weight:600;
}

.btn-outline:hover{
    background:#ff5b3a;
    color:#fff !important;
}     
.car-card{
    display:flex;
    color:#FF693B;
    gap:30px;
    background:
  radial-gradient(800px 400px at 90% 10%,rgba(255,91,58,.18),transparent 60%),
  radial-gradient(600px 400px at 10% 80%,rgba(94,234,212,.12),transparent 60%),
  var(--bg);
    padding:20px;
    margin:20px;
    border:2px solid #FF693B;
    border-radius:10px;
    box-shadow:0 0 10px rgba(0,0,0,0.1);
}

.left-section{
    width:50%;
}

.right-section{
    width:50%;
}

.main-image img{
    width:100%;
    height:350px;
    object-fit:cover;
    border-radius:8px;
}

.thumbs{
    display:flex;
    gap:10px;
    margin-top:15px;
}

.thumbs img{
    width:90px;
    height:70px;
    object-fit:cover;
    border:2px solid #ddd;
    border-radius:5px;
    cursor:pointer;
}

.thumbs img:hover{
    border-color:#007bff;
}

.price{
    color:red;
    margin-bottom:20px;
}

.detail-row{
    display:flex;
    justify-content:space-between;
    padding:12px 0;
    border-bottom:1px solid #eee;
}

.buttons{
    margin-top:25px;
}

.buttons button{
    padding:12px 18px;
    border:none;
    border-radius:5px;
    color:#fff;
    cursor:pointer;
    margin-right:10px;
}

.green-btn{
    background:#28a745;
}

.blue-btn{
    background:#007bff;
}

.gray-btn{
    background:#6c757d;
}
    </style>
</head>
<body>
    <header class="navbar">
    <div class="container nav-inner">

        <a href="#" class="logo">
            🚗 Auto<span>Bazaar</span>
        </a>

        <nav class="menu">
            <a href="dashboard.php">Home</a>
            <a href="addnewcars.php">Add New Car</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <a href="login.php" class="btn-outline">Admin</a>
        </nav>

    </div>
</header>
<div class="car-card">

    <div class="left-section">

        <!-- Main Image -->
        <div class="main-image">
            <img id="main_<?php echo $row['id']; ?>"
                 src="uploads/<?php echo trim($images[0]); ?>">
        </div>

        <!-- 4 Thumbnails -->
        <div class="thumbs">

            <?php
            for($i=0; $i<4; $i++)
            {
                if(isset($images[$i]) && !empty(trim($images[$i])))
                {
            ?>
                <img
                    src="uploads/<?php echo trim($images[$i]); ?>"
                    onclick="changeImage(
                        'main_<?php echo $row['id']; ?>',
                        this.src
                    )">
            <?php
                }
            }
            ?>

        </div>

    </div>

    <div class="right-section">

        <h2><?php echo $row['title']; ?></h2>

        <h3 class="price">
            ₹ <?php echo number_format($row['price']); ?>
        </h3>

        <div class="detail-row">
            <b>Car Model:</b>
            <span><?php echo $row['model']; ?></span>
        </div>

        <div class="detail-row">
            <b>Kilometer Covered:</b>
            <span><?php echo $row['km']; ?> km</span>
        </div>

        <div class="detail-row">
            <b>Fuel Type:</b>
            <span><?php echo $row['fuel']; ?></span>
        </div>

        <div class="detail-row">
            <b>Registration Year:</b>
            <span><?php echo $row['year']; ?></span>
        </div>

        <div class="detail-row">
            <b>Transmission:</b>
            <span><?php echo $row['transmission']; ?></span>
        </div>

        <div class="detail-row">
            <b>Color:</b>
            <span><?php echo $row['color']; ?></span>
        </div>

        <div class="buttons">
            <button class="green-btn">Contact Seller</button>
            <button class="blue-btn">Book Test Drive</button>
            <button class="gray-btn">Enquiry</button>
        </div>

    </div>

</div>
<?php
}
?>
</body>
</html>