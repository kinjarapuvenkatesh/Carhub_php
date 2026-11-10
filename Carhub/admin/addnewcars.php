<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="site.css">
    <title>Document</title>
</head>
<style>
    .nav-link {
    color: white;
    padding-right: 20px;
    text-decoration: none;
    transition: 0.3s;
}

.nav-link:hover {
    color: #ff9800;
    background-color:#ff5b3a;
    padding: 10px;
    border-radius: 5px;
}
    .card{
      width:800px;
      margin-left:180px;
}  
    input[type="color"] {
    width: 100%;
    height: 50px;
    border: 1px solid #2c3e70;
    border-radius: 8px;
    cursor: pointer;
}

#hexCode {
    margin-top: 8px;
    width: 100%;
    padding: 10px;
    background: #08163d;
    color: white;
    border: 1px solid #2c3e70;
}
    input {
    text-transform: uppercase;
}
</style>
<body>
    <header class="navbar">
   <div class="container nav-inner">
   <a href="/" class="logo"> 🚘CAR<span>HUB</span></a>
    <nav class="menu">
      <a href="addnewcars.php" class="nav-link">Add New Car</a>
      <a href="manage.php" class="nav-link">Manage Cars</a>
    </nav>
  </div>
</header>
    <section class="cars-section">
    <div class="container">

        <div class="section-head">
            <h2>Add <span class="grad">Car Details</span></h2>
            <p>Enter the car information below.</p>
        </div>

        <div class="card">

            <form class="form"  action="upload.php" method="post" enctype="multipart/form-data">

                <div class="field">
                    <label>Title</label>
                    <input type="text" name="title" placeholder="Enter car title" required>
                </div>

                <div class="field">
                    <label>Car Model</label>
                    <input type="text" name="model" placeholder="Honda City" required>
                </div>

                <div class="row">

                    <div class="field">
                        <label>Price</label>
                        <input type="number" name="price" min="1,00,000" max="20,00,000" step="1" placeholder="2,00,000 ₹"required>
                    </div>

                    <div class="field">
                        <label>Kilometers Covered</label>
                        <input type="number" name="km" min="1000" max="100000" step="1" placeholder="45000" required>
                    </div>

                </div>

                <div class="row">

                    <div class="field">
                        <label>Fuel Type</label>
                        <select name="fuel">
                            <option value="">Select</option>
                            <option value="Petrol">Petrol</option>
                            <option value="Diesel">Diesel</option>
                            <option value="EV">EV</option>
                        </select>
                    </div>

                    <div class="field">
                        <label>Registration Year</label>
                        <input type="number" name="year"  min="1900" max="2026" step="1" placeholder="2022" required>
                    </div>

                </div>

                <div class="row">

                    <div class="field">
                        <label>Transmission</label>
                        <select name="trans">
                            <option value="">Select</option>
                            <option value="Manual">Manual</option>
                            <option value="Automatic">Automatic</option>
                        </select>
                    </div>

                    <div class="field">
                        <label>Color</label>
                        <input type="color" name="color" placeholder="White" value="#ffffff">
                    </div>

                </div>

                <div class="field">
                    <label>Photos</label>
                    <input type="file" name="images[]" multiple accept="image/*">
                </div>

                <button class="btn" type="submit">
                    Submit
                </button>

            </form>

        </div>

    </div>
</section>
</body>
</html>