$(document).ready(function(){
    $('.button').click(function(){
        var clickBtnValue = $(this).val();
        var ajaxurl = 'includes/ajax.php';
        data =  {'action': clickBtnValue};
        $.post(ajaxurl, data, function (response) {
            $("span").text(response);
            alert("action performed successfully");
        });
    });
});