<?php

$connection = mysqli_connect("localhost","root","","equi");
        
        $result = array();
        $result['seances'] = array();
        $select= "SELECT * from seances";
        $response = mysqli_query($connection,$select);
        
        while($row = mysqli_fetch_array($response))
        {
        $index['seanceID']= $row['seanceID'];
        $index['monitorID']= $row['monitorID'];
        $index['clientID']= $row['clientID'];
        $index['startDate']= $row['startDate'];
        $index['durationMinut']= $row['durationMinut'];
        $index['comments']= $row['comments'];
        
        array_push($result['seances'], $index);
      
        }
        $result["success"]="1";

        echo json_encode($result);
        mysqli_close($connection);
        

?>