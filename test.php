<?php

 include_once 'resultQuery.php';

 $obj=new resultQuery();
 $row=$obj->checkRank('140260h');
 echo $row['rank'];
?>