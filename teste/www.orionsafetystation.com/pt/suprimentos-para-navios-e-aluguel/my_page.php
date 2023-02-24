<?php
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $conn = mysqli_connect("localhost:5431", "root", "40028922.jj", "teste");
    $sql = "SELECT * FROM files WHERE id LIKE '$id'";
    $bb = mysqli_query($conn, $sql );
    $bbb = mysqli_fetch_assoc($bb);
    echo $bbb['buttons'];}
?>