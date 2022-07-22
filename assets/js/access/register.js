$(function () {
   $(document).on("submit", "#form_register", async function (event) {
    event.preventDefault();

    let formData = new FormData(this);

    await $.ajax(
        getAjaxConfig("/register", {
            async: true,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,

            // If registration is successful
            success: function ({ responseJSON }) {
                console.log(responseJSON);
                notification("success", "", responseJSON.message);
                

                window.location.replace("/login");
            },
            error: function ({ responseJSON }) {
                console.log(responseJSON);
                notification("error", "Please provide appropriate Information.", responseJSON.message);

                window.location.replace("/register");
            },
        })
    );
    $("#form_register")[0].refresh();
});

});