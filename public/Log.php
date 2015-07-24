<?php
class Log
{
    public $filename;
    public $date;
    public function logMessage($logLevel, $message)
    {
        $logDayTime = date("Y-m-d h:i:s a e");
        $handle = fopen($this->filename, 'a');
        $stringToWrite = "{$logDayTime} [{$logLevel}] {$message}" . PHP_EOL;
        if (file_exists($this->filename)){
            file_put_contents($this->filename, $stringToWrite, FILE_APPEND);
        } else {
            file_put_contents($this->filename, $stringToWrite);
        }
        fclose($handle);
    }
    public function info($message)
    {
        $logLevel = 'INFO';
        return $this->logMessage('INFO', $message);
    }
    public function error($message)
    {
        $logLevel = 'ERROR';
        return $this->logMessage('ERROR', $message);
    }
}
?>