<?php

	$koneksi = mysql_connect('localhost','root','');
	$database = mysql_select_db('pendaftaran_kampus');	


	$univ = mysql_query("SELECT * FROM `univ` NATURAL JOIN `foto_univ`"); //mengambil data dari database

  while($row = mysql_fetch_array($univ))  
      {  
           $output[] = $row;  
      }  
      echo json_encode($output);  

?>