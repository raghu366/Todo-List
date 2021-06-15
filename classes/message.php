<?php

trait Message{

    public function set_messsage($message)
    {

        if(!empty($msg))
        {
            $this->display_message($message);
        }

    }


    public function display_message($msg)
    {
        echo $msg;
    }
}

