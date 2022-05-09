let PDFname = "";
let typeCheck = "application/pdf";
const icon = `<i class="fa-solid fa-file-pdf"></i>`;
let UploadPDF = '';
let UploadPDF_example = '';

let Page_count_all = 0;
// original pdf check
function CheckTypePDF(input) {

  const string = input.files[0].type;

   UploadPDF = input.files[0];

  //console.log(input.files[0]);

  if (string != typeCheck) {
    alert("โปปรดเลือกไฟล์ pdf เท่านั้น");
  } else {
    

    const type = input.files[0].name;
    PDFname = type;
    //console.log(type);
    $("#show_type").val(type);
    $("#type_icon").html(icon);

  }

}


// example  pdf check
function CheckTypePDF_Example(input) {
    
    const string = input.files[0].type;

    UploadPDF_example = input.files[0];
  
    if (string != typeCheck) {

      alert("โปปรดเลือกไฟล์ pdf เท่านั้น");

    } else {

      const type = input.files[0].name;
     // console.log(type);
      PDFname = type;
      $("#show_type_example").val(type);
      $("#type_icon_example").html(icon);

    }
  
  }

//on change to func check type pdf
$("#fileUploadPDF").change(function () {
  CheckTypePDF(this);
  chPage(this);
  onUpload(this.files);
});

//on change to func check type pdf example
$("#fileUploadPDF_example").change(function () {
    CheckTypePDF_Example(this);
    chPage(this);
  });

  


$(".dropzone-wrapper").on("dragover", function (e) {
  e.preventDefault();
  e.stopPropagation();
  $(this).addClass("dragover");
});

$(".dropzone-wrapper").on("dragleave", function (e) {
  e.preventDefault();
  e.stopPropagation();
  $(this).removeClass("dragover");
});

//check page of pdf
function chPage (input){

const reader = new FileReader();
const fileInfo = input.files[0];
if (fileInfo) {
     reader.readAsBinaryString(event.target.files[0]);
     reader.onloadend = () => {
         const Page_count = reader.result.match(/\/Type[\s]*\/Page[^s]/g).length;

         Page_count_all = Page_count
       
     }
}

}


