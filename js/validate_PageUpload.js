function Cancel() {
  const FormUpload = document.getElementById("FormUploadForm");
  FormUpload.reset();
}
//func set Data to sql
function SetData() {
  //validate form value before SetData
  if ($("#Name_enties").val().length <= 0) {

    alert("กรุณาระบุชื่อแบบฟอร์ม");

  } else if (!$("input[name='radio_section']:checked").val()) {

    alert("กรุณาระเลือกประเภทร่างประกาศ");

  } else if ($("#fileUploadPDF").val().length <= 0) {

    alert("กรุณาแนบแบบฟอร์ม");

  } else if ($("#fileUploadPDF_example").val().length <= 0) {

    alert("กรุณาแนบแบบฟอร์มตัวอย่าง");

  } else {




    let formData = new FormData();
    //add three variable to form
    formData.append('PDF',UploadPDF);
    formData.append('PDF_views',UploadPDF_example);
    formData.append('page_count',Page_count_all);
    formData.append('Name_enties',$('#Name_enties').val());
    formData.append('under_enties',$("#under_enties").val());
    formData.append('declaration_type',$("input[name='radio_section']:checked").val());




   

                  axios.post('../api/insert/insert.php',formData, {
                    headers: {
                      "Content-Type": "multipart/form-data",
                    }
                  })
                    .then(res => {
                        if (res.data.status == 200) {

                          alert('บันทึกข้อมูลสำเร็จ');
                          location.reload();
                          
                        }
                    })
                    .catch(err => {
                        console.error(err); 
                    })
  }
}



function ClearValInput() {
  $("#type_icon").remove();
  $("#show_type").val("");
}

function ClearValInput_EX() {
  $("#type_icon_example").remove();
  $("#show_type_example").val("");
}

function PreviewPDF() {
  window.open(PDFname, "_blank");

  //alert(PDFname);
}
