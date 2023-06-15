var js_token= $('meta[name="csrf-token"]').attr('content');
ClassicEditor
    .create( document.querySelector( '#long_description' ),{
        ckfinder:{
            uploadUrl:'/ck-editor/file-upload?_token='+js_token
        }
    } )
    .catch( error => {
        // console.error( error );
    } );

// get locaiton
getLocation();


function getLocation() {
if (navigator.geolocation) {
navigator.geolocation.getCurrentPosition(showPosition, showError);
} else {
popup('error' , 'OOPS..!' , "Geolocation is not supported by this browser.");
}
}

function showPosition(position) {
$("#long").val(position.coords.longitude);
// console.log(position.coords.longitude);
// console.log(position.coords.latitude);
$("#lati").val(position.coords.latitude);
}

function showError(error) {
$("button[type=submit]").attr("disabled" , "disabled")
$("button[type=submit]").text("Please Enable Location")
switch(error.code) {
case error.PERMISSION_DENIED:
popup('warning' , 'Warning' , "User denied the request for Geolocation.");
 break;
case error.POSITION_UNAVAILABLE:
 popup('warning' , 'Warning' ,"Location information is unavailable.");
 break;
case error.TIMEOUT:
popup('warning' , 'Warning' ,"The request to get user location timed out.");
 break;
case error.UNKNOWN_ERROR:
 popup('warning' , 'Warning' ,"An unknown error occurred.");
 break;
}
}

function sidebarSelectMaintain(menu_type,select_option){
 if(menu_type !="")
 {
  $('.'+menu_type).addClass('open');
 }
 $('.'+select_option).addClass('active');
}

function popup(type,title,msg)
{
    Swal.fire({
       title: title,
       html: msg,
       type: type,
       confirmButtonClass: "btn btn-primary",
       buttonsStyling: !1
    });
}
function popup_reload(type,title,msg)
{
    Swal.fire({
       title: title,
       html: msg,
       type: type,
       confirmButtonClass: "btn btn-primary",
       buttonsStyling: !1
    }).then((result) => {
      location.reload();
    });
}
function popup_redirect(type,title,msg,url)
{
    Swal.fire({
       title: title,
       html: msg,
       type: type,
       confirmButtonClass: "btn btn-primary",
       buttonsStyling: !1
    }).then((result) => {
      location.href=url;
    });
}

function Toast_Slide(msg) {
  toastr.error(msg, "Message", {
    showMethod:"slideDown",
    hideMethod:"slideUp",
    positionClass: "toast-bottom-right",
    timeOut:2e3,
    closeButton:!0

  })
}

function Logout(token,url)
{
      Swal.fire({
        title: "Are you sure?",
        text: "Logout Your Account",
        type: "warning",
        showCancelButton: !0,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ok",
        confirmButtonClass: "btn btn-primary m-2",
        cancelButtonClass: "btn btn-danger m-2",
        buttonsStyling: !1
      }).then((function (t) {
         if(t.value)
         {
              $.ajax({
                url : url,
                type : "POST",
                data:{
                  _token : token
                },
                dataType : "json",
                beforeSend : function(){
                    $('#logout').html('Please wait...');
                    $('#logout').attr('disabled',true);
                },
                success : function (data)
                {
                    if(data.status==true)
                      {
                        location.href=''+data.url+'';
                      }
                }

              });
         }
      }))

}

// Captch Code
function RefreshCaptch(url) {
    $.ajax({
        type:'GET',
        url:url,
        beforeSend:function(){
            $("#load").html('<i class="fa fa-solid fa-spinner fa-spin" style="font-size: 14px;"></i>');
        },
        success:function(data){
            $("#captcha_code").html(data.captcha);
            $("#load").html('<i class="fa fa-solid fa-rotate-right " style="font-size: 14px;"></i>');

        }
    },"json");
}


// Data send request
function requestSend(Form,url)
{
    // var registrationForm = $('#Value_Store_Form');
    // console.log(Form);
    if(Form.length){
        Form.validate({

          errorPlacement: function(error, element)
          {
            if (element.is(":radio"))
            {
                error.appendTo(element.parents('.otp'));
                error.appendTo(element.parents('.login'));
            }
            else if(element.is(":checkbox")){
                error.appendTo(element.parents('.checkbox'));
            }
            else
            {
                error.insertAfter( element );
            }

           },
           submitHandler: function(form,event) {
             event.preventDefault();
            //
                   $.ajax({
                    url:url,
                    type:'post',
                    data: new FormData(form),
                    processData:false,
                    contentType:false,
                    dataType:"json",
                    beforeSend : function(){
                       $('#submit').attr('disabled',true);
                       $('#submit').html('<i class="la la-spinner spinner"></i>&nbsp;Please Wait..');
                    },
                    success:function(data){
                        // console.log(data.message);
                        if(data.status==true && data.redirect==true && data.reload==false)
                        {
                          popup_redirect('success','Congratulation',data.message,data.url);

                        }
                        else if(data.status==true && data.redirect==false && data.reload==false)
                        {
                          popup('success','Congratulation',data.message);
                          Form[0].reset();

                        }
                        else if(data.status==true && data.redirect==false && data.reload==true)
                        {
                          popup_reload('success','Congratulation',data.message);
                          Form[0].reset();
                        }
                        else if(data.status==false && data.redirect==false && data.reload==true)
                        {
                          popup_reload('warning','Warning',data.message);
                        }
                        else if(data.valid == false && data.reload == false)
                        {
                          Toast_Slide(data.message);
                          RefreshCaptch('/refresh-raptcha');
                        }
                        else if(data.valid == false && data.reload == true)
                        {
                          popup_reload('warning','Warning',data.message);
                        }
                        else{
                          popup('warning','Warning',data.message);
                          RefreshCaptch('/refresh-raptcha');
                        }

                        $('#submit').attr('disabled',false);
                        $('#submit').html('Submit');
                    }
                    // ,
                    // error:function(){
                    //   popup_reload('warning','Warning','Server Not Responed');
                    // }
               });

              //
           }
        });
    }
}

// function Delete(id,token,url)
// {
$(document).on('click','.Delete_Button',function(e){

    let token = $(this).data('token');
    let url = $(this).data('url');
    let id = $(this).data('id');

      Swal.fire({
        title: "Are you sure?",
        text: "Delete Record",
        type: "warning",
        showCancelButton: !0,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ok",
        confirmButtonClass: "btn btn-primary m-2",
        cancelButtonClass: "btn btn-danger m-2",
        buttonsStyling: !1
      }).then((function (t) {
         if(t.value)
         {
              $.ajax({
                url : url,
                type : "POST",
                data:{
                  _token : token,
                  id:id
                },
                dataType : "json",
                beforeSend : function(){
                    $(this).html('Please wait...');
                    $(this).attr('disabled',true);
                },
                success : function (data)
                {
                     if(data.status==true && data.redirect==true && data.reload==false)
                        {
                          popup_redirect('success','Congratulation',data.message,data.url);
                        }
                        else if(data.status==true && data.redirect==false && data.reload==false)
                        {
                          popup('success','Congratulation',data.message);
                          $(this).attr('disabled',false);
                          $(this).html('Delete');
                          table.draw();
                        }
                        else if(data.status==true && data.redirect==false && data.reload==true)
                        {
                          popup_reload('success','Congratulation',data.message);
                        }
                        else if(data.status==false && data.redirect==false && data.reload==true)
                        {
                          popup_reload('warning','Warning',data.message);
                        }
                        else{
                          popup('warning','Warning',data.message);
                          $(this).attr('disabled',false);
                          $(this).html('Delete');

                        }
                },
                error:function(){
                  popup_reload('warning','Warning','Server Not Responed');
                }

              });
         }
      }))

});

$(document).on('change','.Status_Update',function(e){

    let token = $(this).data('token');
    let url = $(this).data('url');
    let id = $(this).data('id');
    let status = $(this).val();
    if(status !="")
    {
      Swal.fire({
        title: "Are you sure?",
        text: "Update Status",
        type: "warning",
        showCancelButton: !0,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ok",
        confirmButtonClass: "btn btn-primary m-2",
        cancelButtonClass: "btn btn-danger m-2",
        buttonsStyling: !1
      }).then((function (t) {
         if(t.value)
         {
              $.ajax({
                url : url,
                type : "POST",
                data:{
                  _token : token,
                  id:id,
                  status:status
                },
                dataType : "json",
                beforeSend : function(){
                    $(this).html('Please wait...');
                    $(this).attr('disabled',true);
                },
                success : function (data)
                {
                     if(data.status==true && data.redirect==true && data.reload==false)
                        {
                          popup_redirect('success','Congratulation',data.message,data.url);
                        }
                        else if(data.status==true && data.redirect==false && data.reload==false)
                        {
                          popup('success','Congratulation',data.message);
                          $(this).attr('disabled',false);
                          $(this).html('Delete');
                        }
                        else if(data.status==true && data.redirect==false && data.reload==true)
                        {
                          popup_reload('success','Congratulation',data.message);
                        }
                        else if(data.status==false && data.redirect==false && data.reload==true)
                        {
                          popup_reload('warning','Warning',data.message);
                        }
                        else{
                          popup('warning','Warning',data.message);
                          $(this).attr('disabled',false);
                          $(this).html('Delete');
                        }
                },
                error:function(){
                      popup_reload('warning','Warning','Server Not Responed');
                    }

              });
         }
      }))

    }

});

function loadCategory(id,token,url){
  $.ajax({
    url : url,
    type : "POST",
    data:{
      _token : token,
      id:id
    },
    beforeSend : function(){
      $('#load_category').html('loading...');
    },
    success : function (res)
    {
      $('#category').html(res);
    }
  });
}

function loadSubCategory(id,token,url){
  $.ajax({
    url : url,
    type : "POST",
    data:{
      _token : token,
      id:id
    },
    beforeSend : function(){
      $('#load_sub_category').html('loading...');
    },
    success : function (res)
    {
      $('#sub_category').html(res);
    }
  });
}


