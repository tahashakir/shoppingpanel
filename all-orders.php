<?php 
session_start();
include("includes/header.php");
include("includes/navbar.php");
require_once "dbconfig.php";
require_once "dbconnect.php";
$limit = isset($_POST["limit-records"]) ? $_POST["limit-records"] : 5;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit;
$result = $con->query("SELECT * FROM orders where status != 'confirmed' LIMIT $start, $limit");
$customers = $result->fetch_all(MYSQLI_ASSOC);

$result1 = $con->query("SELECT count(elecid) AS id FROM orders where status != 'confirmed' ");
$cnt = $result1->fetch_all(MYSQLI_ASSOC);
$total = $cnt[0]['id'];
$pages = ceil( $total / $limit );

$Previous = $page - 1;
$Next = $page + 1;
     
 ?>
 <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Orders</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>All Orders</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Student Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>All Orders Data</h3>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-expanded="false">...</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="index.php"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                   
                                    <a class="dropdown-item" href="all-orders.php"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <form class="mg-b-20">
                            <div class="row gutters-8">
                            <div class="col-12-xxxl col-xl-12 col-lg-12 col-12 form-group">
                                    <div class="search-box">
                                    <input type="text" placeholder="Search by Orders ID, First_Name ..." class="form-control">
                                     <div class="result"></div>
                                     </div>
                                </div>
                                
                            </div>
                        </form>


                        <?php
if(isset($_SESSION['message']))
{
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}
?>
                        
                        <div class="text-center"  class="col-md-12">
                        
<nav aria-label="Page navigation example" class="float-left">
  <ul class="pagination">
  
    <li class="page-item"><a class="page-link" href="all-orders.php?page=<?= $Previous; ?>" >Previous</a></li>
    <?php for($i = 1; $i<= $pages; $i++) : ?>
    <li class="page-item"><a href="all-orders.php?page=<?= $i; ?>" class="page-link"><?= $i; ?></a></li>
    <?php endfor; ?>
    <li class="page-item"><a href="all-orders.php?page=<?= $Next; ?>" class="page-link">Next</a></li>
  </ul>
</nav>

                      <form method="post" action="#" role="form">
                         <div class="form-group">
                          <select name="limit-records" id="limit-records" class="mh-100 col-md-2 float-right form-control">
                            <option disabled="disabled" selected="selected">---Limit Records---</option>
                            <?php foreach([5,10,20,50,100] as $limit): ?>
                              <option <?php if( isset($_POST["limit-records"]) && $_POST["limit-records"] == $limit) echo "selected" ?> value="<?= $limit; ?>"><?= $limit; ?></option>
                            <?php endforeach; ?>
                          </select>
                          </div>
                        </form>
                      </div>



                        <div class="table-responsive">
                            <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                         <th>S.No</th>
                                         <th>User ID</th>
                                        <th>Name</th>
                                        <th>Mobile Number</th>
                                        <th>Province</th>
                                        <th>City</th>
                                        <th>Address</th>
                                        <th>Confirm Address</th>
                                         <th>Amount</th>
                                         <th>Operations</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>

<?php $n=1;  foreach($customers as $customer) :  ?>
<tr>
<td><?=$n?></td>
    <td><?= $customer['id']; ?></td>
    <td><?= $customer['f_name']; ?></td>
    <td><?= $customer['phone_number']; ?></td>
    <td><?= $customer['province']; ?></td>
    <td><?= $customer['city']; ?></td>
    <td><?= $customer['address']; ?></td>
    <td><?= $customer['c_address']; ?></td>
    <td><?= $customer['amount']; ?></td>
    <td>
<a href="myphp.php?delete_order=yes&id=<?=$customer['id']?>">
 <span class="fas fa-times text-orange-red"></span>
</a>&nbsp;&nbsp;
<a href="myphp.php?confirm_order=yes&id=<?=$customer['id']?>">
 <span class=" fa fa-check"></span>
</a>
</td>
		        		</tr>
              <?php $n++;
             endforeach; ?>    
    
    </tbody>
                                
                                </table>


                        </div>
                    </div>
                </div>
                <!-- Student Table Area End Here -->
 <?php 
include("includes/script.php");
include("includes/footer.php");
 ?>

 
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("search-orders.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
    
   $("#limit-records").change(function(){
			$('form').submit();
		})
 
});
</script>