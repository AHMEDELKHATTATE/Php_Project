<?php
try {
    $con=new PDO ("mysql:host=localhost;dbname=digital_produict","root","");
} catch (PDOException $e) {
    die('errre'.$e->getMessage());
}
?>