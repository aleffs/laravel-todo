            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                             Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="/assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="/assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="/assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="/assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="/assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="/assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="/assets/libs/js/dashboard-ecommerce.js"></script>


    <script type="text/javascript">
        $('body').on('submit','#todo-form',function(e){

            e.preventDefault();

            var todoBody = $('#todo_body').val();

            $.ajax({
                method: 'POST',
                url:'{{ route("save-todo") }}',
                dataType:'json',
                data:{
                    "_token": "{{ csrf_token() }}",
                    todoBody:todoBody
                },
                success: function(res){

                    $('#todos').html('');

                    $.each(res, function( index, value ) {

                        todos = '<div class="row mt-3" style="background-color: #D9D9D9; padding:1em 0.5em"><div class="col-md-12">'+value.id+' - '+value.todo_body+'<span style="float:right;"><span style="padding-right:2em; cursor: pointer;"><i class="fa fa-edit text-primary"></i></span><span style="cursor: pointer;"><i class="fa fa-trash text-danger"></i></span></span></div></div>';

                            $('#todos').append( todos );
                    });

                    $('#todo_body').val('');

                    console.log(res);
                }
            });
        });
    </script>



</body>
 
</html>