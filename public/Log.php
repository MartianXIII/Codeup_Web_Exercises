<?php
class Log
{

    public $handle;// add a new property to this class
    public $filename;
    public $date;

    public function __construct()// open file and wait
    {
      //Take in a parameter call $prefix if nothing is passed default to log
      $prefix->date = $logDateTime;
    }
    public function logMessage($logLevel, $message)// add a constructor to my log class
    {
        $logDayTime = date("Y-m-d h:i:s a e");
        $handle = fopen($this->filename, 'a');
        $stringToWrite = "{$logDayTime} [{$logLevel}] {$message}" . PHP_EOL;
        if (file_exists($this->filename)){
            file_put_contents($this->filename, $stringToWrite, FILE_APPEND);
        } else {
            file_put_contents($this->filename, $stringToWrite);
        }
        fclose($handle); // add a destructor to the close $handle
    }
    public function info($message)
    {
        $logLevel = 'INFO';
        return $this->logMessage('INFO', $message);//Update $logMessage to use Handle no longer open and closes its own
    }
    public function error($message)
    {
        $logLevel = 'ERROR';
        return $this->logMessage('ERROR', $message);
    }

    public function __destruct()
    {
      //close $handle when class is destroyed
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LOG LOG Log</title>
  </head>
  <body>
    <h1>LOG</h1>
  </body>
</html>
