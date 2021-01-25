<footer class="footer">
    © Dashboard <?=date("Y");?> by clouddreams
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="assets/node_modules/popper/popper.min.js"></script>
<script src="assets/node_modules/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="dist/js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--morris JavaScript -->
<script src="assets/node_modules/raphael/raphael.min.js"></script>
<script src="assets/node_modules/morrisjs/morris.min.js"></script>
<script src="assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
<!--c3 JavaScript -->
<script src="assets/node_modules/d3/d3.min.js"></script>
<script src="assets/node_modules/c3-master/c3.min.js"></script>
<!-- Popup message jquery -->
<!--    <script src="assets/node_modules/toast-master/js/jquery.toast.js"></script>-->
<!-- Chart JS -->
<script src="dist/js/dashboard1.js"></script>

<script src="assets/node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js"></script>
<!-- Plugin JavaScript -->
<script src="assets/node_modules/moment/moment.js"></script>
<script src="assets/node_modules/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
<!-- Clock Plugin JavaScript -->
<script src="assets/node_modules/clockpicker/dist/jquery-clockpicker.min.js"></script>
<!-- Color Picker Plugin JavaScript -->
<script src="assets/node_modules/jquery-asColor/dist/jquery-asColor.js"></script>
<script src="assets/node_modules/jquery-asGradient/dist/jquery-asGradient.js"></script>
<script src="assets/node_modules/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
<!-- Date Picker Plugin JavaScript -->
<script src="assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<!-- Date range Plugin JavaScript -->
<script src="assets/node_modules/timepicker/bootstrap-timepicker.min.js"></script>
<script src="assets/node_modules/daterangepicker/daterangepicker.js"></script>
<script src="assets/node_modules/moment/moment.js"></script>
<script src="assets/node_modules/calendar/jquery-ui.min.js"></script>
<script src="assets/node_modules/moment/moment.js"></script>
<script src='assets/node_modules/calendar/dist/fullcalendar.min.js'></script>
<script src="assets/node_modules/calendar/dist/cal-init.js"></script>
<script src="assets/node_modules/bootstrap-select/bootstrap-select.min.js"></script>
<script src="assets/node_modules/tinymce/tinymce.min.js"></script>
<script>
$('.date-format').bootstrapMaterialDatePicker({
    format: 'YYYY-MM-DD  HH:mm'
});
$('.date-format2').bootstrapMaterialDatePicker({
    format: 'YYYY-MM-DD',
    weekStart: 0,
    time: false,
});
</script>

<script type="text/javascript">
$(document).ready(function() {
    $(".onlynumber").bind("keypress", function(e) {
        var keyCode = e.which ? e.which : e.keyCode
        if (!(keyCode >= 48 && keyCode <= 57)) {
            $(".error").css("display", "inline");
            return false;
        } else {
            $(".error").css("display", "none");
        }
    });
});
</script>

<script>
tinymce.init({
    selector: '.tinymce',
    plugins: "code image code media print autoresize link autolink",
    toolbar: 'undo redo | link image | code',
    image_title: true,
    automatic_uploads: true,
    file_picker_types: 'image',
    skin: 'oxide-dark',
  content_css: 'dark',
  image_class_list: [
        {title: 'Responsive', value: 'img-fluid'},
        {title: 'None', value: ''}
    ],
    file_picker_callback: function(cb, value, meta) {
        var input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/*');

        /*
          Note: In modern browsers input[type="file"] is functional without
          even adding it to the DOM, but that might not be the case in some older
          or quirky browsers like IE, so you might want to add it to the DOM
          just in case, and visually hide it. And do not forget do remove it
          once you do not need it anymore.
        */

        input.onchange = function() {
            var file = this.files[0];

            var reader = new FileReader();
            reader.onload = function() {
                /*
                  Note: Now we need to register the blob in TinyMCEs image blob
                  registry. In the next release this part hopefully won't be
                  necessary, as we are looking to handle it internally.
                */
                var id = 'blobid' + (new Date()).getTime();
                var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                var base64 = reader.result.split(',')[1];
                var blobInfo = blobCache.create(id, file, base64);
                blobCache.add(blobInfo);

                /* call the callback and populate the Title field with the file name */
                cb(blobInfo.blobUri(), {
                    title: file.name
                });
            };
            reader.readAsDataURL(file);
        };

        input.click();
    },
    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
});
</script>

</body>

</html>