<!DOCTYPE html>
<html lang="en">
<head>
    <title>Read Database</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/data_app.css">
</head>
<body>
<br/>
<h1 class="h1_title">Query and display database rows</h1> <hr/>
<div class="container" id="naving"> <!-- web navigation container -->
    <div class="row"><div class="col-sm-1"></div> <!-- left main grid column -->
        <div class="col-sm-10">
            <nav class="navbar navbar-expand-sm bg-light sticky-top">
                <div class="container-fluid">
                    <ul class="navbar-nav nav_list">
                        <li class="active"><a class="nav-link" href="index.php">App Home</a></li>
                        <li><a class="nav-link" href="get_input.php">GET Input</a></li>
                        <li><a class="nav-link" href="post_input.php">POST Input</a></li>
                        <li><a class="nav-link" href="php_info.php">PHP Info</a></li>
                        <li><a class="nav-link" href="read_db.php">Read Database</a></li>
                    </ul>
                </div></nav> </div><!-- end of sm 10 grid -->
        <div class="col-sm-1"></div> <!-- right main grid column -->
    </div> <!-- end div row  --> </div> <!-- end div container  -->

<div class="container" id="forming"> <!-- web form container -->
    <div class="row">
        <div class="col-sm-1"></div> <!-- left main grid column -->
        <div class="col-sm-10">
            <div class="container-fluid">
            <p>Database Contents: ' . '<br></p>
$servername = "localhost";
$username = "reader";
$password = "reader";
$dbname = "my_xamp";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
    echo "Connected successfully";
    $select_db = "use my_xamp";
    $read_data = "select * from my_table;";
    if ($conn->query($select_db) === TRUE) {
        echo " The db was selected";
        //if ($conn->query($read_data) === TRUE) {
        echo " The read query was run";
        $result = $conn->query($read_data);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<br>". "id: " . $row["my_key"]. " - Words: " . $row["save_text"];
            }
        } else {
            echo " 0 results";
        }
    } else {
        echo "Error: " . $read_data . "<br>" . $conn->error; }
}
            </div></div><!-- end of sm 10 grid -->
        <div class="col-sm-1"></div> <!-- right main grid column -->
    </div> <!-- end div row  -->
</div> <!-- end div container  -->

<div class="container" id="form-options"> <!-- web form container -->
    <div class="row">
        <div class="col-1"></div> <!-- right main grid column -->
        <div class="col-3">
        <div class="container-fluid">
                <br/><p>Remove Item by Row ID</p>
                <form action="remove_by_id.php" id="remove_db_get" method="get">
                <input type="text" name="remove_text" id="remove_text" placeholder="Type number here..." rows="1" cols="10"></input>
                <button type="submit" class="btn btn-danger">Remove Item</button></form>
                </form>
            </div></div> <!-- right main grid column -->
        <div class="col-1"></div> <!-- right main grid column -->
        <div class="col-6"> <!-- end container-fluid -->
        <div class="container-fluid">
                <br/><p>Update Item by Row ID</p>
                <form action="update_by_id.php" id="update_db_get" method="get">
                <input type="text" name="update_key" id="update_key" placeholder="Key #" rows="1" cols="10"></input><br/>
                <textarea name="update_text" id="update_text" placeholder="Type replacement text..." rows="1" cols="30"></textarea>
                <button type="submit" class="btn btn-warning">Update Item</button></form>
               </form>
            </div> <!-- end container-fluid -->
        </div> <!-- right main grid column -->
        <div class="col-sm-1"></div> <!-- right main grid column -->
    </div> <!-- end div row  -->
</div> <!-- end div container  -->

<hr/>
<div class="container" id="footing"> <!-- footer container 10 grid -->
    <div class="row"><div class="col-sm-1"></div> <!-- left main grid column -->
        <div class="col-sm-10">
            <?php
            $thisyear = date("Y");
            echo '<footer><article><br/><hr/><p>This xamp demo is free to use &copy; Clinton Garwood - ' . $thisyear . '.</p></article></footer>'; ?>
        </div><!-- end of sm 10 grid -->
        <div class="col-sm-1"></div> <!-- right main grid column -->
    </div> <!-- end div row  --> </div> <!-- end div container  -->
</body>
</html>

