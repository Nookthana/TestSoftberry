<?php

require '../config/conn.php';

try {
            $res = new stdClass();

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {



              $sql = $conn->query("SELECT `name_form`,`id_under` FROM `form` ");
              $row = $sql->rowCount();


              if ($row > 0) {

                while ($data = $sql->fetchAll(PDO::FETCH_ASSOC)) {

                extract($data);
          
                $res->status = 200;
                $res->message = "ok";
                $res->data = $data;

              }
            }

             
            }else{

                $res->status = 400;
                $res->message = 'Bad Request';
                http_response_code(400);
                exit(0);

            }
            echo json_encode($res);
            http_response_code(200);
            exit(0);


} catch (PDOException $e) {

    echo "Error: " . $e->getMessage();
    
}









?>