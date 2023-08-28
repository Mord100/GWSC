<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = $pitchtype = $availability = "";
$name_err = $pitchtype_err = $availability_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    
    // Validate pitchtype
    $input_pitchtype = trim($_POST["pitchtype"]);
    if(empty($input_pitchtype)){
        $pitchtype_err = "Please enter a pitchtype.";     
    } else{
        $pitchtype = $input_pitchtype;
    }
    
    // Validate availability
    $input_availability = trim($_POST["availability"]);
    if(empty($input_availability)){
        $availability_err = "Please enter the availability amount.";     
    } elseif(!ctype_digit($input_availability)){
        $availability_err = "Please enter a positive integer value.";
    } else{
        $availability = $input_availability;
    }
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($pitchtype_err) && empty($availability_err)){
        // Prepare an update statement
        $sql = "UPDATE crud_form SET name=?, PitchType=?, Availability=? WHERE id=?";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssi", $param_name, $param_pitchtype, $param_availability, $param_id);
            
            // Set parameters
            $param_name = $name;
            $param_pitchtype = $pitchtype;
            $param_availability = $availability;
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: crud.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($conn);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM crud_form WHERE id = ?";
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $name = $row["name"];
                    $address = $row["PitchType"];
                    $salary = $row["Availability"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($conn);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Update Record</h2>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>PitchType</label>
                            <textarea name="pitchtype" class="form-control <?php echo (!empty($pitchtype_err)) ? 'is-invalid' : ''; ?>"><?php echo $pitchtype; ?></textarea>
                            <span class="invalid-feedback"><?php echo $pitchtype_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Availability</label>
                            <input type="text" name="availability" class="form-control <?php echo (!empty($availability_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $availability; ?>">
                            <span class="invalid-feedback"><?php echo $availability_err;?></span>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="crud.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>