
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
                                        <th>Category</th>
                                        
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 


require_once "connection.php";

    if(isset($_REQUEST["term"])){
    // Prepare a select statement
    $a = $_REQUEST["term"];
    $sql = "SELECT * FROM addcati WHERE categoryes LIKE ? ";
    
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
                                         <td><?php echo $row["categoryes"]." " ?></td>
                                         <td>     
        <a href="myphp.php?delete_cat=yes&id=<?=$row['id']?>">
             <span class="fas fa-times text-orange-red"></span>
           </a>
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



 
// close connection
mysqli_close($con);
?>
                                </tbody>
                            </table>
                        </div>
                    </div>
</body>
</html>
