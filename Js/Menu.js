function Menu(x) {
    x.classList.toggle("change");
}
window.addEventListener("load", function() {
    const loader = document.querySelector(".loader");
    loader.className += " hidden"; // class "loader hidden"
});