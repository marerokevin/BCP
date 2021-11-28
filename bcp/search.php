<?php
    //Including Database configuration file.
    include "dbconnect.php";
    //Getting value of "search" variable from "script.js".
    if (isset($_POST['search'])) {
    //Search box value assigning to $Name variable.
       $Name = $_POST['search'];
    //Search query.
       $Query = "SELECT dis_control_number FROM disasterinfo WHERE dis_control_number LIKE '%$Name%' LIMIT 5";
    //Query execution
       $ExecQuery = MySQLi_query($conn, $Query);
    //Creating unordered list to display result.
       echo '
       ';
       //Fetching result from database.
       while ($Result = MySQLi_fetch_array($ExecQuery)) {
           ?>

       <a>
       <!-- Assigning searched result in "Search box" in "search.php" file. -->
           <?php echo $Result['dis_control_number']; ?>
       </a>
       <!-- Below php code is just for closing parenthesis. Don't be confused. -->
       <?php
    }}
    ?>

<script type="text/javascript">
    function fill(Value) {
       $('#search').val(Value);
       $('#display').hide();
    }
    $(document).ready(function() {
       //On pressing a key on "Search box" in "search.php" file. This function will be called.
       $("#search").keyup(function() {
           //Assigning search box value to javascript variable named as "name".
           var name = $('#search').val();
           //Validating, if "name" is empty.
           if (name == "") {
               //Assigning empty value to "display" div in "search.php" file.
               $("#display").html("");
           }
           //If name is not empty.
           else {
               //AJAX is called.
               $.ajax({
                   //AJAX type is "Post".
                   type: "POST",
                   //Data will be sent to "ajax.php".
                   url: "ajax.php",
                   //Data, that will be sent to "ajax.php".
                   data: {
                       //Assigning value of "name" into "search" variable.
                       search: name
                   },
                   //If result found, this funtion will be called.
                   success: function(html) {
                       //Assigning result to "display" div in "search.php" file.
                       $("#display").html(html).show();
                   }
               });
           }
       });
    });
</script>
<!DOCTYPE html>
    <html>
    <head>
        <style>
            input {
                width: 98%;
                align-item: center;
                padding-right: 100px;
                font-size: 12px;
                line-height: 1.5;
                margin-left: 1%;
                margin-top: 1%;
                }
        </style>
       <title>Live Search using AJAX</title>
       <!-- Including jQuery is required. -->
       <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
       <!-- Including our scripting file. -->
       <script type="text/javascript" src="script.js"></script>
       <!-- Including CSS file. -->
       <link rel="stylesheet" type="text/css" href="/form-test/assets/css/create.php">
    </head>
    <body>
    <!-- Search box. -->
       <input type="text" class="search" id="search" placeholder="Search" />

       <!-- Suggestions will be displayed in below div. -->

       <div id="display"></div>

       
    </body>
    </html>