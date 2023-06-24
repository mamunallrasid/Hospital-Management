var js_token= $('meta[name="csrf-token"]').attr('content');
var table = $('#mytable').DataTable({
  processing: true,
  serverSide: true,
   ajax: {
       url: $('#display_url').val(),
       data: function (d) {
           d.row = $('#row').val()
           d.type = $('#type').val()
           d.from_date = $('#from_date').val();
           d.to_date = $('#to_date').val();
           d.status = $('#status').val()
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
     { data: "servicename"},
     {data : "amount"},
     { data: "servicedetails"},
     { data: "created_at"},
     { data: "action"}

 ],
 "bProcessing": true,
 "bDestroy": true

});

$('#row').change(function(){
   table.draw();
});
$('#type').change(function(){
   table.draw();
});
$('#from_date').change(function(){
   table.draw();
});
$('#to_date').change(function(){
   table.draw();
});
$('#status').change(function(){
   table.draw();
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
