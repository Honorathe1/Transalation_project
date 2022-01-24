<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->



<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body{
                background: wheat;
                font-size: 30;
                
                    
            }
            .div{
                color: graytext; 
            }
        </style>
        
    </head>
    <body>
        <div style="color: blueviolet">
            WELCOME TO TRANSLATE YOUR WORD YOU WANT IN 4 LANGUAGE
            
        </div>
      
        <div>
<!--            <label>
                Enter_Name:
            </label>
            <input type="text" name="" size="40"/>
            <br>
            <input type="submit" value="Send">
            <input type="submit" name="ENGLISH"  value="ENGLISH">
            <input type="submit" name="KINYARWANDA" value="KINYARWANDA" >
            <input type="submit" name="FRANCE" value="FRANCE">
            <input type="submit" name="KISWAHIL" value="KISWAHIL">-->
<form><b></b>
    <table>
                <tr><td>
            Orignal_word:
                    </td><td><input type="text" name="Enter the orignal word " value="name" placeholder=""></td></tr>
                    <tr><td>
           ENGLISH:
                    </td><td><input type="text" name="ENGLISH " value="TLANSLATOIR IN ENGLISH" placeholder=""></td></tr>    <tr><td>
            KINYARWANDA:
                    </td><td><input type="text" name="KINYARWANDA " value="" placeholder=""></td></tr>    <tr><td>
           FRANCE:
                    </td><td><input type="text" name="FRANCE " value="Tlansalator in France" placeholder=""></td></tr>
                        <tr><td>
            KISWAHILE:
                    </td><td><input type="text" name="KISWAHILE " value="Transalator in Kiswahile" placeholder=""></td></tr>
                        <tr><td><button type="submit" name="SAVE">SAVE</button></td></tr>
    </table></form>
            
        </div>
        <div>INTRODUCED BY Honorathe Bizumuremyi</div>

         <?php
         include 'connection.php';
        $name = filter_input(INPUT_POST, 'name');
        $ENGLISH = filter_input(INPUT_POST, 'ENGLISH');
        $KINYARWANDA = filter_input(INPUT_POST, 'KINYARWANDA');
        $FRANCE = filter_input(INPUT_POST, 'FRANCE');
        $KIWAHILE = filter_input(INPUT_POST, 'KISWAHILE');
$server = "localhost";
$user = "root";
$pass = "";
$db = "language";
// Create connection
$conn = new mysqli ($server, $user, $pass, $db);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO language (name ,ENGLISH ,KINYARWANDA ,FRANCE ,KISWAHILE)values ('$name' ,'$ENGLISH' ,'$KINYARWANDA' ,'$FRANCE' ,'$KIWAHILE')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}


?>
        
    </body>
</html>
