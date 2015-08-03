<?php  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Search Contacts</title>
  </head>
  <body>
    <h1>
    <h3>Search the Contact Database</h3>
    <p>You may seach by first and or last name</p>
    <form method="post" action="search.php?go" id="searchform">
      <input type="text" name="name">
      <input type="submit" name="submit" value="Search">
    </form>
    <p><a  href="?by=A">A</a> | <a  href="?by=B">B</a> | <a  href="?by=K">C</a> | <a  href="?by=K">D</a> | <a  href="?by=K">E</a> | <a  href="?by=K">F</a>  </p>
    <p><a  href="?by=A">G</a> | <a  href="?by=B">H</a> | <a  href="?by=K">I</a> | <a  href="?by=K">J</a> | <a  href="?by=K">K</a> | <a  href="?by=K">L</a>  </p>
    <p><a  href="?by=A">M</a> | <a  href="?by=B">N</a> | <a  href="?by=K">O</a> | <a  href="?by=K">P</a> | <a  href="?by=K">Q</a> | <a  href="?by=K">R</a>  </p>
    <p><a  href="?by=A">S</a> | <a  href="?by=B">T</a> | <a  href="?by=K">U</a> | <a  href="?by=K">V</a> | <a  href="?by=K">W</a> | <a  href="?by=K">X</a>  </p>
    <p><a  href="?by=A">Y</a> | <a  href="?by=B">Z</a> | <a  href="?by=K">1</a> | <a  href="?by=K">2</a> | <a  href="?by=K">3</a> | <a  href="?by=K">4</a>  </p>
    <?php
    //HACK:
    if(isset($_POST['submit'])){//dis Supper Global Array POST
      if(isset($_GET['go'])){
          if(preg_match("/[A-Z | a-z]+/", $_POST['name'])){
            $name=$_POST['name'];
      //Connecting
            $db=mysql_connect ("servername", "username", "password")
              or die('Sorry, please check error:' . mysql_error());
            $mydb=mysql_select_db("yourdatabase");
    //-Query the database table
    $sql="SELECT ID, FirstName, LastName FROM Contacts
      WHERE FirstName LIKE '%" . $name . "%' OR LastName LIKE '%" . $name . "%'";
    $result=mysql_query($sql);
    //Create while loop and loop through result settype
    while($row=mysql_fetch_array($result))  {
      $FirstName =$row['FirstName'];
      $LastName =$row['LastName'];
      $ID=$row['ID'];

    //Dispay array results
    echo "<ul>/n";
    echo "<li>" . "<a href=\"search.php?id=$ID\">" . $FirstName . " " . $LastName . "</a></li>\n";
    echo "</ul>";
    }
    }
          }
    else {
      echo "<p>Please insert a search query</p>";
    }
    }

    ?>
  </body>
</html>
