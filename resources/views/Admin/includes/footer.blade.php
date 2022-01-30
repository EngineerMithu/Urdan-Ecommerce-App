<!-- CORE PLUGINS-->
<script src=" {{ asset('/admin_assets/') }}/assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
<script src=" {{ asset('/admin_assets/') }}/assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
<script src=" {{ asset('/admin_assets/') }}/assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src=" {{ asset('/admin_assets/') }}/assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
<script src=" {{ asset('/admin_assets/') }}/assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- PAGE LEVEL PLUGINS-->
<script src=" {{ asset('/admin_assets/') }}/assets/vendors/chart.js/dist/Chart.min.js" type="text/javascript"></script>
<script src=" {{ asset('/admin_assets/') }}/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
<script src=" {{ asset('/admin_assets/') }}/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
<script src=" {{ asset('/admin_assets/') }}/assets/vendors/jvectormap/jquery-jvectormap-us-aea-en.js" type="text/javascript"></script>
<!-- CORE SCRIPTS-->
<script src="{{ asset('/admin_assets/') }}/assets/js/app.min.js" type="text/javascript"></script>
<!-- PAGE LEVEL SCRIPTS-->
<script src=" {{ asset('/admin_assets/') }}/assets/js/scripts/dashboard_1_demo.js" type="text/javascript"></script>


<!-- PAGE LEVEL PLUGINS-->
<script src="{{ asset('/admin_assets/') }}/assets/vendors/DataTables/datatables.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- PAGE LEVEL SCRIPTS-->

<!-- PAGE LEVEL PLUGINS-->
<script src="{{ asset('/admin_assets/') }}/assets/vendors/summernote/dist/summernote.min.js" type="text/javascript"></script>
<script src="{{ asset('/admin_assets/') }}/assets/vendors/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
<!-- CORE SCRIPTS-->
<script src="{{ asset('/admin_assets/') }}/assets/js/app.min.js" type="text/javascript"></script>
<!-- PAGE LEVEL SCRIPTS-->
<script type="text/javascript">
    $(function() {
        $('.summernote').summernote();
        $('.summernote_air').summernote({
            airMode: true
        });
    });
</script>



<!-- PAGE LEVEL SCRIPTS-->
<script type="text/javascript">
    $(function() {
        $('#example-table').DataTable({
            pageLength: 10,
            //"ajax": './assets/demo/data/table_data.json',
            /*"columns": [
                { "data": "name" },
                { "data": "office" },
                { "data": "extn" },
                { "data": "start_date" },
                { "data": "salary" }
            ]*/
        });
    })
</script>
@yield('admin-js');