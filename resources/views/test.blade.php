    <link href="/css/dropzone.css" rel="stylesheet">

    <script src="/js/jquery-3.3.1.js"></script>
    <script src="/js/dropzone.js"></script>

        <input type="text" id="upl">
        <div id="iamgeUpload" class="dropzone"></div>

    <script type="text/javascript">
        Dropzone.autoDiscover = false;
        var myDropzone = new Dropzone("div#iamgeUpload", {
            url:'/upload/avatar',
            type:'POST',
            maxFilesize:3,
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            maxFiles: 1,
            addRemoveLinks: true,
            sending: function(file, xhr, formData) {
                formData.append("_token", "{{{ csrf_token() }}}");
            },
            init: function() {
                var myDropzone = this;
                this.on('success', function(file, response) {
                    document.getElementById('upl').value = response.success;
                })
            }
        });
    </script>

