function Toast_Danger(msg) {
    toastr.error(msg, "Message", {
      showMethod:"slideDown",
      hideMethod:"slideUp",
      positionClass: "toast-bottom-right",
      timeOut:2e3,
      closeButton:!0
     
    })
  }

  function Toast_Success(msg) {
    toastr.success(msg, "Message", {
      showMethod:"slideDown",
      hideMethod:"slideUp",
      positionClass: "toast-bottom-right",
      timeOut:2e3,
      closeButton:!0
     
    })
  }
   // Add to cart
    $('.add-to-cart-btn').click(function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var product_id = $(this).data('product_id');
        var quantity = $(this).data('product_qty');

        $.ajax({
            url: "/add-to-cart",
            method: "POST",
            data: {
                'quantity': quantity,
                'product_id': product_id,
            },
            success: function (response) {
                if(response.status)
                {
                    Toast_Success(response.msg);
                    cartload();
                    

                }
                else
                {
                    Toast_Danger(response.msg);
                }
            },
        });
    });

cartload();
function cartload()
{
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: '/load-cart-data',
        method: "GET",
        success: function (response) {
           
            var parsed = jQuery.parseJSON(response)
            var value = parsed; //Single Data Viewing
            // 
            $('.basket-item-count').html(value['totalcart']);
            $('.minicart-list').html(value['product']);
            $('.total_price').html(value['total_price']);

            // 

            $('#cart_data').html(value['cart']);
            $('#total').html(value['total']);
            $('#subtotal').html(value['sbtotal']);

        }
    });
}


$(document).on('click','.delete_cart_data',function (e) {
    e.preventDefault();

    var product_id = $(this).data('product_id');

    var data = {
        '_token': $('input[name=_token]').val(),
        "product_id": product_id,
    };

    // $(this).closest(".cartpage").remove();

    $.ajax({
        url: '/delete-from-cart',
        type: 'DELETE',
        data: data,
        success: function (response) {
            cartload();
        }
    });
});


