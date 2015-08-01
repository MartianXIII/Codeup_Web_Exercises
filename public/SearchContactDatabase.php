<?php  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Search Contacts</title>
  </head>
  <body>
    <h3>Search the Contact Database</h3>
    <p>You may seach by first and or last name</p>
    <form method="post" action="search.php?go" id="searchform">
      <input type="text" name="name">
      <input type="submit" name="submit" value="Search">
    </form>
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
    $sql="SELECT ID, FirstName, LastName FROM Contacts WHERE FirstName LIKE '%" . $name . "%' OR LastName LIKE '%" . $name . "%'";
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
