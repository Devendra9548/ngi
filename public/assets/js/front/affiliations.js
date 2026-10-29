

$(document).ready(function() {
    $("#affiliateform").submit(function(event) {
        event.preventDefault();
        document.querySelector("#CtSpinner").style.display="inline-block";
        const canvas = document.getElementById('signature-pad');
        const clearButton = document.getElementById('clear');
        const ctx = canvas.getContext('2d');
        clearButton.addEventListener('click', () => {
           ctx.clearRect(0, 0, canvas.width, canvas.height);
        });
        const dataURL = canvas.toDataURL('image/png'); 
        document.getElementById('signature_input').value = dataURL;
        var formData = new FormData(this);
        $.ajax({
            type: "POST",
            url: "/affiliateform-post",
            data: formData,
            contentType: false,
            processData: false,
            success: function(res) {
                if (res == true) {
                    $("#affiliateform")[0].reset();
                    document.querySelector("#CtSpinner").style.display="none";
                    document.querySelector("#messagehere").style.display="block";
                } else {
                    alert("Error!" + res);
                }
            }
        });
    });
});




