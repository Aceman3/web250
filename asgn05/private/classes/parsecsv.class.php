<?php

class ParseCSV {

  // Used as a default delimiter for parsing the CSV file. It defines the character separating the columns in the CSV.
  public static $delimiter = ',';

  private $filename;
  private $header;
  private $data=[];
  private $row_count = 0;

  public function __construct($filename='') {
    if($filename != '') {
      $this->file($filename);
    }
  }

  // Used to set the filename for the CSV to be parsed.
  // Ensures that the file exists and is readable before setting the filename property.
  public function file($filename) {
    if(!file_exists($filename)) {
      echo "File does not exist.";
      return false;
    } elseif(!is_readable($filename)) {
      echo "File is not readable.";
      return false;
    }
    $this->filename = $filename;
    return true;
  }

  // Used to parse the CSV file and populate the data array with the CSV rows.
  // It resets current data, then reads each row of the CSV, using the header row as keys for the data arrays.
  public function parse() {
    if(!isset($this->filename)) {
      echo "File not set.";
      return false;
    }

    $this->reset();

    $file = fopen($this->filename, 'r');
    while(!feof($file)) {
      $row = fgetcsv($file, 0, self::$delimiter);
      if($row == [NULL] || $row === FALSE) { continue; }
      if(!$this->header) {
        $this->header = $row;
      } else {
        $this->data[] = array_combine($this->header, $row);
        $this->row_count++;
      }
    }
    fclose($file);
    return $this->data;
  }

  // Used to fetch the last parsed results from the CSV file.
  public function last_results() {
    return $this->data;
  }

  // Provides a count of the rows parsed from the CSV file, excluding the header.
  public function row_count() {
    return $this->row_count;
  }

  // Used internally to reset the header, data array, and row count before parsing a new CSV.
  private function reset() {
    $this->header = NULL;
    $this->data = [];
    $this->row_count = 0;
  }
}


?>
