<?php

$sql="select count(id) as total from claps where idtask=" . $row['id'];
//print $sql;
$result_c = $db->query($sql);
$row_c = $result_c->fetch_assoc();
$claps=$row_c['total'];

if ($claps) 
    print ("claps: $claps");