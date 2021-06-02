$(document).ready( function (){
    // grab everything we need
    const btn = document.querySelector(".mobile-menu-button");
    const sidebar = document.querySelector(".sidebar");

    // add our event listener for the click
    btn.addEventListener("click", () => {
        sidebar.classList.toggle("-translate-x-full");
    });

    // $('#sidebarCollapse').on('click', function () {
    //     $('#sidebar, #content, #cover').toggleClass('active');
    //     $(this).toggleClass('active');
    // });
});



