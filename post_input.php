<!DOCTYPE html>
<html lang="en">
<head>
    <title>POST: PHP MySQL App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/data_app.css">
</head>
<body>
<br/>
<h1 class="h1_title">POST web form method demonstration</h1> <hr/>
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
            <form action="response_post.php" method="post"><br/>
            <textarea type="text" name="response_text" id="response_text" placeholder="Insert text here..." rows="2" cols="80"></textarea>
            <input type="submit" value="VIEW POST response">
            </form>
            </div></div><!-- end of sm 10 grid -->
        <div class="col-sm-1"></div> <!-- right main grid column -->
    </div> <!-- end div row  -->
</div> <!-- end div container  -->
<br>
<div class="container" id="post_form_db_update"> <!-- web form container -->
    <div class="row">
        <div class="col-sm-1"></div> <!-- left main grid column -->
        <div class="col-sm-10">
            <div class="container-fluid">
 <hr/>
            <form action="update_by_post.php" method="post"><br/>
            <textarea type="text" name="response_text" id="response_text" placeholder="Insert text here..." rows="2" cols="80"></textarea>
            <input type="submit" value="Send POST to Database">
            </form>
            </div></div><!-- end of sm 10 grid -->
        <div class="col-sm-1"></div> <!-- right main grid column -->
    </div> <!-- end div row  -->
</div> <!-- end div container  -->

</hr>
<div class="container" id="footing"> <!-- footer container 10 grid -->
    <div class="row"><div class="col-sm-1"></div> <!-- left main grid column -->
        <div class="col-sm-10">
            <footer><article><br/><hr/><p id="footer_here"><p id="footer_here">This xamp demo is free to use &copy; Clinton Garwood 2022 -' . date("Y") . '</p></article></footer>
        </div><!-- end of sm 10 grid -->
        <div class="col-sm-1"></div> <!-- right main grid column -->
    </div> <!-- end div row  --> </div> <!-- end div container  -->

</body>
</html>

