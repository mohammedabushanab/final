$(function() {
    $('.quantityplus').click(function(e){
        e.preventDefault();
        // fieldName = $(this).attr('field');

        //Fetch qty in the current elements context and since you have used class selector use it.
        var qty = $(this).closest('.cart_item').find('.quantity');
        //var qty = $(this).closest('tr').find('input[name='+fieldName+']');

        var currentVal = parseInt(qty.val());
        if (!isNaN(currentVal)) {
            qty.val(currentVal + 1);
        } else {
            qty.val(0);
        }

        //Trigger change event
        qty.trigger('change');
    });

    $(".quantityminus").click(function(e) {
        e.preventDefault();
        // fieldName = $(this).attr('field');

        //Fetch qty in the current elements context and since you have used class selector use it.
        var qty = $(this).closest('.cart_item').find('.quantity');
        //var qty = $(this).closest('tr').find('input[name='+fieldName+']');

        var currentVal = parseInt(qty.val());
        if (!isNaN(currentVal) && currentVal > 0) {
            qty.val(currentVal - 1);
        } else {
            qty.val(0);
        }

        //Trigger change event
        qty.trigger('change');
    });     

    //Bind the change event
    $(".quantity").change(function() {
        var sum = 0;
        var total = 0;
        $('.actual_price').each(function () {
            var price = $(this);
            var count = price.closest('.cart_item').find('.quantity');
            sum = (price.html() * count.val());
            total = total + sum;
            price.closest('.cart_item').find('.item_price').html(sum + "$");
        });
        // $('.total_price').html("<h3>£" + total + "</h3>");

    }).change(); //trigger change event on page load
});