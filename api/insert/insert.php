<?php

require '../config/conn.php';

try {
            $res = new stdClass();

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {


              $d = date('His');
              $digits = 5;
              $id_u = 'P'.$d.rand(pow(10, $digits-1), pow(10, $digits)-1);
             

                $create_date = date('Y-m-d H:i:s');
                $pathPDF = '../../pathPDF/PDF/';
                $pathPDF_view = '../../pathPDF/PDF_view/';
                $date = date("Ymd_His");
                $num_random = (mt_rand());
                $type_file='.pdf';
                $NamePDF = $num_random.$date.$type_file;
                $NamePDF_example = $num_random.$date.'_view'.$type_file;
                // new value
                $pathPDF_insert = '../pathPDF/PDF/';
                $pathPDF_view_insert = '../pathPDF/PDF_view/';
                //for move in folder
                $path_copy =$pathPDF.$NamePDF;
                $path_copy_view = $pathPDF_view.$NamePDF_example;
                //for insert to database

                $path_insert =$pathPDF_insert.$NamePDF;
                $path_insert_view = $pathPDF_view_insert.$NamePDF_example;

                $pdf = strval($path_insert);
                $pdf_view = strval($path_insert_view);
                $status = 0;
                $name_form = strval($_POST['Name_enties']);
                $type_from = strval($_POST['declaration_type']);
                $id_under_entries = strval($_POST['under_enties']);
                $id_under = strval($id_u);
                $id_count_page = intval($_POST['page_count']); 


                $strYear = date("Y",strtotime($create_date))+543;
		        $strMonth= date("n",strtotime($create_date));
		        $strDay= date("j",strtotime($create_date));
		        $strHour= date("H",strtotime($create_date));
		        $strMinute= date("i",strtotime($create_date));
		        $strSeconds= date("s",strtotime($create_date));
		        $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
		        $strMonthThai=$strMonthCut[$strMonth];
                $year_sub = substr($strYear,2);

		        $newDate = $strDay." $strMonthThai "." $year_sub"." $strHour:$strMinute น.";


             



               if ($id_under_entries !== null) {

           
                $sql = $conn->query("SELECT * FROM `form` WHERE `id_under` = '".$id_under_entries."'");
                $row = $sql->rowCount();

                if ($row  > 0) {

                    $status = 1;
                    $sql = "UPDATE `form` SET `status`= 1 WHERE `id_under` = '".$id_under_entries."'";
                    $sql= $conn->prepare($sql);

                    if ($sql->execute()) {

                        $sql = "INSERT INTO `under_form`(`name_form`, `type_form`, `id_under`, `pdf`, `pdf_view`,`page_count`, `create`) 
                                VALUES (?,?,?,?,?,?,?)";
                        $conn->prepare($sql)->execute([$name_form,$type_from,$id_under_entries,$pdf,$pdf_view ,$id_count_page,$newDate]);

                        move_uploaded_file($_FILES['PDF']['tmp_name'],$path_copy); 
                        move_uploaded_file($_FILES['PDF_views']['tmp_name'],$path_copy_view); 

                        $res->status = 200;
                        $res->message = 'Ok';

                    }else{

                        $res->status = 400;
                        $res->message = 'Bad Request';
                        http_response_code(400);
                        exit(0);
        


                    }
                    

                   

                }else{

                    $sql = "INSERT INTO `form`(`name_form`,`type_form`,`id_under`,`status`,`pdf`,`pdf_view`,`page_count`,`create`) 
                    VALUES ('".$name_form."','".$type_from."','". $id_under."','".$status."','".$pdf."','".$pdf_view."','".$id_count_page."','".$newDate."')";
                    $conn->prepare($sql)->execute();

                    move_uploaded_file($_FILES['PDF']['tmp_name'],$path_copy); 
                    move_uploaded_file($_FILES['PDF_views']['tmp_name'],$path_copy_view); 

                    $res->status = 200;
                    $res->message = 'Ok';


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