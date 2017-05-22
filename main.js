var ajaxRequest = $.ajax({
        method: "GET",
        url: "../includes/maincontent.php"
        });

window.onload = function() {

    ajaxRequest.done(function(resp) {
        var el = document.getElementById("main-content");
        el.innerHTML = resp;
    });
    ajaxRequest.fail(function( jqXHR, textStatus ) {
        alert( "Request failed: " + textStatus );
    });
};