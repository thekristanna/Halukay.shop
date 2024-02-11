document.getElementById("name-dropdown").addEventListener("change", function() {
    var selectedOption = this.options[this.selectedIndex];
    var url = selectedOption.getAttribute("data-url");
    if (url) {
        window.location.href = url;
    }
});