<?php
include '../include/header.php'
?>

<div class="card" style="width: 100%;">


    <div class="card-header">

        <div class="row">
            <div class="col col-lg-2" style="font-size:12px;" align="left">
                <i class="fa-solid fa-file-lines fa-2xl"></i>&nbsp;&nbsp;<strong>แบบฟอร์มขอออกประกาศ</strong>
            </div>
            <div class="col col-lg-2">
                <a href="../page/upload_form.php"><button class="btn btn-success btn-sm" style="font-size:12px;"><i class="fa-solid fa-circle-plus"></i>&nbsp;<strong>สร้างแบบฟอร์มใหม่</strong></button></a>
            </div>

            <div class="col col-lg-6" align="right">

                <div class="input-group input-group-sm mb-3">                  
                    <input type="text" class="form-control" id="searchbox" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                    <div class="input-group-prepend">
                        <span class="btn btn-primary" id="inputGroup-sizing-sm"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;ค้นหา</span>
                    </div>
                </div>
                
            </div>


            <div class="col col-lg-2" align="left">
                <a href="#"><button class="btn btn-primary btn-sm" style="font-size:12px;"><strong>Advance Search</strong></button></a>
            </div>
        </div>
    </div>

    <br>


    <table id="example" class="table is-striped responsive nowrap" style="width:100%"></table><br><br>








</div>
<?php
include '../include/footer.php'
?>
<p id="breadcrumb" style="display: none">ขอออกปประกาศ</p>
<script src="../js/add_breadcrumb.js"></script>
<script src="../js/table_show_entries.js"></script>

<!--datable link-->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../css//dataTable.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
<!--datable response-->

<script type="text/javascript" language="javascript" src="../js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>