function sizeType(size_type,no){
    if(size_type=="weight")
    {
       $('.weight_menu_'+no).removeClass('d-none');
       $('.length_menu_'+no).addClass('d-none');

    }
    else if(size_type=="length")
    {
        $('.weight_menu_'+no).addClass('d-none');
        $('.length_menu_'+no).removeClass('d-none');

    }
    else{
        $('.length_menu_'+no).addClass('d-none');
        $('.weight_menu_'+no).addClass('d-none');
    }
}

var i = 1;
function addImage(row_id){
   i++;
   var html = `
   <div class="mb-3 col-md-12" id="product_${i}">
    <div class="card">
        <div class="card-body">
        <h5>Product Details: 
            <small class="text-muted float-end">
            <button type="button" class="btn btn-success btn-sm" onclick="addImage('${i}')"><i class="fa fa-plus"></i>&nbsp;Add</button>
            <button type="button" class="btn btn-danger btn-sm" onclick="removeImage('${i}')"><i class="fa fa-minus"></i>&nbsp;Remove</button>        
            </small>
        </h5>
        <div class="row">
            <div class="mb-3 col-md-2">
            <label class="form-label">SKU</label>
            <input type="text" class="form-control" name="sku[]" id="sku${i}" placeholder="SKU" required>
            </div>
            <div class="mb-3 col-md-2">
            <label class="form-label">MRP</label>
            <input type="number" class="form-control" name="mrp[]" id="mrp${i}" placeholder="MRP" required>
            </div>
            <div class="mb-3 col-md-2">
            <label class="form-label">Price</label>
            <input type="number" class="form-control" name="price[]" id="price${i}" placeholder="Price" required>
            </div>
            <div class="mb-3 col-md-2">
            <label class="form-label">Discount Type</label>
            <select class="form-control" name="discount_type[]" id="discount_type${i}" required>
                <option value="">Select</option>
                <option value="rupees" selected>Rupees</option>
                <option value="percentage">Percentage</option>
            </select>                        
            </div>
            <div class="mb-3 col-md-2">
            <label class="form-label">Discount</label>
            <input type="number" class="form-control" name="discount[]" id="discount${i}" placeholder="Discount" required>
            </div>
            <div class="mb-3 col-md-2">
            <label class="form-label">Size Type</label>
            <select class="form-control" onchange="sizeType(this.value,'${i}')" name="size_type[]" id="size_type${i}" required>
                <option value="">Select</option>
                <option value="weight">Weight</option>
                <option value="length">Length</option>
            </select>                        
            </div>
            <div class="mb-3 col-md-2 length_menu_${i} d-none">
            <label class="form-label">Length Size</label>
            <select class="form-control" name="length_size[]" id="length_size${i}" required>
                <option value="">Select</option>
                <option value="XXL">XXL</option>
                <option value="XL">XL</option>
                <option value="L">L</option>
                <option value="M">M</option>
                <option value="S">S</option>
            </select>                        
            </div>
            <div class="mb-3 col-md-2 weight_menu_${i} d-none">
            <label class="form-label">Weight</label>
            <input type="number" class="form-control" name="weight[]" id="weight${i}" placeholder="Weight" required>
            </div>
            <div class="mb-3 col-md-2 weight_menu_${i} d-none">
            <label class="form-label">Weight Type</label>
            <select class="form-control" name="weight_type[]" id="weight_type${i}" required>
                <option value="">Select</option>
                <option value="kg">Kilogram(Kg)</option>
                <option value="liter">Liter(L)</option>
                <option value="ml">Miligram (ml)</option>
            </select>                        
            </div>
            <div class="mb-3 col-md-2">
            <label class="form-label">Qty</label>
            <input type="number" class="form-control" name="qty[]" id="qty${i}" placeholder="Qty" required>
            </div>
            <div class="mb-3 col-md-2">
            <label class="form-label" for="basic-default-company">Status</label>
            <select class="form-control" name="product_status[]" id="product_status${i}" required>
                <option value="">Select</option>
                <option value="1">Active</option>
                <option value="0">Deactive</option>
            </select>
            </div>
            <div class="mb-3 col-md-12">
            <h5>Upload Image</h5>
            <input type="file" name="file[${i}][]" multiple id="multiple_image${i}" class="form-control multiple_file" required>
            </div> 

        </div>

        </div>
    </div>
    </div>
   `;
   $(".product_card").append(html);
}

function removeImage(row_id){
    $('#product_'+row_id).remove();
}



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
          {
            'data':'product_name',
            'render': function (data, type, row){
                return `<span class='badge bg-info'>
                ${row['product_code']}</span><br>
                <a href="javascript:void(0)" onclick="showProductDetails('${row['id']}','${js_token}','/super/product/product_details')"><span class="badge bg-label-primary rounded-pill p-2">${row['product_count']}</a></span>
                `;
            }
         },
         { data: "product_name"},
         {
            'data':'shop_type_id',
            'render': function (data, type, row){
               return  row['shop_type'];
            }
         },
         {
            'data':'category_id',
            'render': function (data, type, row){
               return  row['category'];
            }
         },
         {
            'data':'sub_category_id',
            'render': function (data, type, row){
               return  row['sub_category'];
            }
         },
          { data: "brand"},
          {
            'data':'product_name',
            'render': function (data, type, row){
                return `<span style="display:flex;">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="${row['short_desc']}">
                short</button>&nbsp;
               <button type="button" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="bottom" title="${row['full_desc']}">
                full</button></span>
              `;
            }
         },

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
                <select class="form-control" name="status" onchange="Status_update('${row['id']}',this.value,'${js_token}','/super/product/status')">
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
                return `<span style="display:flex;">
                <a href="javascript:void(0)" onclick="Delete('${row['id']}','${js_token}','/super/product/delete')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a> 
                &nbsp;&nbsp;
                <a href="/super/product/edit/${row['id']}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a></span>`; 
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


//   Product Details
function showProductDetails(id,token,url)
{
   var js_token= $('meta[name="csrf-token"]').attr('content');

   $('#productDetailsModel').modal('show');
   var table = $('#productDetailsTable').DataTable({
      processing: true,
      serverSide: true,
       ajax: {
          url: url,
          method : "POST",
          data:{
             _token : token,
             id : id
           },
       },
       columns: [
         {
           'data':'sku',
           'render': function (data, type, row){
               return `<span class='badge bg-info'>${row['sku']}</span><br> `;
           }
        },
        {
         'data':'mrp',
         'render': function (data, type, row){
             return tofixed(row['mrp']);
            }
         },
                   
        { data: "discount_type"},
        {
         'data':'discount',
         'render': function (data, type, row){
            if(row['discount_type'] =="rupees")
            {
               return tofixed(row['discount']);
            }
            else
            {
               return row['discount']+"%";
            }
             
         }
        },
        {
         'data':'price',
         'render': function (data, type, row){
               return tofixed(row['price']);
            }
         },  
        { data: "size_type"},
        {
         'data':'weight',
         'render': function (data, type, row){
            if(row['length_size'] !=null)
            {
               return `
               <span class='badge bg-info'> ${row['length_size']}</span><br>
               `;
            }
            else
            {
               return `
               <span class='badge bg-info'> ${row['weight']}&nbsp;(${row['weight_type']})</span>
               `;
            }
             
         }
      },
      {
         'data':'qty',
         'render': function (data, type, row){
             return `<span class='badge bg-info'>
             ${row['qty']}</span><br> `;
         }
      },
      {
         'data':'status',
         'render': function (data, type, row){
            if(row['status']==1)
            {
               return `<span class='badge bg-success'>Active</span>`;
            }
            else
            {
               return `<span class='badge bg-danger'>Deactive</span>`;
            }
            
         }
      },
      {
         'data':'created_at',
         'render': function (data, type, row){
            return  date_time(row['created_at']);
         }
      }       
     ],
     "bProcessing": true,
     "bDestroy": true 
     
    });

    function date_time(data){
      return moment(data).format('DD-MM-YYYY');  
    }

    function tofixed(val) {
      return val.toFixed(2);
    }
   
}
 