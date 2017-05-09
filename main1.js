/*function showEditor(pid) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("POST", "editor.php?id=" + pid, true);
    xmlhttp.send();
    }
}*/

$("button").click(function() {
    var values = $(this).serialize();
    $.ajax({
        type: "POST",
        url: "../includes/editpost.php",
        data: values
        }).done(function() {
            console.log("something happened.");
        });    

   });

