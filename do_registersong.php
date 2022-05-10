<?php
	include 'inc/config.inc.php';

	$songname = $db->real_escape_string($_POST['songname']);
	$artist = $db->real_escape_string($_POST['artist']);
	$link =  $db->real_escape_string($_POST['link']);
    $currentWeekNumber = date('W');


		
        
        $sql2= "SELECT * FROM songs WHERE week='$currentWeekNumber' ";
        $result2 = $db->query($sql2);
        
        if ($result2->num_rows >=5) {
            echo '
			<script>
				alert("YOU ALREADY ADDED 5 SONGS");
                window.location = "registersong.php";
			</script>
        '	;
        }else{
            $sql= "insert into songs(name,artist,week,youtube_link) 
            values('$songname','$artist','$currentWeekNumber','$link') ";
            
        $db->query($sql);
        
        echo '
			<script>
				alert("Music Added");
                window.location = "registersong.php";
			</script>
        '	;
        }
        
        

	
?>
