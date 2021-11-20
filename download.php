<?php
echo "Hello World1";
if (isset($_GET['name'])) {
    echo $_GET['name'];
    $file_name = stripslashes($_GET['name']);
    echo $file_name;
    $filepath = 'uploads/' . $file_name;
    echo $filepath;
    echo "HelloHelllo";
    echo $filepath;
    if (file_exists($filepath)){
        echo "Hello123";
    }
}
echo "Hellowordl3";
?>