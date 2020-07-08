<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script>
if ($(window).width() <= 768) {
    $('.page-sidebar').addClass('collapseit');
    $('.page-sidebar').removeClass('expandit');
    $('.profile-info').addClass('short-profile');
    $('.logo-area').addClass('logo-icon');
    $('#main-content').addClass('sidebar_shift');
    $('.menu-title').css("display", "none");
    $('.footer').addClass("show");
}
$(document).ready(function() {
    $('#menu_icon').click(function() {
        if ($('.page-sidebar').hasClass('expandit')) {
            $('.page-sidebar').addClass('collapseit');
            $('.page-sidebar').removeClass('expandit');
            $('.profile-info').addClass('short-profile');
            $('.logo-area').addClass('logo-icon');
            $('#main-content').addClass('sidebar_shift');
            $('.menu-title').css("display", "none");
            $('.footer').addClass("show");
        } else {
            $('.page-sidebar').addClass('expandit');
            $('.page-sidebar').removeClass('collapseit');
            $('.profile-info').removeClass('short-profile');
            $('.logo-area').removeClass('logo-icon');
            $('#main-content').removeClass('sidebar_shift');
            $('.menu-title').css("display", "inline-block");
            $('.footer').removeClass("show");

        }
    });

});
</script>
</body>

</html>