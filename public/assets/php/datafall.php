<?php

    include("conf.php");
    $mytype=array("pmid","name","description","url","urlstatus","country","title","abstract","year","month","date","journalAbbreviation");
/*
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:POST');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
*/
        $type = $_POST["type"];
        $para = $_POST["para"];
        $exact=$_POST["blur"];
        if(isset($type) and isset($para) and isset($exact)){
            if(in_array($type, $mytype)){
                if(in_array($type, $mytype)) {
                    $key = array_search($type, $mytype);
                    if ($exact == "true") {
                        $query = "select * from dato_new where " . $mytype[$key] . " = ?";
                    } else {
                        $para = "%" . ($para). "%";
                        $query = "select * from dato_new where " . $mytype[$key] . " like ?";
					}


                    try {
                        $dbh = New PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

//              $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $statement = $dbh->prepare($query);
                        $statement->execute(array($para));
                        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
                        $json = json_encode($results);
                        echo $json;

                    } catch (PDOException $e) {
                        die ("Error!: " . $e->getMessage() . "<br/>");
                    }


                }


            }
        }
        else {
            echo "wrong sql!";
        }




?>

