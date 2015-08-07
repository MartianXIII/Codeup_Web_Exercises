<?php
class Log
{
    protected $handle;// add a new property to this class
    protected $filename;
    public $date;

    public function __construct($prefix = 'log')// open file and wait
    {
        $this->filename = "log/{$prefix}-" . date('Y-m-d') . ".log";
        $this->handle = fopen($this->filename, 'a');

      //Take in a parameter call $prefix if nothing is passed default to log
      //$prefix->date = $logDateTime;
    }

    public function logMessage($logLevel, $message)// add a constructor to my log class
    {
        $logDayTime = date("Y-m-d h:i:s a e");
        $stringToWrite = "{$logDayTime} [{$logLevel}] {$message}";
        fwrite($this->handle, PHP_EOL .  $stringToWrite);
    }

    public function info($message)
    {
        $logLevel = 'INFO';
        return $this->logMessage($logLevel, $message);//Update $logMessage to use Handle no longer open and closes its own
    }

    public function error($message)
    {
        /*$logLevel = 'ERROR';*/
        return $this->logMessage('ERROR', $message);
    }

    public function __destruct()
    {
      fclose($this->handle);
      //close $handle when class is destroyed
    }
}
?>
