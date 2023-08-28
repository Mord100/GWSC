<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Pitch Types</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper{
            width: 1000px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });

        // Search function
        function search() {
            // Get search query
            let query = document.getElementById("search-input").value.trim().toLowerCase();

            // Get table rows
            let rows = document.getElementsByTagName("tbody")[0].getElementsByTagName("tr");

            // Loop through rows
            for (let i = 0; i < rows.length; i++) {
                let row = rows[i];

                // Get columns in the row
                let columns = row.getElementsByTagName("td");

                // Check if any column contains the search query
                let match = false;
                for (let j = 0; j < columns.length; j++) {
                    let column = columns[j];
                    let text = column.textContent.trim().toLowerCase();
                    if (text.includes(query)) {
                        match = true;
                        break;
                    }
                }

                // Hide or show row based on search query match
                if (match) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            }
        }
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Pitch Types</h2>
                        <div class="float-right">
                            <input type="text" id="search-input" placeholder="Search" onkeyup="search()">
                        </div>
                    </div>
                    <?php
                        // Include config file
                        require_once "config.php";

                        // Attempt select query execution
                        $sql = "SELECT * FROM pitch_types";
                        if($result = mysqli_query($conn, $sql)){
                            if(mysqli_num_rows($result) > 0){
                                echo '<table class="table table-bordered table-striped">';
                                    echo "<thead>";
                                        echo "<tr>";
                                            echo "<th>#</th>";
                                            echo "<th>Name</th>";
                                            echo "<th>PitchType</th>";
                                         

echo "<th>availability'] . "</td>";
echo "</tr>";
}
echo "</tbody>";
echo "</table>";
// Free result set
mysqli_free_result($result);
} else{
echo '<div class="alert alert-danger"><em>No pitch types were found.</em></div>';
}
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


                    // Close connection
                    mysqli_close($conn);
                ?>
            </div>
        </div>        
    </div>
</div>
</body>
</html>