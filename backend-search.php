
<?php 

require_once "dbconfig.php";
 ?>


<!DOCTYPE html>
<html>
<body>

<div class="table-responsive">
                            <table class="table display data-table text-nowrap">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input checkAll">
                                                <label class="form-check-label">ID</label>
                                            </div>
                                        </th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Image</th>
                                        <th>Price</th>
                                       <!--  <th>discription</th> -->
                                        <th>Ratting</th>
                                        
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 


require_once "connection.php";

    if(isset($_REQUEST["termval"])){
    // Prepare a select statement
    $a = $_REQUEST["termval"];
    $sql = "SELECT * FROM items WHERE Title LIKE ?";
    
    if($stmt = mysqli_prepare($con, $sql)){
    
    // Set parameters
    $param_term = $_REQUEST["termval"] . '%';

        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);

            // Check number of rows in the result set
            if(mysqli_num_rows($result) > 0){

                // Fetch result rows as an associative array
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            ?>


            <?php 
            //  $result2=select("select * from items");
            //     $n=1;
            //     while($r=mysqli_fetch_array($result2))
            //    {  extract($r); 
            //    ?>

                                    <tr>

                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label"><?php echo $row["elecid"]." "?></label>
                                            </div>
                                        </td>
                                       
                                         <td><?php echo $row["Title"]." " ?></td>
                                        <td><?php echo $row["category"]." "?></td>
                                        <td class="text-center"><img src="img/figure/student6.png" alt="student"></td>
                                        <td><?php echo $row["price"]." "?></td>
                                        <!-- <td><?php echo $row["discription"]." "?></td> -->
                                        <td><?php echo $row["elec_rating"]." "?></td>
                                        
                                        
                                        <td>
        <a href="myphp.php?delete_items=yes&id=<?=$row["elecid"]?>">
          <span class="fas fa-times text-orange-red"></span>
        </a>&nbsp;&nbsp;&nbsp;
         <a href="Edit_Product.php?id=<?=$row["elecid"]?>">
          <span class="fas fa-cogs text-dark-pastel-green"></span>
        </a>&nbsp;&nbsp;&nbsp;
    </td>
      
                                            </div>

                                        </td>
 
                                    </tr>
                                    <?php
                                      }
            } else{
                echo "<p>No matches found</p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
}
else 
 
// close connection
mysqli_close($con);
?>
                                </tbody>
                            </table>
                        </div>
                    </div>
</body>
</html>
