<?php

    include("conf.php");

/*
    header('content-type:application:json;charset=utf8');
    header('Access-Control-Allow-Origin:*');
    header('Access-Control-Allow-Methods:POST');
    header('Access-Control-Allow-Headers:x-requested-with,content-type');
*/

//     $query="select pmid,name,description,url,urlstatus,country from dato_all where name like '%protein%'";

     $para=$_POST["para"];
//     $para="((21617028[pmid]) AND pp[name]) OR ppp[name]";
if(isset($para)){
    $query=getquery($para);


    try {
        $dbh=New PDO($dsn,$user,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

//         $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $statement=$dbh->prepare($query);

        $statement->execute();
//         $results["draw"]=$_REQUEST;
/*
        $results["draw"]=1;
        $results["recordsTotal"]=$statement->rowCount();
        $results["recordsFiltered"]=$results["recordsTotal"];
*/
        $results=$statement->fetchAll(PDO::FETCH_ASSOC);

        $json=json_encode($results);
        echo $json;

    }
    catch (PDOException $e) {
        die ("Error!: ".$e->getMessage()."<br/>");
    }

}
else{
    echo "wrong query!";
}
     function getquery($teststring){
         include("conf.php");
         $dbh=New PDO($dsn,$user,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
         $teststring=str_replace('(','',$teststring);
         $teststring=str_replace(')','',$teststring);
         $teststring=str_replace(']','',$teststring);
         #$teststring=str_replace('[','%##%@',$teststring);
         $newarr = explode(" ",$teststring);
         $count= sizeof($newarr);
         $query='select * from dato_new where ';
         for($i=0;$i<$count;$i++){
             if($i%2==0){
                 $keys=explode("[",$newarr[$i]);
                 $query=$query." ". $keys[1].' like "%'.  $keys[0].'%"';
             }
             else {
                 $query=$query." ". $newarr[$i]." ";
             }


         }
         //echo $query;
         return $query;
     }

?>
