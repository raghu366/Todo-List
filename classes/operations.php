
<?php

class Operations extends Dbconfig
{

    public function Store_Record($a,$b)
    {

        $task = $this->validateString($a);
        $priority = $this->validateString($b);
        $auction = "pending";

        $this->insert_record($task,$priority,$auction);

    }


    function insert_record($a,$b,$c)
    {

        $query = "insert into task (task,priority,action) values (?,?,?)";
        $result = $this->con->prepare($query);
        $result->bind_param('sss',$a,$b,$c);
        $result->execute();
        return $result;

    }


    function insert_Updaterecord($a,$b)
    {

        $query = "update task set action=? where id=?";
        $result = $this->con->prepare($query);
        $result->bind_param('si',$a,$b);
        $result->execute();
        return $result;

    }


    public function view_record()
    {
        $query = "select * from task";
        $result = $this->con->prepare($query);
        $result->execute();
        $result->store_result();
        $result->bind_result($id,$task,$priority,$action);

        while($result->fetch())
        {
            ?>(<?php echo $id;?>) <?php
            echo $task;?><?php
            ?> (<?php echo $priority." Priority";?>)<?php
            echo "\n";
        }
    }


    public function Delete_Record($id)
    {

         $query = "Delete from task where id = ?";
         $result = $this->con->prepare($query);
         $result->bind_param('i',$id);
         $result->execute();
         return $result;

    }

}



?>
