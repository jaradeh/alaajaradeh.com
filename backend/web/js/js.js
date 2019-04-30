$("#myTextBox").on("change paste keyup", function () {
    var link = $(this).val();
    $("#test_site_btn").attr("href", link);
    $('#test_site_div').show("fast");
});