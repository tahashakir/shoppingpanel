<?php 
include("includes/header.php");
include("includes/navbar.php"); 
require_once "dbconfig.php"; 
require_once 'dbconnect.php';
// require_once"myphp.php";
if(isset($_REQUEST['Update_book']))
{
    extract($_REQUEST);
    $error=$_FILES["uimage"]["error"];
$name=$_FILES["uimage"]["name"];
$type=$_FILES["uimage"]["type"];
$size=$_FILES["uimage"]["size"];
$tmp_name=$_FILES["uimage"]["tmp_name"];

if($name != NULL)
{
    $query=mysqli_query($con,"UPDATE `items` SET `Title`='$utitle',`price`='$uprice',`discription`='$udiscription',`image`='$name' WHERE `elecid`='$elecid'");
    if(move_uploaded_file($tmp_name,"images/$name"))
    {
        if($query==1)
        {
            
            echo"<script>alert('Book Updated successfully');
            window.location='all-student.php';
            </script>";
        }
    }
    else
    {
        echo"<script>alert('Book is not Update ');
        window.location='all-student.php';
        </script>";
    }
}
else
{
    $query=mysqli_query($con,"UPDATE `items` SET `Title`='$utitle',`price`='$uprice',`discription`='$udiscription',`image`='$name' WHERE `elecid`='$elecid'");   
    if($query==1)
    {
        
        echo"<script>alert('Book Updated successfully');
        window.location='all-student.php';
        </script>";
    }
    else
    {
        echo"<script>alert('Book is not Update ');
        window.location='all-student.php';
        </script>";
    }
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
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <form class="new-added-form" method="post" enctype="multipart/form-data">
                            <?php
                          $result=select("select * from items where elecid='".$_REQUEST['id']."'");
                         //var_dump($result);
                        while($r=mysqli_fetch_array($result))
                        {extract($r);
                                           ?>
                                           <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>ID *</label>
                                   <input type="text" value="<?=$elecid?>" class="form-control"  name='elecid' placeholder="product ID"> 
                                </div>
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Title *</label>
                                   <input type="text" class="form-control" id="title" name='utitle' value="<?=$Title?>" placeholder="Title"> 
                                </div>
                               
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Category *</label>
                                    <select class="form-control" name="category">
                                       <option value="">Please Select Category*</option>
                                       <option value="WesternWear">Woman Western Wear</option>
                                       <option value="EthnicWear">Woman Ethnic Wear</option>
                                       <option value="Sportswear">Woman Sportswear</option>
                                       <option value="ManShirtPolos"> Man T-Shirts & Polos</option>
                                       <option value="ManJeans">Man Jeans</option>
                                       <option value="SuitsBlazers">Suits & Blazers</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Rating *</label>
                                    <select type="text" class="form-control" name="rating" min="1" max="5"  value="5">
                                        <option value="">Please Select Rating *</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="3">4</option>
                                        <option value="3">5</option>
                                      
                                    </select>
                                </div>
                                
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Price</label>
                                    <input type="text" class="form-control col-xs-4" id="video_link" value="<?=$price?> "  name="uprice"  placeholder="Price">
                                </div>
                               
                                
                               
                                <div class="col-lg-6 col-12 form-group">
                                    <label>Description</label>
                                    <textarea class="textarea form-control" name="udiscription" id="form-message" cols="10"
                                        rows="9"><?=$discription?></textarea>
                                </div>
                                <div class="col-lg-6 col-12 form-group mg-t-30">
                                    <label class="text-dark-medium">Upload Product Photo (150px X 150px)</label>
                                    <input type="file" class="form-control-file" id="image"  name="uimage">
                                </div>
                                <div class="col-12 form-group mg-t-8">
                                    <button  type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" value="Update_book" id="elec_submit" name="Update_book" >Save</button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <?php

}
?>
                </div>
                <!-- Admit Form Area End Here -->
 <?php 
include("includes/script.php");
include("includes/footer.php");
 ?>