$(document).ready(function() {

    console.log('5');

    $(".js-switch").each(function (){
        new Switchery(this);
    })

    $("body").on("change", ".js-switch", function(){

        var $completed = $(this).prop("checked");
        var $url = $(this).data("url");

        $.post($url,{ completed : $completed }, function () {});

    })


})