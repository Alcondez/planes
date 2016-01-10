function recalculateTotal(nc) {
    var total = 0;

    //basically find every selected seat and sum its price
    nc.find('selected').each(function () {
        total += this.data().price;
    });

    return total;
}

function changemap(price1) {
    var $cart = $('#selected-seats'),
        $counter = $('#counter'),
        $total = $('#total'),

        nc = $('#seat-map').seatCharts({
            map: [
                'ff_ff',
                'ff_ff',
                'ee_ee',
                'ee_ee',
                'ee___',
                'ee_ee',
                '___ee',
                'ee_ee',
                'eeeee',
            ],
            seats: {
                f: {
                    price   : price1,
                    classes : 'first-class', //your custom CSS class
                    category: 'First Class'
                },
                e: {
                    price   : 40,
                    classes : 'economy-class', //your custom CSS class
                    category: 'Economy Class'
                }

            },
            naming : {
                top : false,
                getLabel : function (character, row, column) {
                    return firstSeatLabel++;
                },
            },
            legend : {
                node : $('#legend'),
                items : [
                    [ 'f', 'available',   'First Class' ],
                    [ 'e', 'available',   'Economy Class'],
                    [ 'f', 'unavailable', 'Already Booked']
                ]
            },
            click: function () {
                if (this.status() == 'available') {
                    //let's create a new <li> which we'll add to the cart items
                    $('<li>'+this.data().category+' Seat # '+this.settings.label+': <b>$'+this.data().price+'</b> <a href="#" class="cancel-cart-item">[cancel]</a></li>')
                        .attr('id', 'cart-item-'+this.settings.id)
                        .data('seatId', this.settings.id)
                        .appendTo($cart);

                    /*
                     * Lets update the counter and total
                     *
                     * .find function will not find the current seat, because it will change its stauts only after return
                     * 'selected'. This is why we have to add 1 to the length and the current seat price to the total.
                     */
                    $counter.text(nc.find('selected').length+1);
                    $total.text(recalculateTotal(nc)+this.data().price);

                    return 'selected';
                } else if (this.status() == 'selected') {
                    //update the counter
                    $counter.text(nc.find('selected').length-1);
                    //and total
                    $total.text(recalculateTotal(nc)-this.data().price);

                    //remove the item from our cart
                    $('#cart-item-'+this.settings.id).remove();

                    //seat has been vacated
                    return 'available';
                } else if (this.status() == 'unavailable') {
                    //seat has been already booked
                    return 'unavailable';
                } else {
                    return this.style();
                }
            }

        });



    return nc;
}