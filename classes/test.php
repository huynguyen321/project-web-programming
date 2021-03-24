<?php
require 'DBproject.php';
class Test extends DBproject
{
    public function getSmartphone()
    {
        $sql = 'SELECT * FROM Brand';
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch()){
            echo $row['Brand'].'<br>';
        }
    }
}
?>