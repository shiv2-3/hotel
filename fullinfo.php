<?php
include("connection.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Add a gray background color with some padding */
body {
  font-family: Arial;
  padding: 20px;
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: white;
}

/* Create two unequal columns that floats next to each other */
/* Left column */

table, th, td {
  border:1px solid black;
}
/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
   background-color: white;
   padding: 20px;
   margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}
</style>
</head>
<body>
    <?php
    $id=$_GET['id'];
 
    $sql1="select p.step from process p where p.recipe_id=".$id;
    $result1 = mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_assoc($result1);
        ?>
<div class="header">
  <h2><?php echo $_GET['name']; ?></h2>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <h2>Creator Name==<?php echo $_SESSION['name'];?></h2>
      <h5><?php echo date('d-m-Y');?></h5>
      
<table style="width:100%">
  <tr>
    <td>ingrediant</td>
    <td>amount</td>
  </tr>
  
  <?php 
  $sql="select i.items,i.amount,i.unit from ingredients i where i.recipe_id=".$id;
  $result = mysqli_query($conn, $sql);
  
   foreach($result as $row){ ?>
    <tr>
       <td><?php echo $row['items']?></td>
       <td><?php echo $row['amount']?></td>
       <?php } ?>
       </tr>
  
</table>
      <div class="fakeimg"> <img src=<?php echo $_GET['img'];?> class="img-fluid" style="width:100%;"/></div>
      <p><?php echo $row1['step']; ?></p>
     <!--<table>-->
     <!--    <th>Item</th>-->
     <!--    <th>amount</th>-->
     <!--   <?php  while($row){ ?>-->
     <!--   <td><?php echo $row['items']?></td>-->
     <!--   <td><?php echo $row['amount']?></td>-->
     <!--   <?php } ?>-->
         
     
    </div>
 
<div class="footer">
  <h2>Footer</h2>
</div>

</body>
</html>
