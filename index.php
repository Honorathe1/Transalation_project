<!DOCTYPE html>



<html>
    <title>INTRODUCED BY Honorathe Bizumuremyi</title>
    <body style="">
        
        <form method="post" action="index.php" >
            <b></b>
    <table style="background: violet">
        <tr><td style="color: blue"> ENTER THE WORD YOUR WANTS </td></tr>
        <tr><td><b>
                    Original_word:</b>
                    </td><td><input type="text" name="name"placeholder="word"></td></tr>
                    <tr><td>
                            <b>ENGLISH:</b>
                    </td><td><input type="text" name="ENGLISH"  placeholder="Tlansalator in English"></td></tr>    <tr><td>
            <b>KINYARWANDA:</b>
                    </td><td><input type="text" name="KINYARWANDA" value="" placeholder="Tlansalator in Kinyarwanda"></td></tr>    <tr><td>
           <b>FRANCE:</b>
                    </td><td><input type="text" name="FRANCE"  placeholder="Tlansalator in France"></td></tr>
                        <tr><td>
                                <b> KISWAHILE:</b>
                    </td><td><input type="text" name="KISWAHILE"  placeholder="Transalator in Kiswahile"></td></tr>
                        <tr><td style=""><button type="submit" name="SAVE" style="background: green" >SAVE</button></td></tr>
                        </b>
    </table>
        </form>
            
        </div>
        <div></div>
       
        <form style="margin-top: 50px; margin-left: 100px;border:solid 100px  whitesmoke; width: 23%;" method="POST" action="index.php">
             <div style="background: yellowgreen">
            <label>
               SEARCHING THE WORD AND TRANSLATE INTO IN YOUR LENGUAGE YOUR WANT:
            </label>
            <input type="text" name="var" size="40"/>
            <br>
        <table>
            <tr>
                </tr>
            <br/>
            <br/>
            <br/>
            <tr style="margin-left:2px;">
              <td>
                  <button name="ENGLISH" type="submit">English</button>
                   </td>
              <td><button name="KINYARWANDA" type="submit">Kinyarwanda</button></td>
                  <td>
                      <button name="FRANCE" type="submit" name>France</button>

                      </td>
              <td>
                  <button name="KISWAHILE">Kiswahile</button> 
             



                  </td>
            </tr>
          </table>
          </form>
                    <?php
                       //include("connection.php");
        $name = filter_input(INPUT_POST, 'name');
        $ENGLISH = filter_input(INPUT_POST, 'ENGLISH');
        $KINYARWANDA = filter_input(INPUT_POST, 'KINYARWANDA');
        $FRANCE = filter_input(INPUT_POST, 'FRANCE');
        $KIWAHILE = filter_input(INPUT_POST, 'KISWAHILE');
$server = "localhost";
$user= "root";
$pass = "";
$db = "language";
// Create connection
$conn = new mysqli ($server ,$user ,$pass ,$db);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else
$sql = "INSERT INTO language (name ,ENGLISH ,KINYARWANDA ,FRANCE ,KISWAHILE) values ('$name' ,'$ENGLISH' ,'$KINYARWANDA' ,'$FRANCE' ,'$KIWAHILE')";
if ($conn->query($sql)){
echo "";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
?>
                <?php
                $server = "localhost";
$user= "root";
$pass = "";
$db = "language";
// Create connection
$conn = new mysqli ($server ,$user ,$pass ,$db);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
                $word = filter_input(INPUT_POST, 'var');

           if(isset($_POST['ENGLISH'])) {
            
           $result = mysqli_query($conn, "SELECT  ENGLISH FROM language
    WHERE ENGLISH LIKE '%{$word}%' OR KINYARWANDA LIKE '%{$word}%' OR FRANCE LIKE '%{$word}' OR KISWAHILE LIKE '%{$word}'"); 
               

                   while ($row = mysqli_fetch_array($result)) {
                       echo  $row['ENGLISH'];
                       echo '<br>';
                    }
                }
           
           elseif (isset($_POST['KINYARWANDA']))
            {
       
           $result = mysqli_query($conn, "SELECT KINYARWANDA FROM language
    WHERE ENGLISH LIKE '%{$word}%' OR KINYARWANDA LIKE '%{$word}%' OR FRANCE LIKE '%{$word}' OR KISWAHILE LIKE '%{$word}'"); 
               

                   while ($row = mysqli_fetch_array($result)) {
                       echo  $row['KINYARWANDA'];
                    }
                }
               // code...
           

elseif (isset($_POST['FRANCE']))
            {
   
           $result = mysqli_query($conn, "SELECT FRANCE FROM language
    WHERE ENGLISH LIKE '%{$word}%' OR KINYARWANDA LIKE '%{$word}%' OR FRANCE LIKE '%{$word}' OR KISWAHILE LIKE '%{$word}'");   
               

                   while ($row = mysqli_fetch_array($result)) {
                       echo  $row['FRANCE'];
                    }
                }
               // code...
           

elseif (isset($_POST['KISWAHILE']))
            {
              $result = mysqli_query($conn, "SELECT KISWAHILE FROM language
    WHERE ENGLISH LIKE '%{$word}%' OR KINYARWANDA LIKE '%{$word}%' OR FRANCE LIKE '%{$word}' OR KISWAHILE LIKE '%{$word}'");   

              

                   while ($row = mysqli_fetch_array($result)) {
                       echo  $row['KISWAHILE'];
                    }
                }
           
           
           
           
?>
            
          
    </body>
</html>