$(document).ready(function () {
    let displayNameInput = $("#username");

    let initialValue = displayNameInput.val();

    displayNameInput.on("input", function (event) {
        let currentValue = $(this).val();

        if (currentValue === "") {
            $(this).val(initialValue);
        }
    });
});
