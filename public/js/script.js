var form = $("#registercompany");
form.validate({
    errorPlacement: function errorPlacement(error, element) { element.before(error); },
    rules: {
        confirm: {
            equalTo: "#password"
        }
    }
});
form.children("div").steps({
    headerTag: "h3",
    bodyTag: "section",
    onStepChanging: function (event, currentIndex, newIndex)
    {
        return form.valid();
    },
    onFinishing: function (event, currentIndex)
    {
        return form.valid();
    },
    onFinished: function (event, currentIndex)
    {
        form.submit();
    }
});