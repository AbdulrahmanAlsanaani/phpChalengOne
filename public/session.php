<?php
//Start $_SESSION example

session_start();
echo '<br> <br> <br> <h1 style="color:blue;">$_SESSION</h1>';
$_SESSION["newsession"]="alsanaani sission";
echo "<br> ".$_SESSION["newsession"];
