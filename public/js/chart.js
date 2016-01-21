var firstSeatLabel = 1;

$(document).ready(function() {
    var $cart = $('#selected-seats'),
        sc = changemap(1550);

    $('.checkout-button').click(function(){
        window.location.href='/';
    })



    //this will handle "[cancel]" link clicks
    $('#selected-seats').on('click', '.cancel-cart-item', function () {
        //let's just trigger Click event on the appropriate seat, so we don't have to repeat the logic here
        sc.get($(this).parents('li:first').data('seatId')).click();
    });

    //let's pretend some seats have already been booked
    sc.get(['1_2', '4_1', '7_1', '7_2']).status('unavailable');

});


