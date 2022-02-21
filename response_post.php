<!DOCTYPE html>
<html lang="en">
<head>
    <title>POST Response</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/data_app.css">
</head>
<body>
<br/>
<h1 class="h1_title">POST Web Form Response</h1> <hr/>
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
                    </ul>
                </div></nav> </div><!-- end of sm 10 grid -->
        <div class="col-sm-1"></div> <!-- right main grid column -->
    </div> <!-- end div row  --> </div> <!-- end div container  -->

<div class="container" id="forming"> <!-- web form container -->
    <div class="row">
        <div class="col-sm-1"></div> <!-- left main grid column -->
        <div class="col-sm-10">
            <div class="container-fluid">
            <p>GET form submission data: ' . '<br>' . 'The information received was: ' . $_POST["response_text"]  . '<br></p>
            </div></div><!-- end of sm 10 grid -->
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

