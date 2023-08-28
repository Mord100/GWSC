<?php
session_start();

// Check if user is not logged in
if(!isset($_SESSION['user_name'])){
    header('location:login_form.php');
    exit();
}

// Include config file
include_once 'config.php';

// Define search query
$search_query = '';
if (isset($_GET['search'])) {
    $search_query = trim($_GET['search']);
}

// Select query with search condition
$sql = "SELECT * FROM crud_form";
if (!empty($search_query)) {
    $sql .= " WHERE name LIKE '%" . mysqli_real_escape_string($conn, $search_query) . "%'
             OR PitchType LIKE '%" . mysqli_real_escape_string($conn, $search_query) . "%'";
}

// Attempt select query execution
$result = mysqli_query($conn, $sql);
if (!$result) {
    die('Error: ' . mysqli_error($conn));
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Pitch Types</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .wrapper{
            width: 1000px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                    <p>Welcome <?php echo $_SESSION['user_name']; ?>!</p>
                        
                        <h2 class="pull-left">Pitch Types</h2>
                        <div class="float-right">
                            <form method="get" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                                <input type="text" name="search" placeholder="Search" value="<?php echo $search_query; ?>">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                            </form>
                            
                        </div>
                    </div>
                    <?php if (mysqli_num_rows($result) > 0) { ?>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Pitch Type</th>
                                    <th>Availability</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($row = mysqli_fetch_array($result)) { ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['PitchType']; ?></td>
                                        <td><?php echo $row['Availability']; ?></td>
                                    </tr>
                                <?php } ?>
                                
                            </tbody>
                        </table>
                    <?php } else { ?>
                        <p>No records found.</p>
                    <?php } ?>
                    <?php mysqli_free_result($result); ?>
                </div>
                <div>
                    <a href="logout.php" class="btn btn-danger pull-right">Log Out</a>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
