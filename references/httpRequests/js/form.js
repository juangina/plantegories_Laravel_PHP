$(document).ready(function () {
 
  $("#formSubmit").click(function (event) {
    //$("form#myForm").submit(function (event) {
    //Always pass in the event just in case you might need it

    //stop submit the form, we will post it manually.
    event.preventDefault();

    // Get form
    var form = $('#myForm')[0];
    //console.log(form);

    //Create a FormData object 
    var formData = new FormData(form);
    //var formData = new FormData($(this)[0]);
    //console.log(formData);

    // If you want to add an extra field for the FormData
    formData.append("CustomField", "This is some extra data, testing");

    // disabled the submit button
    $("#formSubmit").prop("disabled", true);

    $.ajax({
        type: "POST",
        enctype: 'multipart/form-data',
        url: "../php/form.php",
        data: formData,
        processData: false,
        contentType: false,
        cache: false,
        timeout: 800000,
        success: function (data) {

            $("#output").text(data);
            console.log("SUCCESS : ", data);
            $("#formSubmit").prop("disabled", false);
            $("#myForm")[0].reset();
        },
        error: function (e) {

            $("#output").text(e.responseText);
            console.log("ERROR : ", e);
            $("#formSubmit").prop("disabled", false);

        }
    });

  });

});