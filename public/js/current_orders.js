$(document).ready(function () {
    $(".orders").each(function () {
        var total = 0;
        var order_id = $(this).find(".order-id").text();

        $(this)
            .find(".product .order_price_" + order_id)
            .each(function () {
                var price = parseFloat(
                    $(this).text().replace("₱", "").replace(",", "")
                );
                total += price;
            });

        // Set the total in the corresponding total field
        $(this)
            .find(".order_total_" + order_id)
            .text(total.toFixed(2));
    });
});
