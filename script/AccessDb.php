<?php
class SqlTableAccess {

    private $conn;
    public $servername;
    public $username;
    public $password;
    public $dbName;
    public $table;
    public $tableItems;
    

    function __construct($servername, $username, $password, $dbName, $table){
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->dbName = $dbName;
        $this->table = $table;
        $this->tableItems = $tableItems;    
    }

    private function connectToSql(){
        try {
            $conn = new mysqli($this->servername,$this->username,$this->password,$this->dbName);
        } catch (\Throwable $th) {
            throw die("Connection failed: " . $conn->connect_error);
            $conn->close();
        }
        
    }

    public function AddItem($values){
        $sql = "INSERT INTO ";
        $sql += $table;
        if(count($tableItems) == count($values)){
            $sql += "(" . implode(",", $tableItems) . ") ";
            $sql += "VALUES (";
            for ($i=0; $i < count($values); $i++) { 
                $sql += "'" . $values[i] . "'" . ",";
            }
            $sql 
        }else{
            throw "table Items and values are not the same count";
        }
    }
}
?>