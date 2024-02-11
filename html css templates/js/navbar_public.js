document.addEventListener('DOMContentLoaded', function() {
    let menu = document.querySelector('#menu-icon');
    let navbar = document.querySelector('.navbar');

    menu.onclick = () => {
        menu.classList.toggle('bx-x');
        navbar.classList.toggle('open');
    };
});

document.getElementById("name-dropdown").addEventListener("change", function() {
    var selectedOption = this.options[this.selectedIndex];
    var url = selectedOption.getAttribute("data-url");
    if (url) {
        window.location.href = url;
    }
});