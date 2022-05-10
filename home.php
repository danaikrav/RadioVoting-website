<?php
include ("inc/autentica.inc.php");
$currentWeekNumber = date('W');
$previ = 0;
$sql="SELECT vote_songs.id_song as id ,songs.name as name,COUNT(*) as votes FROM vote_songs, songs WHERE vote_songs.id_song = songs.id and songs.week = $currentWeekNumber - $previ GROUP BY vote_songs.id_song";
$result = $db->query($sql);


?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/home.css">
    <title>E-CE Web Radio</title>
</head>

<body>
    <div class="header-container">
        <a href="#" class="">Home</a>
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

       <div class="historic-page-songs">
                    <input type=button  class="listen-button" value='Current Week' > 
                    <input class="vote-button" type="submit"  value ="Previous week"></input>
                   <div id="columnchart_material" class="chart-votes" style="width: 400px; height: 300px ; margin-top: 100px; ;"></div>


        </div>
    </div>

    
</body>

 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Song', 'Votes'],
            <?php 

            while($row = $result->fetch_assoc()) {
                        $musicname = $row["name"];
                        $votes = $row["votes"];
            ?>
               ['<?php echo $musicname;?>',<?php echo  $votes; ?>],
            <?php
        }
          ?>
        ]);

        var options = {
          chart: {
            title: 'Vote Songs',
          },
          colors: ['#a87438'],
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }

      function teste(){
             <?php 
            $previ = 1;
            ?>
}
    </script>

</html>





