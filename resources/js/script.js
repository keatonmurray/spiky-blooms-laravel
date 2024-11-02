$(document).ready(function() {
    $('#add').click(function(){
        let quantity = parseInt($("#quantity").text());
        quantity += 1; 
        $("#quantity").text(quantity);
        $('#quantity-value').val(quantity); 
        console.log(quantity);
    });

    $('#subtract').click(function(){
        let quantity = parseInt($('#quantity').text());
        if (quantity > 1) {
            quantity -= 1; 
            $('#quantity').text(quantity);
            $('#quantity-value').val(quantity); 
        }
    });

    let subtotal = parseInt($('#subtotal').val());
    $('#order_total').text('$' + subtotal);
});