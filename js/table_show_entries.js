
let Row = 0;
let constRow = 0;
let dataSet = [];
let checkStatusRow = [];

axios.post('../api/form_all/form_all.php',{ withCredentials: true })
.then(res => {
  if (res.data.status == 200) {

    const Data = res.data.data;

    //console.log(Data);

      Row = Data.length;

      for (let i = 0; i < Row; i++) {

        constRow+=1;
        checkStatusRow.push(parseInt((Data[i].status)));
        dataSet.push([constRow,Data[i].name_form,
                        `<a href="${Data[i].pdf}" download = "${Data[i].pdf}" class="text-danger"><span class="badge bg-danger"  style="font-size: 15px;"><i class="fa-solid fa-file-pdf "></i></span></a>`
                        ,`<embed src="${Data[i].pdf_view}" width="40px" height="40px" scrolling="no"/>`
                        ,Data[i].page_count
                        ,'<span style="color:#15466e"><i class="fa-solid fa-clock"></i></span>  '+Data[i].create]);


       
        
      }

      
     // console.log(checkStatusRow);


    
  }
})
.catch(err => {
  console.error(err); 
})






$(document).ready(function() {
  
  /* Formatting function for row details - modify as you need */
function format () {
  // `d` is the original data object for the row
  return '<table class="responsive " style="width:100%">'+
          '<tr>'+
              '<td>ทดสอบ</td>'+
              '<td>ทดสอบ</td>'+
              '<td>ทดสอบ</td>'+
              '<td>ทดสอบ</td>'+
              '<td>ทดสอบ</td>'+
              '<td>ทดสอบ</td>'+
          '</tr>'+
          '</table>';
}

$(document).ready(function() {


  var table = $('#example').DataTable( {
    
      data: dataSet,
      iDisplayLength: 10,
      destroy: true,
      bInfo : false,
      responsive:true,
      searchHighlight: true,
      columnDefs: [{ className: "dt-center", targets: "_all" }],
      
      "columns": [  {

          "className":      'dt-control',
          "orderable":      false,
           title: "ลำดับ", 
        },
          {  "orderable": false, title: "ชื่อฟอร์ม" },
          {  "orderable": false, title: "รูปแบบ" },
          {  "orderable": false, title: "ตัวอย่าง" },
          {  "orderable": false, title: "จำนวนหน้า" },
          {  "orderable": false, title: "วัน/เวลา ที่ลง" }

      
      ]


      
  } );


    // Add event listener for opening and closing details
    $('#example tbody').on('click', 'td.dt-control', function () {
      var tr = $(this).closest('tr');
      var row = table.row( tr );

      if ( row.child.isShown() ) {
          // This row is already open - close it
          row.child.hide();
          tr.removeClass('shown');
      }
      else {
          // Open this row
          row.child( format(row.data()) ).show();
          tr.addClass('shown');
      }

   
   // input box
  var dataTable = $('#example').dataTable();
  $("#searchbox").keyup(function() {
      dataTable.fnFilter(this.value);
  });   





  } );


} );



});







