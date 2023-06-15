///////////////////////// IMAGE CHECK ///////////////////////////////////////
// Check Valid Image
// Multiple Image Upload
$(document).on("change",".multiple_file", function(e) {
  var name = $(this).attr('id');
  var files = e.target.files,
    filesLength = files.length;
  for (var i = 0; i < filesLength; i++) {
    var f = files[i];
    console.log(f);
    if(fileExtValidate(this,name)) {
      if(fileSizeValidate(this,name)) {
      
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove\">Remove image</span>" +
            "</span>").insertAfter("#"+name);
          $(".remove").click(function(){
            $(this).parent(".pip").remove();
            $('#'+name).val("");
          });
          

        });
        fileReader.readAsDataURL(f);
      }   
    } 
  }
});

// Single Image
     //$('#success').hide();

    $(".file").change(function (e) {
       var name = $(this).attr('id');
       alert(name);
        if(fileExtValidate(this,name)) {
           if(fileSizeValidate(this,name)) {
            showImg(this,name);
           }   
        }    
      });
    // File extension validation, Add more extension you want to allow
    var validExt = ".jpg , .jpeg , .png";
    function fileExtValidate(fdata,name) {
     var filePath = fdata.value;
     var getFileExt = filePath.substring(filePath.lastIndexOf('.') + 1).toLowerCase();
     var pos = validExt.indexOf(getFileExt);
     if(pos < 0) {
      toastr.error("This file is not allowed, please upload valid file.", "Message", {
        showMethod:"slideDown",
        hideMethod:"slideUp",
        positionClass: "toast-bottom-right",
        timeOut:2e3,
        closeButton:!0
       
      });
      $("#"+name).val('');
      
      //$('#success').hide();
      //alert("This file is not allowed, please upload valid file.");
                
      return false;
      } else {
        return true;
      }
    }
    // file size validation
    function fileSizeValidate(file,name) {
        var FileSize = file.files[0].size/1024/1024;  //1024/1024; // in MB
        if (FileSize >20) {  /// 15 MB CHECK ALL FILE
             
            $("#"+name).val('');
            toastr.warning("File size exceeds 3 MB"+FileSize, "Message", {
              showMethod:"slideDown",
              hideMethod:"slideUp",
              positionClass: "toast-bottom-right",
              timeOut:2e3,
              closeButton:!0
             
            });
            
            //alert('File size exceeds 1 MB'+FileSize);
              //$('#success').hide();
              
              // $('#zip_img').attr('src','');
          return false;
           // $(file).val(''); //for clearing with Jquery
        } else {
            //alert('File size '+FileSize);
              return true;
          }
       }
     // display img preview before upload.
    function showImg(fdata,name) {
            if (fdata.files && fdata.files[0])
             {
              // var file = fdata.files[0];
              // var tmpImg = new Image();
              // tmpImg.src=window.URL.createObjectURL( file ); 
              // tmpImg.onload = function() {
              // width = tmpImg.naturalWidth,
              // height = tmpImg.naturalHeight;
                var reader = new FileReader();
                reader.onload = function (e) 
                {
                  $('.'+name).attr('src', e.target.result);
              
              // if($('#width').val() !='' && $('#height').val() !='')
              // {
              //   if(width!=$('#width').val() && height!=$('#height').val())
              //   {
                  
              //     $("input[name*='"+name+"']").val('');
              //       toastr.warning("This Image Dimension is Wrong !", "Message", {
              //         showMethod:"slideDown",
              //         hideMethod:"slideUp",
              //         positionClass: "toast-bottom-right",
              //         timeOut:2e3,
              //         closeButton:!0
                     
              //       });
              //       return false;
              //   }
              //   else
              //   {
              //     toastr.success("Image Upload Success", "Message", {
              //       showMethod:"slideDown",
              //       hideMethod:"slideUp",
              //       positionClass: "toast-bottom-right",
              //       timeOut:2e3,
              //       closeButton:!0
                   
              //     });
              //     return true;
              //   }
              // }
              // else
              // {
                toastr.success("Image Upload Success", "Message", {
                  showMethod:"slideDown",
                  hideMethod:"slideUp",
                  positionClass: "toast-bottom-right",
                  timeOut:2e3,
                  closeButton:!0
                 
                });
              // return true;
              // }  
              }
              reader.readAsDataURL(fdata.files[0]);
                
            // }
              //   var reader = new FileReader();
              // reader.onload = function (e) 
              //   {
              //     toastr.options = {
              //     "closeButton": true,  // true or false
              //     "debug": false,
              //     "newestOnTop": false,
              //     "progressBar": true,  // true or false
              //     "rtl": false,
              //     "positionClass": "toast-top-right",
              //     "preventDuplicates": false, // true or false
              //     "showDuration": 300,
              //     "hideDuration": 1000,
              //     "timeOut": 5000,
              //     "extendedTimeOut": 1000,
              //     "showEasing": "swing",
              //     "hideEasing": "linear",
              //     "showMethod": "fadeIn",
              //     "hideMethod": "fadeOut"
              //    }
              //     toastr["success"]("Image Upload Success", "Message");
              //     // $('#zip_img').attr('src', e.target.result);
              //     //$('#success').show();
              //   }
              //   reader.readAsDataURL(fdata.files[0]);
            }
        }

// .//////////////////////PDF CHECK///////////////////////////////////


// Check Valid Image
  $(document).ready(function(){
//  MADHYAMIK DOC UPLOAD
     //$('#success').hide();

    $("#pdf").change(function () {

        if(fileExtValidate(this)) {
           if(fileSizeValidate(this)) {
            showImg(this);
           }   
        }    
      });
    // File extension validation, Add more extension you want to allow
    var validExt = ".pdf";
    function fileExtValidate(fdata) {
     var filePath = fdata.value;
     var getFileExt = filePath.substring(filePath.lastIndexOf('.') + 1).toLowerCase();
     var pos = validExt.indexOf(getFileExt);
     if(pos < 0) {
       toastr.options = {
                  "closeButton": true,  // true or false
                  "debug": false,
                  "newestOnTop": false,
                  "progressBar": true,  // true or false
                  "rtl": false,
                  "positionClass": "toast-top-right",
                  "preventDuplicates": false, // true or false
                  "showDuration": 300,
                  "hideDuration": 1000,
                  "timeOut": 5000,
                  "extendedTimeOut": 1000,
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut"
                 }
                  $('#pdf').val('');
                  toastr["error"]("This file is not allowed, please upload valid file.", "Message");
                  //$('#success').hide();
      //alert("This file is not allowed, please upload valid file.");
                
      return false;
      } else {
        return true;
      }
    }
    // file size validation
    function fileSizeValidate(file) {
        var FileSize = file.files[0].size/1024/1024;  //1024/1024; // in MB
        if (FileSize >20) {  /// 15 MB CHECK ALL FILE
             toastr.options = {
                  "closeButton": true,  // true or false
                  "debug": false,
                  "newestOnTop": false,
                  "progressBar": true,  // true or false
                  "rtl": false,
                  "positionClass": "toast-top-right",
                  "preventDuplicates": false, // true or false
                  "showDuration": 300,
                  "hideDuration": 1000,
                  "timeOut": 5000,
                  "extendedTimeOut": 1000,
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut"
                 }
                  $('#pdf').val('');
                  toastr["warning"]("File size exceeds 3 MB"+FileSize, "Message");
            //alert('File size exceeds 1 MB'+FileSize);
              //$('#success').hide();
              
              // $('#zip_img').attr('src','');
          return false;
           // $(file).val(''); //for clearing with Jquery
        } else {
            //alert('File size '+FileSize);
              return true;
          }
       }
     // display img preview before upload.
    function showImg(fdata) {
            if (fdata.files && fdata.files[0])
             {

              var reader = new FileReader();
              reader.onload = function (e) 
                {
                  toastr.options = {
                  "closeButton": true,  // true or false
                  "debug": false,
                  "newestOnTop": false,
                  "progressBar": true,  // true or false
                  "rtl": false,
                  "positionClass": "toast-top-right",
                  "preventDuplicates": false, // true or false
                  "showDuration": 300,
                  "hideDuration": 1000,
                  "timeOut": 5000,
                  "extendedTimeOut": 1000,
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut"
                 }
                  toastr["success"]("Image Upload Success", "Message");
                  // $('#zip_img').attr('src', e.target.result);
                  //$('#success').show();
                }
                reader.readAsDataURL(fdata.files[0]);
            }
        }

     });
