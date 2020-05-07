

<?php 
include("includes/header.php");
include("includes/navbar.php");
 require_once"dbconfig.php";
 require_once"dbconnect.php";

if(isset($_REQUEST['elect_submit']))
{
    extract($_REQUEST);
    $error=$_FILES["image"]["error"];

$name=$_FILES["image"]["name"];
$type=$_FILES["image"]["type"];
$size=$_FILES["image"]["size"];
$tmp_name=$_FILES["image"]["tmp_name"];

    
    echo $query="INSERT INTO  `items`( `Title`, `category`, `elec_rating`, `image`, `discription`, `price`)
    VALUES ('$title','$category','$rating','$name','$discription','$price')";
    
    move_uploaded_file($tmp_name,"images/$name");
    
    $n=iud($query);
     if($n==1)
     {
         
         echo"<script>alert(' successful');
         window.location='all-products.php';
         </script>";
     }
     
    
    
    else
    {
        echo"Book is not upload";
    }
}


?>
 
 <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Products</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Product Added Form</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Admit Form Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add New Product</h3>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-expanded="false">...</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="index"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    
                                    <a class="dropdown-item" href="add-products"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <form class="new-added-form" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Title *</label>
                                   <input type="text" class="form-control" id="title" name='title' placeholder="Title"> 
                                </div>
                               
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Category *</label>

                                    <?php

echo '<select class = "form-control" name="category">
<option>Select</option>';

$sqli = "SELECT * FROM addcati";
$result = mysqli_query($con, $sqli);
while ($row = mysqli_fetch_array($result)) {
echo '<option>'.$row['categoryes'].'</option>';
}

echo '</select>';

?>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Rating *</label>
                                    <div class="col-xs-6"> 
<input type="text" class="form-control" name="rating" min="1" max="5"  value="5" placeholder="Rating">
</div>
                                </div>
                                
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Price</label>
                                    <input type="text" class="form-control col-xs-4" id="video_link" name="price" placeholder="Price">
                                </div>
                               
                                
                               
                                <div class="col-lg-6 col-12 form-group">
                                    <label>Description</label>
                                    <textarea class="textarea form-control" name="discription" id="form-message" cols="10"
                                        rows="9"></textarea>
                                </div>
                                <div class="col-lg-6 col-12 form-group mg-t-30">
                                    <label class="text-dark-medium">Upload Product Photo (150px X 150px)</label>
                                    <input type="file" class="form-control-file" id="image"  name="image" >
                                </div>
                                <div class="col-12 form-group mg-t-8">
                                    <button  type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" name="elect_submit" id="elec_submit" value="SUBMIT">Save</button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Admit Form Area End Here -->
 <?php 
include("includes/script.php");
include("includes/footer.php");
 ?>