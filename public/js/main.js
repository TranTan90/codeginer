function cms_comback($url)
 {
     window.location.assign($url);
}

function cms_vsell_import() {
            $.ajax({
                url: 'mes/cms_vsell_import/',
                data: null,
                type: 'POST',
                async: true,
                success: function (data) {
                    $('.messys').html(data);
                }
            });
     }

 function  cms_save_import()
 {    

    var $date_input= $('#mesdatetime').val();
    var $sys_input=$('#messysname').val();
    var $errocode_input = $('#meserrocode').val();
    var $nameerro_input = $('#mesnameerror').val();
    var $classify_input = $('#mesclassify').val();
    var $repair_input   = $('#mesrepairerror').val();
    var $cause_input    = $('#mescausesys').val();   

  if($nameerro_input.length == 0)
  {
     alert('Vui lòng Nhập Tên Lỗi' );
     echo
  }

 var  $data ={
        'data':{
                'id':'',
                'mes_date':$date_input,
                'hana_sys':$sys_input,
                'mes_errorcode': $errocode_input,
                'mes_nameerror':$nameerro_input,
                'mes_cause':$cause_input,
                'mes_repair':$repair_input,
                'mes_classify':$classify_input
             }
                };



     $.ajax({
        type:'POST',
        url: 'mes/cms_save_import/',
        data: $data,
        async: true,
        success: function(data){
            alert('Success');
        } 
     });
     
 }
