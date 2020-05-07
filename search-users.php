
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



///////////////////////// Search Functionality for confirm orders ///////////////
if(isset($_REQUEST['term']))
{
// Prepare a select statement
$a = $_REQUEST["term"];
$sql = "SELECT * FROM user WHERE name LIKE ? ";

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
                                            <label class="form-check-label"><?php echo $row["userid"]." "?></label>
                                        </div>
                                    </td>          
                                     <td><?php echo $row["name"]." " ?></td>
                                    <td><?php echo $row["mobile"]." "?></td>
                                    <td><?php echo $row["email"]." "?></td>
                                    <td><?php echo $row["city"]." "?></td>   
                                   <td><?php echo $row["address"]." "?></td>
                                   <td>
<a href="myphp.php?delete_users=yes&id=<?=$row['userid']?>">
  <span class="fas fa-times text-orange-red"></span>
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


 
// close connection
mysqli_close($con);
?>
                                </tbody>
                            </table>
                        </div>
                    </div>
</body>
</html>
