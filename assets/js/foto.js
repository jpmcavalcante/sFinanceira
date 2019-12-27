$('.cli_image a').on('click', function () {
   $(this).parent().remove();
})


$(".tab-pane ac").on("click", function () {
   $(".tab-pane ac").removeClass("active");
   $(this).addClass("active");
})
