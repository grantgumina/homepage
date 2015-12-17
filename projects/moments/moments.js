$(document).ready(function() {
    $(".blurb").hide();
    $(".screen").hide();
    $("#error-msg").hide();
    $("#success-msg").hide();
    $("#sc-0").show();
    $("#info-1").fadeIn(2500, function() {
        $("#info-2").fadeIn(2500, function() {
            $("#info-3").fadeIn(2500, function() {
                $("#info-4").fadeIn(2500, function() {
                }).delay(2300);
            }).delay(2300);
        }).delay(2300);
    }).delay(2300);

    $("#screens").cycle("fade");

    $("#add-email-btn").click(function(){
        var email = $("#email").val();
        console.log(email);
        if (/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email)) {
            var postStatus = $.post("add_email.php", {email: email});
            postStatus.done(function(){
                $("#error-msg").hide();
                $("#email-form").hide();
                $("#success-msg").show();
            });
        }
        else {
            $("#error-msg").show();
            $("#success-msg").hide();
        }
    });


});