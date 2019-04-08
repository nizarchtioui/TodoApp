<?php


Class Config
{
    function RunQuery($query,$parmas)
    {
        $config_json = file_get_contents('C:\Users\nizar\Music\phpProject\TodoApp\config.json');
        $obj = json_decode($config_json);
        $host = (string)$obj->database->host;
        $port = (string)$obj->database->port;
        $dbname = (string)$obj->database->dbname;
        $user = (string)$obj->database->user;
        $pass = (string)$obj->database->password;
        $con_string = "host=" . $host . " port=" . $port . " dbname=" . $dbname . " user=" . $user . " password=" . $pass;
        $con = pg_connect($con_string) or die('Could not connect: ' . pg_last_error());
        if ($con) {

            if ($parmas.ob_get_length()==0){
                echo "sucess";
                $result=  pg_query($con,$query);

            }else{
                echo "sucess_param\n";
                echo $parmas;
                $result =pg_query_params($con,$query,(array)$parmas);
                echo $result;
            }


            if (!$result) {
                echo "Une erreur s'est produite.\n";
                exit;
            }

            while ($row = pg_fetch_row($result)) {
                return $row ;
            }
            pg_close($con);
        }

    }
}

