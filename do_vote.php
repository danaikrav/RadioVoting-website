<?php
include 'inc/config.inc.php';
    
    if(session_id() == "") session_start();

    $id = $_POST['id'];
    $userid = $_SESSION['iduser'];

    $sql="insert into vote_songs(id_song,id_user) 
        values('$id',$userid) ";
        

        $sql2="insert into vote_songs(id_song,id_user) 
		values('$id',$userid) ";
    $db->query($sql);

    header("Location:vote.php");

?>