<?php
//Start $_GET example
echo '<br> <br> <br> <h1 style="color:blue;">$_GET</h1>';
echo "<form action='index.php' method='GET'>
<input type='text' name='name' id=''>
<input type='submit' value='send'>
</form>";
if(isset($_GET['name'])){
    echo "<br> ".$_GET['name'];
}