<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="site.css">
</head>
<style>
      .nav-link {
    color: white;
    text-decoration: none;
    padding-right:20px;
    transition: 0.3s;
}

.nav-link:hover {
    color: #ff9800;
    background-color:#ff5b3a;
    border-radius: 5px;
    padding:5px 20px;
}  
  .contact-section{
    padding:20px 0;
    display:flex;
    justify-content:center;
    align-items:center;
    background:#0b1020;
}

.container{
    width:90%;
    max-width:1200px;
    margin:auto;
    padding:0 20px;
}

.contact-section h2{
    color:white;
    font-size:40px;
    text-align:center;
    margin-bottom:30px;
    background:#0b1020;
}

.contact-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:40px;
    margin-top:50px;
}

.contact-info,
.contact-form{
    background:#141b35;
    padding:35px;
    border-radius:20px;
    border:1px solid #232d52;
}

.contact-info h3{
    color:white;
    margin-bottom:30px;
    font-size:30px;
}

.contact-box{
    display:flex;
    gap:20px;
    margin-bottom:25px;
    align-items:flex-start;
}

.contact-box .icon{
    width:55px;
    height:55px;
    background:#ff693b;
    border-radius:50%;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:22px;
}
.contact-box h4{
    color:white;
    margin-bottom:5px;
}

.contact-box p{
    color:#b8c1d9;
    line-height:1.7;
}

.contact-form form{
    display:flex;
    flex-direction:column;
    gap:18px;
}

.contact-form input,
.contact-form textarea{
    width:100%;
    padding:15px;
    background:#0f1830;
    border:1px solid #232d52;
    border-radius:12px;
    color:white;
    outline:none;
    font-size:15px;
}

.contact-form input:focus,
.contact-form textarea:focus{
    border-color:#ff693b;
}

.contact-btn{
    background:#ff693b;
    color:white;
    border:none;
    padding:15px;
    border-radius:30px;
    font-size:16px;
    font-weight:600;
    cursor:pointer;
    transition:.3s;
}

.contact-btn:hover{
    transform:translateY(-2px);
}

@media(max-width:768px){

    .contact-grid{
        grid-template-columns:1fr;
    }

}
</style>  
<body>
      <header class="navbar">
   <div class="container nav-inner">
    <a href="#" class="logo"> 🚘CAR<span>HUB</span></a>
    <nav class="menu">
      <a href="index.php" class="nav-link">Home</a>
      <a href="about.php" class="nav-link">About</a>
      <a href="contact.php" class="nav-link">Contact</a>
    </nav>
  </div>
</header>
<section class="contact-section" id="contact">

    <div class="container">

        <div class="section-header">
            <h2 style="color:#ff9800">Contact <span>Us</span></h2>

        <div class="contact-grid">

            <!-- Contact Information -->

            <div class="contact-info">

                <h3>Get In Touch</h3>

                <div class="contact-box">
                    <div class="icon">📍</div>
                    <div>
                        <h4>Address</h4>
                        <p>
                            Suryacity<br>
                            Chandapura,Bangolore.
                            
                        </p>
                    </div>
                </div>

                <div class="contact-box">
                    <div class="icon">📞</div>
                    <div>
                        <h4>Phone</h4>
                        <p>7989213890</p>
                    </div>
                </div>

                <div class="contact-box">
                    <div class="icon">✉️</div>
                    <div>
                        <h4>Email</h4>
                        <p>support@carhub.com</p>
                    </div>
                </div>

                <div class="contact-box">
                    <div class="icon">🕒</div>
                    <div>
                        <h4>Working Hours</h4>
                        <p>Mon - Sat : 9:00 AM - 7:00 PM</p>
                    </div>
                </div>

            </div>

            <!-- Contact Form -->

            <div class="contact-form">

                <form>

                    <div class="field">
                        <input type="text" placeholder="Your Name" required>
                    </div>

                    <div class="field">
                        <input type="email" placeholder="Your Email" required>
                    </div>

                    <div class="field">
                        <input type="text" placeholder="Subject">
                    </div>

                    <div class="field">
                        <textarea rows="5" placeholder="Your Message"></textarea>
                    </div>

                    <button type="submit" class="contact-btn">
                        Send Message
                    </button>

                </form>

            </div>

        </div>

    </div>

</section>
<footer id="contact" class="footer" style="margin-top:100px;">
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
</body>
</html>