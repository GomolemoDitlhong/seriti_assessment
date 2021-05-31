window.Seriti = {
    onceOffInit() {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar, #content').toggleClass('active');
            $(this).toggleClass('active');;
        });
    }
};
