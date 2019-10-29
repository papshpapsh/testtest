<?php
class DataBaseWork {

    public $connection;
    public $error = array();

    protected $host, $user, $password, $database;
    
    public function __construct(){
       try{
            $this->host = "localhost";
            $this->user = "root";
            $this->password = "root";
            $this->database = "testEpam";

            $this->connectToDatabase();

        }catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
     public function __destruct(){
            $this->host = NULL;
            $this->user = NULL;
            $this->password = NULL;
            $this->database = NULL;
            $this->connection = NULL;
    }
    public function connectToDatabase(){
           $this->connection =  new PDO("mysql:host=$this->host; dbname=$this->database", $this->user, $this->password);
           return $this->connection;
    }
         
    public function insert($id, $area){
         try{

           $sql = "INSERT INTO Action ( id, area, timestamp) VALUES (" . $id . ",'". $area ."', UNIX_TIMESTAMP() )";
       
           $this->connection->exec($sql);
         
         }catch(PDOException $e)
         {
            echo $sql . "<br>" . $e->getMessage();
         }
    
    }
    
    public function select($timestamp, $timeshift){
  

          $endtime = $timestamp + $timeshift;
         
         try {
           $sql = "SELECT * FROM Action WHERE timestamp BETWEEN " . $timestamp ." and " . $endtime;
           // echo $sql;
           $result = $this->connection->prepare($sql);
           $result->execute();
    
         }catch(PDOException $e)
         {
            echo $sql . "<br>" . $e->getMessage();
         }
         return $result;
         
         }
         

} 
?>
