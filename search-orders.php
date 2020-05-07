
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
                                        <th>Name</th>
                                        <th>Mobile number</th>
                                        <th>Province</th>
                                        <th>City</th>
                                       <!--  <th>discription</th> -->
                                        <th>Address</th>
                                        
                                        <th>Amount</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 


require_once "connection.php";
    if(isset($_REQUEST["term"]))
    {
    // Prepare a select statement
    $a = $_REQUEST["term"];
    if(is_numeric($a))
    {
        $sql = "SELECT * FROM orders WHERE id LIKE ? AND status != 'confirmed' ";
    }
    else
    {
        $sql = "SELECT * FROM orders WHERE f_name LIKE ? AND status != 'confirmed' ";
    }
    if($stmt = mysqli_prepare($con, $sql)){
    
    // Set parameters
    $param_term = $_REQUEST["term"] . '%';

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

                                    <tr>

                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label"><?php echo $row["id"]." "?></label>
                                            </div>
                                        </td>          
                                         <td><?php echo $row["f_name"]." " ?></td>
                                        <td><?php echo $row["phone_number"]." "?></td>
                                        <td><?php echo $row["province"]." "?></td>
                                        <td><?php echo $row["city"]." "?></td>   
                                       <td><?php echo $row["address"]." "?></td>
                                        <td><?php echo $row["amount"]." "?></td>
                                        <td>
<a href="myphp.php?delete_order=yes&id=<?=$row['id']?>">
 <span class="fas fa-times text-orange-red"></span>
</a>&nbsp;&nbsp;
<a href="myphp.php?confirm_order=yes&id=<?=$row['id']?>">
 <span class=" fa fa-check"></span>
</a>
</td>
      
                                            </div>

                                        </td>
                                        <?php
//   $n++;
//   }
  ?>
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



///////////////////////// Search Functionality for confirm orders ///////////////
if(isset($_REQUEST['most']))
{
// Prepare a select statement
$a = $_REQUEST["most"];
if(is_numeric($a))
{
    $sql = "SELECT * FROM orders WHERE id LIKE ? AND status = 'confirmed' ";
}
else
{
    $sql = "SELECT * FROM orders WHERE f_name LIKE ? AND status = 'confirmed' ";
}

if($stmt = mysqli_prepare($con, $sql)){

// Set parameters
$param_term = $_REQUEST["most"] . '%';

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

                                <tr>

                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label"><?php echo $row["id"]." "?></label>
                                        </div>
                                    </td>          
                                     <td><?php echo $row["f_name"]." " ?></td>
                                    <td><?php echo $row["phone_number"]." "?></td>
                                    <td><?php echo $row["province"]." "?></td>
                                    <td><?php echo $row["city"]." "?></td>   
                                   <td><?php echo $row["address"]." "?></td>
                                    <td><?php echo $row["amount"]." "?></td>
                                    <td><a href="myphp.php?unconfirm_order=yes&id=<?=$row['id']?>">
          <button class="btn btn-danger btn-lg" type="button" > Unconfirm
          </button>
        </a>&nbsp;&nbsp;
        </td>
  
                                        </div>

                                    </td>
                                    <?php
//   $n++;
//   }
?>
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


 
// close connection
mysqli_close($con);
?>
                                </tbody>
                            </table>
                        </div>
                    </div>
</body>
</html>
