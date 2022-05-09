<?php
include '../include/header.php'
?>

<div class="card" style="width: 100%;">


  <div class="card-header">
    <div class="row">
      <div class="col" style="font-size:12px;" align="left">
        <i class="fa-solid fa-file-arrow-up fa-2xl"></i>&nbsp;&nbsp;<strong>อัพโหลดแบบฟอร์ม</strong>
      </div>
      <div class="col" align="right">
        <a href="../page/index.php">
          <button type="button" class="btn btn-labeled btn-light" style="font-size:13px;">
            <strong class="btn-label"><i class="fa-solid fa-circle-arrow-left"></i></strong>ย้อนกลับ</button>
        </a>
      </div>
    </div>
  </div>



  <div class="card-body" align="left">

    <form id="FormUploadForm" enctype="multipart/form-data" onsubmit="return false">

      <div class="form-group">
        <label for="Name_enties" style="font-size:13px;">ชื่อแบบฟอร์ม&nbsp;<span style="color:red">*</span></label>
        <input type="text" class="form-control" id="Name_enties" name="Name_enties">
      </div>
      <div class="form-group col-7">
        <label for="under_enties" style="font-size:13px;">อยู่ภายใต้หัวข้อ</label>
        <select class="form-control" id="under_enties" style="font-size:11px;">
          <option selected disabled value="">-- กรุณาเลือก--</option>
     
        </select>
      </div>
      <br>
      

      <label for="under_enties" style="font-size:13px;">ประเภทร่างประกาศ&nbsp;<span style="color:red">*</span></label>
      <div class="row">
        <div class="col-mt-2">
          <input type='radio' value='A' name='radio_section' id='radio1' />
          <label for='radio1' class="badge badge-pill badge-secondary" style="font-size: 15px;"><i class="fa-solid fa-scroll "></i>&nbsp;ประเภท ก</label>
        </div>
        <div class="col-mt-2">
          <input type='radio' value='B' name='radio_section' id='radio2' />
          <label for='radio2' class="badge badge-pill badge-primary" style="font-size: 15px;"><i class="fa-solid fa-scroll "></i>&nbsp;ประเภท ข</label>
        </div>
        <div class="col-mt-2">
          <input type='radio' value='C' name='radio_section' id='radio3' />
          <label for='radio3' class="badge badge-pill badge-warning" style="font-size: 15px;"><i class="fa-solid fa-scroll "></i>&nbsp;ประเภท ค</label>
        </div>
        <div class="col-mt-2">
          <input type='radio' value='D' name='radio_section' id='radio4' />
          <label for='radio4' class="badge badge-pill badge-info" style="font-size: 15px;"><i class="fa-solid fa-scroll "></i>&nbsp;ประเภท ง</label>
        </div>
        <div class="col-mt-2">
          <input type='radio' value='S' name='radio_section' id='radio5' />
          <label for='radio5' class="badge badge-pill badge-success" style="font-size: 15px;"><i class="fa-solid fa-scroll "></i>&nbsp;ประเภท ง พิเศษ</label>
        </div>
      </div>

      <br>

      <label for="under_enties" style="font-size:13px;">
        <i class="fa-solid fa-file-arrow-up fa-2xl"></i>&nbsp;&nbsp;<strong>อัพโหลดแบบฟอร์ม
      </label>
      <div class="container">
        <div class="row">
          <div class="col">

            <div class="mb-2">
              <!-- file upload -->

              <label class="control-label" style="font-size:13px;">ไฟล์เอกสาร</label>

              <div class="dropzone-wrapper">
                <div class="dropzone-desc">

                  <i class="fa-solid fa-cloud-arrow-up fa-2xl" id="icon_upload" style="display: block"></i><br>
                  <span style="font-size:13px;" id="text_upload" style="display: none">ลากและวางไฟล์ที่นี้เพื่อแนบ หรือ</span><button type="submit" class="btn btn-primary btn-sm"><i class="fa-solid fa-paperclip"></i>&nbsp;แนบเอกสาร</button>

                </div>
                <input type="file" name="fileUploadPDF" id="fileUploadPDF" class="dropzone" accept="application/pdf">
              </div>


            </div>
          </div>


          <div class="col">


            <div class="container mt-4">
              <div class="row">
                <div class="col-sm-10">
                  <div class="input-group input-group-sm mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="type_icon"></span>
                    </div>
                    <input type="text" id="show_type" class="form-control" aria-label="Small" readonly>
                  </div>
                </div>
                <div class="col-sm-1">
                  <button type="button" class="btn btn-light btn-sm" style="color:#15466e;" onclick="PreviewPDF();"><i class="fa-solid fa-eye"></i></button>
                </div>
                <div class="col-sm-1">
                  <button type="button" class="btn btn-light btn-sm" style="color:red;" onclick="ClearValInput();"><i class="fa-solid fa-trash-can"></i></button>
                </div>
              </div>
            </div>

      <!-- end upload  -->
          </div>
        </div>
      </div>

      <label for="under_enties" style="font-size:13px;">
        <i class="fa-solid fa-file-arrow-up fa-2xl"></i>&nbsp;&nbsp;<strong>อัพโหลดตัวอย่างแบบฟอร์ม
      </label>
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="mb-2">
              <!-- file upload example -->

              <label class="control-label" style="font-size:13px;">ไฟล์เอกสาร</label>

              <div class="dropzone-wrapper">
                <div class="dropzone-desc">

                  <i class="fa-solid fa-cloud-arrow-up fa-2xl" id="icon_upload_example" style="display: block"></i><br>
                  <span style="font-size:13px;" id="text_upload_example" style="display: none">ลากและวางไฟล์ที่นี้เพื่อแนบ หรือ</span><button type="submit" class="btn btn-primary btn-sm"><i class="fa-solid fa-paperclip"></i>&nbsp;แนบเอกสาร</button>

                </div>
                <input type="file" name="fileUploadPDF_example" id="fileUploadPDF_example" class="dropzone" accept="application/pdf">
              </div>

            </div>
          </div>
          <div class="col">
         
          <div class="container mt-4">
              <div class="row">
                <div class="col-sm-10">
                  <div class="input-group input-group-sm mb-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="type_icon_example"></span>
                    </div>
                    <input type="text" id="show_type_example" class="form-control" aria-label="Small" readonly>
                  </div>
                </div>
                <div class="col-sm-1">
                  <button type="button" class="btn btn-light btn-sm" style="color:#15466e;" onclick="PreviewPDF_EX();"><i class="fa-solid fa-eye"></i></button>
                </div>
                <div class="col-sm-1">
                  <button type="button" class="btn btn-light btn-sm" style="color:red;" onclick="ClearValInput_EX();"><i class="fa-solid fa-trash-can"></i></button>
                </div>
              </div>
      <!-- end upload example -->

          </div>
        </div>
      </div>
      <br>
      <div class="container">
        <div class="row">
          <div class="col">
            <button type="button" class="btn btn-danger" style="font-size:13px;" onclick="Cancel();" style="color:#15466e;">
              <i class="fa-solid fa-xmark"></i>&nbsp;ยกเลิก
            </button>
          </div>
          <div class="col" align="right">
            <button type="button" class="btn btn-success" style="font-size:13px;" onclick="SetData();" style="color:#15466e;">
              <i class="fa-solid fa-check"></i>&nbsp;ยืนยัน
            </button>
          </div>
        </div>


    </form>






  </div>
</div>
</div>

<?php
include '../include/footer.php'
?>
<p id="breadcrumb" style="display: none">อัพโหลดแบบฟอร์ม</p>
<script src="../js/add_breadcrumb.js"></script>
<script src="../js/button_group.js"></script>
<script src="../js/validate_PageUpload.js"></script>
<script src="../js/upload.js"></script>
<script src="../js/under_entries.js"></script>
<script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
