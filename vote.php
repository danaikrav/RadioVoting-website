<?php
include ("inc/autentica.inc.php");
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/home.css">
    <title>ece Web Radio</title>
</head>

<body>
    <div class="header-container">
        <a href="home.php" class="">Home</a>
        <a href="about.php"> About</a>
        <a href="contact.php">Contact</a>
        <? if (@$_SESSION['admin'] == true) { ?>
         <a href="registersong.php" class="">Add Songs</a>
        <? }?>
        <a href="vote.php" class="">Vote</a>
        <a href="home.php?logout=1">Logout</a>
    </div>
         <img class="radio-image" src="photos/radio.jpg" alt="Radio image">
     <div class="homepage-container">
          <?php



        // fetch sogns from db
        $currentWeekNumber = date('W');
        $sql="SELECT id,name,artist,youtube_link FROM songs WHERE week ='$currentWeekNumber'";
        $result = $db->query( $sql);

        $userid = $_SESSION['iduser'];

        // check if user already vote

        $voted = false;
        $sql2="SELECT * FROM songs WHERE WEEK ='$currentWeekNumber' AND ID IN (SELECT id_song from vote_songs where id_user ='$userid' )";
        $result2 = $db->query($sql2);

        if ($result2->num_rows > 0) {
             $voted = true;
        }

        //print $sql;

        if ($result->num_rows > 0) {
        // output data of each row

        while($row = $result->fetch_assoc()) {
            ?>
                <div class="music-vote-card">
                    <p class="title-music"><?php echo $row["name"] ?>  </p>
                    <p class="author-music"> <?php echo $row["artist"] ?>   </p>
                   <form action="do_vote.php" method="POST" class="form-home">
                    <input type=button  class="listen-button" onClick="parent.open('<?php echo $row["youtube_link"]?>')" value='Listen' >
                    <input class="vote-button" type="hidden"  name ="id" value="<?php echo $row["id"]?>" ></input>
                    <input class="vote-button" type="submit"  value ="Vote" <?php if($voted) {?> style="visibility:hidden" <?php } else { ?> style="visibility:visible" <?php } ?>></input>
                   </form>
                </div>

            <?php

            
        }
        } else {
        echo "0 results";
    }
    ?>
        

    </div>

     <p class="voted" <?php if($voted) {?> style="visibility:visible" <?php } else { ?> style="visibility:hidden" <?php } ?>>You Already Voted!</p>

    
</body>

</html>





