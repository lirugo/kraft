    <link href="/css/dropzone.css" rel="stylesheet">

    <script src="/js/jquery-3.3.1.js"></script>
    <script src="/js/dropzone.js"></script>


        <div id="iamgeUpload" class="dropzone"></div>
        <div id="boatAddForm"></div>

    <script type="text/javascript">
        Dropzone.autoDiscover = false;
        var myDropzone = new Dropzone("div#iamgeUpload", {
            url:'/upload/scan',
            type:'POST',
            maxFilesize:3,
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            maxFiles: 5,
            addRemoveLinks: true,
            sending: function(file, xhr, formData) {
                formData.append("_token", "{{{ csrf_token() }}}");
            },
            init: function() {
                var myDropzone = this;
                this.on('success', function(file, response) {
                    $("#boatAddForm").append($('<input type="text" ' +
                        'name="files[]" ' +
                        'value="' + response.success + '">'));
                })
            }
        });
    </script>

