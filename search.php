<?php
    include('db.php');

    if(!isset($_POST['search'])){
        header('location: index.php');
    }

    $filtervalues = $_POST['search'];

?>