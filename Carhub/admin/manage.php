<?php
include 'connection.php';

$result = mysqli_query($conn, "SELECT * FROM cars ORDER BY id Asc");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Cars</title>
    <link rel="stylesheet" href="site.css">
</head>

<style>  
.nav-link {
    color: white;
    text-decoration: none;
    transition: 0.3s;
    padding-right:20px;
}

.nav-link:hover {
    color: #ff9800;
    background-color:#ff5b3a;
    border-radius: 5px;
    padding:10px;
}
.action-box{
    display:flex;
    justify-content:center;
    align-items:center;
    gap:10px;
}

.action-btn{
    display:inline-block;
    min-width:70px;
    text-align:center;
}
.table-card{
    width:100%;

    margin:0 auto;
    padding:20px;
    border:1px solid #2c3e70;
    background:#141b35;
    border-radius:20px;
    padding:20px;
    overflow-x:auto;
}

table{
    width:100%;
    border-collapse:collapse;
    color:white;
}

th{
    background:#ff5b3a;
    padding:12px;
}

td{
    padding:12px;
    border-bottom:1px solid #2c3e70;
    text-align:center;
}

img{
    border-radius:8px;
}

.action-btn{
    padding:6px 12px;
    text-decoration:none;
    border-radius:6px;
    color:white;
}

.edit{
    background:green;
}

.delete{
    background:red;
}
</style>

<body>

<header class="navbar">
   <div class="container nav-inner">
      <a href="#" class="logo">🚘CAR<span>HUB</span></a>
      <nav class="menu">
         <a href="addnewcars.php" class="nav-link">Add New Car</a>
         <a href="manage.php" class="nav-link">Manage Cars</a>
      </nav>
   </div>
</header>

<section class="cars-section">
<div class="container" >

<div class="section-head">
    <h2>Manage <span class="grad">Cars</span></h2>
</div>

<div class="table-card">

<table>
<tr>
    <th>ID</th>
    <th>Image</th>
    <th>Title</th>
    <th>Model</th>
    <th>Price</th>
    <th>KM</th>
    <th>Fuel</th>
    <th>Year</th>
    <th>Transmission</th>
    <th>Color</th>
    <th>Action</th>
</tr>

<?php 
$serial_no = 1; 
while($row = mysqli_fetch_assoc($result)) { 
    $images = explode(',', $row['images']);
?>

<tr>
    <td><?= $serial_no++; ?></td>

    <td>
    <div style="display: flex; gap: 5px; justify-content: center; flex-wrap: wrap;">
    <?php
if (!empty($row['images'])) {
    $images = explode(',', $row['images']);

    foreach ($images as $img) {
        echo htmlspecialchars(trim($img)) . "<br>";
    }
} else {
    echo "No Image";
}
?>
    </div>
</td>

    <td><?= $row['title']; ?></td>
    <td><?= $row['model']; ?></td>
    <td>₹<?= $row['price']; ?></td>
    <td><?= $row['km']; ?></td>
    <td><?= $row['fuel']; ?></td>
    <td><?= $row['year']; ?></td>
    <td><?= $row['transmission']; ?></td>

    <td>
        <div style="
            width:25px;
            height:25px;
            background:<?= $row['color']; ?>;
            margin:auto;
            border-radius:50%;">
        </div>
    </td>

   <td>
    <div class="action-box">
        <a href="edit.php?id=<?= $row['id']; ?>" class="action-btn edit">Edit</a>
        <a href="delete.php?id=<?php echo $row['id']; ?>"
   class="action-btn delete"
   onclick="return confirm('Are you sure you want to delete this car?')">
   Delete
</a>
    </div>
</td>
</tr>

<?php } ?>

</table>

</div>
</div>
</section>

</body>
</html>