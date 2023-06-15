function All_Data_Display(display_url,token,row,type,from_date,to_date,status) {
   var js_token= $('meta[name="csrf-token"]').attr('content');
    var table = $('#mytable').DataTable({
      processing: true,
      serverSide: true,
       ajax: {
          url: display_url,
          method : "POST",
          data:{
             _token : token,
             row:row,
             type:type,
             from_date:from_date,
             to_date:to_date,
             status:status
           }
       },
       columns: [
         {
            'targets': 0,
            'searchable': false,
            'orderable': false,
            'className': 'dt-body-center',
            'render': function (data, type, row){
               return '<input type="checkbox" name="id[]" value="' + $('<div/>').text(row['id']).html() + '">';
            }
         },
         { data: "shop_type"},
         {
            'data':'status',
            'render': function (data, type, row){
               var blank="";
               var active="";
               var deactive="";

               if(row['status']==1)
               {
                  active="selected";
               }
               if(row['status']==0)
               {
                  deactive="selected";
               }
               return `
               <select class="form-control" name="status" onchange="Status_update('${row['id']}',this.value,'${js_token}','/super/shop-type/status')">
                  <option value="" ${blank}>Select</option>
                  <option value="1" ${active}>Active</option>
                  <option value="0" ${deactive}>Deactive</option>
               </select>
               `;
            }
         },
         {
            'data':'created_at',
            'render': function (data, type, row){
               return  date_time(row['created_at']);
            }
         },
         {
            'targets': 5,
            'searchable': false,
            'orderable': false,
            'render': function (data, type, row){
               return `<a href="javascript:void(0)" onclick="Delete('${row['id']}','${js_token}','/super/shop-type/delete')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a> 
               &nbsp;&nbsp;
               <a href="/super/shop-type/edit/${row['id']}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>`; 
            }
         }
       
     ],
     "bProcessing": true,
     "bDestroy": true 
     
    });
 
   function date_time(data){
     return moment(data).format('DD-MM-YYYY');  
   }
 
    // Handle click on "Select all" control
    $('#example-select-all').on('click', function(){
       // Get all rows with search applied
       var rows = table.rows({ 'search': 'applied' }).nodes();
       // Check/uncheck checkboxes for all rows in the table
       $('input[type="checkbox"]', rows).prop('checked', this.checked);
    });
 
    // Handle click on checkbox to set state of "Select all" control
    $('#example tbody').on('change', 'input[type="checkbox"]', function(){
       // If checkbox is not checked
       if(!this.checked){
          var el = $('#example-select-all').get(0);
          // If "Select all" control is checked and has 'indeterminate' property
          if(el && el.checked && ('indeterminate' in el)){
             // Set visual state of "Select all" control
             // as 'indeterminate'
             el.indeterminate = true;
          }
       }
    });
 
    // Handle form submission event
    $('#frm-example').on('submit', function(e){
       var form = this;
 
       // Iterate over all checkboxes in the table
       table.$('input[type="checkbox"]').each(function(){
          // If checkbox doesn't exist in DOM
          if(!$.contains(document, this)){
             // If checkbox is checked
             if(this.checked){
                // Create a hidden element
                $(form).append(
                   $('<input>')
                      .attr('type', 'hidden')
                      .attr('name', this.name)
                      .val(this.value)
                );
             }
          }
       });
    });
 
 }

