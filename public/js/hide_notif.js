setTimeout(hide_notif, 3000);

function hide_notif() {
    $(document).ready(function () {
        $("#notif").slideUp();
        $(".notif").slideUp();
    });
}
