<?php

define("DB_HOST", "127.0.0.1");
define("DB_NAME", 'contacts_db');
define("DB_USER", 'contacts_user');
define("DB_PASS", 'rocks');

 {
  //attributes = data
  public $data = [];
  protected static $dbc;
  protected static $table;

  // Constructor
  public function __contstruct()
  {
    self::dbConnect();
  }
  //@Todo connect to the DB
  protected static function dbConnect()
  {
      if (!self::$dbc)//singleton pattern perfect for db connect
      {
          self::$dbc = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
          self::$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          echo self::$dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS);
      }
  }
  //Get value from attributes based on name
  public function __get($name)
  {
    if(array_key_exists($name, $this->data)) {
      return $this->data[$name];
    }
     return null;
  }
  //set a new attribute (data) for the object
  public function __set($name, $value)
  {
    //store name value of attributes array
    $this->data[$name] = $value;
  }
  //Persist the object to the database
  public function save()
  {
    if(!empty($this->data)) {
      if(isset($this->data['id'])) {
        echo "UPDATING\n";
        $stmt= self::$dbc->prepare("UPDATE " . static::$table .
                                   " SET first_name = :first_name,
                                     last_name      = :last_name,
                                     email          = :email,
                                     birth_date     = cast(:birth_date as DATE)
                                     WHERE id=:id");
        var_dump($stmt);
        $stmt->bindValue(':first_name', $this->data['first_name'], PDO::PARAM_STR);
        $stmt->bindValue(':last_name', $this->data['last_name'], PDO::PARAM_STR);
        $stmt->bindValue(':email', $this->data['email'], PDO::PARAM_STR);
        $stmt->bindValue(':birth_date', $this->data['birth_date'], PDO::PARAM_STR);
        $stmt->bindValue(':id', $this->data['id'], PDO::PARAM_INT);
        $stmt->execute();
        echo "Updated ID: " . self::$dbc->lastInsertId() . PHP_EOL;
    } else {
        echo "running else statement\n";
        $stmt = self::$dbc->prepare("INSERT INTO " . static::$table . " (first_name, last_name, email, birth_date)
                                    VALUES (:first_name, :last_name, :email, cast(:birth_date as DATE));");
        // var_dump($stmt);
        $stmt->bindValue(':first_name', $this->data['first_name'], PDO::PARAM_STR);
        $stmt->bindValue(':last_name', $this->data['last_name'], PDO::PARAM_STR);
        $stmt->bindValue(':email', $this->data['email'], PDO::PARAM_STR);
        $stmt->bindValue(':birth_date', $this->data['birth_date'], PDO::PARAM_STR);
        $stmt->execute();
        $stmt = self::$dbc->prepare("SELECT id FROM " . static::$table . " WHERE email = :email;");
        $stmt->bindValue(":email", $this->data['email'], PDO::PARAM_STR);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->data['id'] = $data['id'];
    }
  }
  }
  //Find a recod based on an id
  public static function find($id)
  {
    //Get connected to DB
    self::dbConnect();
    $stmt = self::$dbc->prepare("SELECT * FROM" . static::$table . "WHERE id =:id");
    $stmt->bindValue(":id", $id, PDO::PARAM_INT);
    $stmt->execute();
    //Storing results in var result
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    //Sets attributes
    $instance = null;
    if ($result) {
        $instance = new static;
        $instance->data = $result;
    }
    return $instance;
  }

  public static function all() {
      self::dbConnect();
      // @TODO: Learning from the previous method, return all the matching records
      return self::$dbc->query("SELECT * FROM " . static::$table . ';')->fetchAll(PDO::FETCH_ASSOC);
  }
  public static function delete($id)
  {
      // Get connection to the database
      self::dbConnect();
      // @TODO: Create select statement using prepared statements
      $stmt = self::$dbc->prepare("DELETE FROM " . static::$table . " WHERE id= :id");
      $stmt->bindValue(":id", $id, PDO::PARAM_INT);
      $stmt->execute();
      // @TODO: Store the resultset in a variable named $result
  }
}
// $test = new Model;
// $test->dbConnect();
?>
