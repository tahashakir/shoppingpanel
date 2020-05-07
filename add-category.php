<?php 
include("includes/header.php");
include("includes/navbar.php");
 require_once"dbconfig.php";
?>
 
 <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Products</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Category Added Form</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Admit Form Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add New Category</h3>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-expanded="false">...</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="index.php"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                   
                                    <a class="dropdown-item" href="add-category"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <form class="new-added-form" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Title *</label>
                                   <input type="text" name="category" id="category" tabindex="1" class="form-control" placeholder="Category  " value=""  required> 
                                </div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" name="Category" id="category-submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
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


if(isset($_REQUEST['Category']))
  {
    extract($_REQUEST);
   $query="INSERT INTO `addcati`( `categoryes`)
              values('$category')";
        $n=iud($query);
   if($n==1)
  {
    echo"<script>alert('Added successfull');
     window.location='all-categoryes.php';
     </script>";
  }
  else
  {
  echo"<script>alert('Something Wrong');
     window.location='all-categoryes.php';
     </script>";
  
  }
  }

  ?>
 