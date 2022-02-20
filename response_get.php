<?php

echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<head>';
echo '    <title>GET Response</title>';
echo '    <meta name="viewport" content="width=device-width, initial-scale=1">';
echo '    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">';
echo '    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>';
echo '    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>';
echo '    <link rel="stylesheet" href="./css/data_app.css">';
echo '</head>';
echo '<body>';
echo '<br/>';
echo '<h1 class="h1_title">GET Web Form Response</h1> <hr/>';
echo '<div class="container" id="naving"> <!-- web navigation container -->';
echo '    <div class="row"><div class="col-sm-1"></div> <!-- left main grid column -->';
echo '        <div class="col-sm-10">';
echo '            <nav class="navbar navbar-expand-sm bg-light sticky-top">';
echo '                <div class="container-fluid">';
echo '                    <ul class="navbar-nav nav_list">';
echo '                        <li class="active"><a class="nav-link" href="index.php">App Home</a></li>';
echo '                        <li><a class="nav-link" href="get_input.php">GET Input</a></li>';
echo '                        <li><a class="nav-link" href="post_input.php">POST Input</a></li>';
echo '                        <li><a class="nav-link" href="php_info.php">PHP Info</a></li>';
echo '                        <li><a class="nav-link" href="read_db.php">Read Database</a></li>';
echo '                    </ul>';
echo '                </div></nav> </div><!-- end of sm 10 grid -->';
echo '        <div class="col-sm-1"></div> <!-- right main grid column -->';
echo '    </div> <!-- end div row  --> </div> <!-- end div container  -->';

echo '<div class="container" id="forming"> <!-- web form container -->';
echo '    <div class="row">';
echo '        <div class="col-sm-1"></div> <!-- left main grid column -->';
echo '        <div class="col-sm-10">';
echo '            <div class="container-fluid">';
echo '            <p>GET form submission data: ' . '<br>' . 'The information received was: ' . $_GET["response_text"] . '<br></p>';
echo '            </div></div><!-- end of sm 10 grid -->';
echo '        <div class="col-sm-1"></div> <!-- right main grid column -->';
echo '    </div> <!-- end div row  -->';
echo '</div> <!-- end div container  -->';

echo '</hr>';
echo '<div class="container" id="footing"> <!-- footer container 10 grid -->';
echo '    <div class="row"><div class="col-sm-1"></div> <!-- left main grid column -->';
echo '        <div class="col-sm-10">';
echo '            <footer><article><br/><hr/><p id="footer_here"><p id="footer_here">This xamp demo is free to use &copy; Clinton Garwood 2022 -' . date("Y") . '</p></article></footer>';
echo '        </div><!-- end of sm 10 grid -->';
echo '        <div class="col-sm-1"></div> <!-- right main grid column -->';
echo '    </div> <!-- end div row  --> </div> <!-- end div container  -->';

echo '</body>';
echo '</html>';
?>
