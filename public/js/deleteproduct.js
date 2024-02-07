$(document).ready(function () {
    $(document).on("click", ".delete_button", function (event) {
        event.preventDefault(); // prevent default form submission
        if (confirm("Are you sure you want to delete this product?")) {
            // If user clicks OK, proceed with deletion
            $(this).closest("form").submit();
        }
    });
});
