<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$name = $pitchtype = $availability = "";
$name_err = $pitchtype_err = $availability_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }

    // Validate pitch type
    $input_pitchtype = trim($_POST["pitchtype"]);
    if(empty($input_pitchtype)){
        $pitchtype_err = "Please enter a pitch type.";
    } else{
        $pitchtype = $input_pitchtype;
    }

    // Validate availability
    $input_availability = trim($_POST["availability"]);
    if(empty($input_availability)){
        $availability_err = "Please enter the availability amount.";
    } else{
        $availability = $input_availability;
    }

    // Check input errors before inserting in database
    if(empty($name_err) && empty($pitchtype_err) && empty($availability_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO crud_form (name, pitchtype, availability) VALUES (?, ?, ?)";

        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_pitchtype, $param_availability);

            // Set parameters
            $param_name = $name;
            $param_pitchtype = $pitchtype;
            $param_availability = $availability;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
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
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
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
                    <h2 class="mt-5">Create Record</h2>
                    <p>Please fill this form and submit to add a record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
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
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="crud.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>