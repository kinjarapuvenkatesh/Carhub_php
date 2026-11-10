<?php
include 'connection.php';

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM cars WHERE id='$id'");
$car = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Car</title>
    <link rel="stylesheet" href="site.css">
</head>
<style>
    .card .field input,
    .card .field select {
    border-radius: 5px;
    background-color:#0f1830;
    color:white;
    padding-left: 10px;
    border: 0px solid #ccc;
    height: 40px;
    font-size: 16px;
    box-sizing: border-box;
}
    .card{
        width: 100%;
        max-width: 750px;
        height:700px;
        margin: 0 auto;
        padding: 20px;
        border-radius: 5px;
    }

    .card .field{
        margin-bottom: 20px;
        width:100%;
    }

    .card .field label{
    }
</style>    
<body>

<header class="navbar">
   <div class="container nav-inner">
      <a href="#" class="logo">🚘CAR<span>HUB</span></a>
   </div>
</header>

<section class="cars-section">
<div class="container">

<div class="section-head">
    <h2>Edit Car<span class="grad">Details</span></h2>
</div>

<div class="card">

<form action="update.php" method="POST" enctype="multipart/form-data">

<input type="hidden" name="id" value="<?= $car['id']; ?>">

<div class="field">
    <label>Title</label>
    <input type="text" name="title"
           value="<?= $car['title']; ?>" required>
</div>

<div class="field">
    <label>Model</label>
    <input type="text" name="model"
           value="<?= $car['model']; ?>" required>
</div>

<div class="row">
    <div class="field">
        <label>Price</label>
        <input type="number" name="price"
               value="<?= $car['price']; ?>" required>
    </div>

    <div class="field">
        <label>KM</label>
        <input type="number" name="km"
               value="<?= $car['km']; ?>" required>
    </div>
</div>

<div class="row">
    <div class="field">
        <label>Fuel</label>
        <select name="fuel">
            <option <?= $car['fuel']=="Petrol"?"selected":"" ?>>Petrol</option>
            <option <?= $car['fuel']=="Diesel"?"selected":"" ?>>Diesel</option>
            <option <?= $car['fuel']=="EV"?"selected":"" ?>>EV</option>
        </select>
    </div>

    <div class="field">
        <label>Year</label>
        <input type="number" name="year" value="<?= $car['year']; ?>">
    </div>
</div>

<div class="row">
    <div class="field">
        <label>Transmission</label>
        <select name="transmission">
            <option <?= $car['transmission']=="Manual"?"selected":"" ?>>Manual</option>
            <option <?= $car['transmission']=="Automatic"?"selected":"" ?>>Automatic</option>
        </select>
    </div>

    <div class="field">
        <label>Color</label>
        <input type="color" name="color" value="<?= $car['color']; ?>">
    </div>
</div>
<div class="field">
    <label>Update Images</label>
    <input type="file" name="images[]" multiple accept="image/*">
</div>

<button class="btn" style="height:45px;" type="submit">
    Update Car
</button>

</form>

</div>
</div>
</section>

</body>
</html>