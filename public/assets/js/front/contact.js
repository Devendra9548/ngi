$(document).ready(function() {
    $("#contactform").submit(function(event) {
        event.preventDefault();
        document.querySelector("#CtSpinner").style.display="inline-block";

        var formData = new FormData(this);
        $.ajax({
            type: "POST",
            url: "/contact-us",
            data: formData,
            contentType: false,
            processData: false,
            success: function(res) {
                if (res == true) {
                    $("#contactform")[0].reset();
                    document.querySelector("#CtSpinner").style.display="none";
                    document.querySelector("#messagehere").style.display="block";
                } else {
                    alert("Error!" + res);
                }
            }
        });
    });
});
