$(function () {
    $("#success").dialog({
        autoOpen: false,
        width: 350,
        show: {
            effect: "explode",
            duration: 750
        },
        hide: {
            effect: "explode",
            duration: 750
        },
        modal: true
    });
});

$(function () {
    var dialog, form,
        theme = $("#theme"),
        body = $("#body"),
        allFields = $([]).add(theme).add(body),
        tips = $(".validateTips");

    function updateTips(t) {
        tips
            .text(t)
            .addClass("ui-state-highlight");
        setTimeout(function () {
            tips.removeClass("ui-state-highlight", 1500);
        }, 500);
    }

    function checkLength(o, n, min, max) {
        if (o.val().length > max || o.val().length < min) {
            o.addClass("ui-state-error");
            updateTips("Length of " + n + " must be between " +
                min + " and " + max + ".");
            return false;
        } else {
            return true;
        }
    }

    function checkRegexp(o, regexp, n) {
        if (!(regexp.test(o.val()))) {
            o.addClass("ui-state-error");
            updateTips(n);
            return false;
        } else {
            return true;
        }
    }

    function addUser() {
        var valid = true;
        allFields.removeClass("ui-state-error");

        valid = valid && checkLength(theme, "theme", 6, 50);
        valid = valid && checkLength(body, "body", 6, 500);

        valid = valid && checkRegexp(theme, /^[а-яА-ЯёЁa-zA-Z0-9 -\,\.]+$/i, "Theme may consist of a-z, 0-9, underscores, spaces and must begin with a letter.");
        valid = valid && checkRegexp(body, /[^@]/, "Body may consist of a-z, 0-9, underscores, spaces and must begin with a letter.");

        if (valid) {
            //SendPost
            $.post('/contact/send', {
                    _token: $('meta[name=csrf-token]').attr('content'),
                    theme: document.getElementById("theme").value,
                    body: document.getElementById("body").value
                }
            )
                .done(function (data) {
                    // $( "#success" ).dialog( "open" );
                })
                .fail(function () {
                    alert("error");
                });
            //EndSend
            dialog.dialog("close");
            $("#success").dialog("open");
        }
        return valid;
    }

    dialog = $("#dialog-form").dialog({
        autoOpen: false,
        height: 460,
        width: 600,
        show: {
            effect: "explode",
            duration: 750
        },
        hide: {
            effect: "explode",
            duration: 750
        },
        modal: true,
        buttons: {
            "Отправить": addUser,
            "Закрыть": function () {
                dialog.dialog("close");
            }
        },
        close: function () {
            form[0].reset();
            allFields.removeClass("ui-state-error");
        }
    });

    form = dialog.find("form").on("submit", function (event) {
        event.preventDefault();
        addUser();
    });

    $("#contact-form").on("click", function () {
        dialog.dialog("open");
    });
});