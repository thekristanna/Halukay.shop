$(document).ready(function () {
    function calculateTotal() {
        let totalPrice = 0;
        $(".co-price").each(function () {
            let priceText = $(this).text().replace("₱", "").trim();
            totalPrice += parseFloat(priceText);
        });
        $(".co_total").text(totalPrice.toFixed(2));
    }
    calculateTotal();
});
