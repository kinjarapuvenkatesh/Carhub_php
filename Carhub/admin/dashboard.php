<?php
include "connection.php";

$sql = "SELECT * FROM cars";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>CARHUB — Premium Secondhand Cars</title>
<link rel="stylesheet" href="site.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<style>
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
    margin:CAR;
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
    color:white;
    gap:30px;
    background:
  radial-gradient(800px 400px at 90% 10%,rgba(255,91,58,.18),transparent 60%),
  radial-gradient(600px 400px at 10% 80%,rgba(94,234,212,.12),transparent 60%),
  var(--bg);
    padding:20px;
    margin:30px;
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
    padding:12px 0px;
    border-bottom:1px solid #eee;
}
.btn {
  display: inline-block;
  padding: 10px 20px;
  background:#0693D4;
  color: white;
  text-decoration: none;
  border-radius: 4px;
}
.btn-delete{
  display: inline-block;
  padding: 10px 20px;
  background:red;
  color: white;
  margin-top:25px;
  text-decoration: none;
  border-radius: 4px;
     padding:12px 18px;
    border:none;
    border-radius:5px;
    color:#fff;
    cursor:pointer;
    margin-right:10px;
}
.btn-1{
  display: inline-block;
  padding: 10px 20px;
  background:green;
  color: white;
  margin-top:25px;
  text-decoration: none;
  border-radius: 4px;
     padding:12px 18px;
    border:none;
    border-radius:5px;
    color:#fff;
    cursor:pointer;
    margin-right:10px;
}

.btn{
    margin-top:25px;
}

.btn{
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
<body>
  <header class="navbar">
  <div class="container nav-inner">
    <a href="/" class="logo">🚘CAR<span>HUB</span></a>
    <nav class="menu">
      <a href="dashboard.php">Home</a>
      <a href="addnewcars.php">New Car</a>
      <a href="about.php">About</a>
      <a href="contact.php">Contact</a>
      <a href="login.php" class="btn-outline">Admin</a>
    </nav>
  </div>
</header>
<section class="hero">
  <div class="container hero-inner">
    <div class="hero-text">
      <span class="pill">Certified Pre-Owned</span>
      <h1>Find Your Perfect <span class="grad">Dream Car</span> Today</h1>
      <p>Hand-picked secondhand cars with verified history, transparent pricing and a 7-day money back guarantee.</p>
      <div class="hero-cta">
        <a href="#cars" class="bt-primary" onclick="showCars()">Browse Cars</a>
        <a href="#about" class="bt-ghost">Learn More →</a>
      </div>
      <div class="stats">
        <div><h3>2,500+</h3><p>Cars Sold</p></div>
        <div><h3>4.9★</h3><p>Customer Rating</p></div>
        <div><h3>15 yrs</h3><p>In Business</p></div>
      </div>
    </div>
    <div class="hero-img">
      <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=900&CAR=format&fit=crop" alt="Featured car"/>
    </div>
  </div>
</section>
<section id="cars" class="cars-section">
  <div class="container">
    <div class="section-head">
      <h2>Available <span class="grad">Cars</span></h2>
      <p>Scroll through our curated inventory. Explore your Favorite car</p>
    </div>
    <?php
while($row = mysqli_fetch_assoc($result))
{
    $images = explode(",", $row['images']);
?>
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

        <h1 style="color:#0693D4;text-align:center;text-transform: uppercase;"><?php echo $row['title']; ?></h1>

        <div class="detail-row">
            <b>Car Model :</b>
           <span"><?php echo $row['model']; ?></span>
        </div>
        
        <div class="detail-row">
            <b>price :</b>
            <span><?php echo $row['price']; ?></span>
        </div>
        <div class="detail-row">
            <b>Kilometer Covered :</b>
            <span><?php echo $row['km']; ?> km</span>
        </div>

        <div class="detail-row">
            <b>Fuel Type :</b>
            <span><?php echo $row['fuel']; ?></span>
        </div>

        <div class="detail-row">
            <b>Registration Year :</b>
            <span><?php echo $row['year']; ?></span>
        </div>

        <div class="detail-row">
            <b>Transmission :</b>
            <span><?php echo $row['transmission']; ?></span>
        </div>

        <div class="detail-row">
            <b>Color :</b>
            <span><?php echo $row['color']; ?></span>
        </div>

        <div class="buttons">
            <a href="contact.php" class="btn">Contact Seller</a>
            <a href="contact.php" class="btn-1">Buy Now</a>   
        </div>

    </div>

</div>
<?php
}
?>
    <div id="carsGrid" class="cars-grid"></div>
    <div id="emptyState" class="empty hidden">
      <h3>No cars listed yet</h3>
      <p>Visit the <a href="/admin.html">Admin panel</a> to add your first car.</p>
    </div>
  </div>
</section>
 <h1 style="text-align:center;padding:20px;"> Why Everyone <span style="color:#FF693B";>Choose Us? <span></h1>
<section id="about" class="features">
  <div class="container feat-grid">
    <div class="feat"><div class="ic">🛡️</div><h4>Verified History</h4><p>Every car undergoes a 200-point inspection.</p></div>
    <div class="feat"><div class="ic">💰</div><h4>Best Price</h4><p>Transparent pricing with no hidden charges.</p></div>
    <div class="feat"><div class="ic">🔧</div><h4>Free Service</h4><p>1 year of free maintenance included.</p></div>
    <div class="feat"><div class="ic">🚚</div><h4>Home Delivery</h4><p>Doorstep delivery across the country.</p></div>
  </div>
</section>
<h1 style="text-align:center;padding:20px;"> Why Everyone <span style="color:#FF693B";>Choose Us? <span></h1>
<section id="about" class="features">
  <div class="container feat-grid">
    <div class="feat"><div class="ic">🛡️</div><h4>Verified History</h4><p>Every car undergoes a 200-point inspection.</p></div>
    <div class="feat"><div class="ic">💰</div><h4>Best Price</h4><p>Transparent pricing with no hidden charges.</p></div>
    <div class="feat"><div class="ic">🔧</div><h4>Free Service</h4><p>1 year of free maintenance included.</p></div>
    <div class="feat"><div class="ic">🚚</div><h4>Home Delivery</h4><p>Doorstep delivery across the country.</p></div>
  </div>
</section>
<footer id="contact" class="footer">
  <div class="container foot-inner">
    <div>
      <div class="logo">🚘 CAR<span>HUB</span></div>
      <p>Your trusted partner for premium pre-owned vehicles.</p>
    </div>
    <div><h5>Contact</h5><p>📞 +1 555-CAR<br/>✉️ hello@CARHUB.com</p></div>
    <div><h5>Visit</h5><p>123 Motor Street<br/>Open Mon–Sat, 9am–7pm</p></div>
  </div>
  <div class="copy">© 2026 CARHUB. All rights reserved.</div>
</footer>
<!-- Car detail modal -->
<div id="carModal" class="modal hidden">
  <div class="modal-card">
    <button class="close" onclick="closeModal()">✕</button>
    <div id="modalContent"></div>
  </div>
</div>
<script src="/site.js"></script>
</body>
</html>
