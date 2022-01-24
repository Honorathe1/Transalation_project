<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

  $server = "localhost";
  $user ="root";
  $pass ="";
  $db = "language";

  $conn = mysqli_connect($server, $user, $pass,$db);

  if($conn){
	  //echo "Connected"."<br/>";
  }else{
	  //echo "Not connected".mysqli_error($conn);
  }
?>