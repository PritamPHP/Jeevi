<?php 
if(isset($_GET['delete'])&&is_numeric($_GET['delete']))
{
    $id = ($_GET['delete']);
    if($id != '.' || $id != '..')
    {
      //  $extension = '.jpg';
        if(unlink('img/'.$id.$extension))
        {
            $result =  $db_handle->runQuery("DELETE FROM banner WHERE id=$id"); 
        }
    }
}?>