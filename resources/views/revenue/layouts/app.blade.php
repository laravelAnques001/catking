<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('revenue.partials.head')

    <!-- custom head script push start -->
    @stack('head_script')
    <!-- custom head script push end -->

    <script>
        $(document).on('click', '.ajaxviewmodel', function(event) {
            var tmp_html =
                '<div class="modal-dialog"><div class="modal-content"><div class="modal-body"><p class="ajaxloader text-center"><i class="fa fa-spinner fa-spin fa-3x fa-fw margin-bottom margin-top text-center"></i></p></div></div></div>';
            event.preventDefault();
            var link = $(this).attr("href");
            $('#myModal').modal('show');
            $("#myModal").html(tmp_html);
            $.ajax({
                url: link,
                success: function(data) {
                    $(".ajaxloader").hide();
                    $("#myModal").html(data);
                }
            });
        });
    </script>
</head>

<body>
    <!-- Main navbar -->
    @include('revenue.partials.navbar')
    <!-- /main navbar -->

    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">
            <!-- Main sidebar -->
            @include('revenue.partials.sidebar')
            <!-- /Main sidebar -->

            <!-- Main content -->
            <div class="content-wrapper">
                <!-- Content area -->
                <div class="content">

                    <div class="page-header-content">
                        <div class="page-title">
                            <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Welcome to CEO
                                    Revenue Dashboard</span></h4>
                        </div>
                    </div>

                    <!-- Colored tabs -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-flat">
                                {{--  <div class="panel-heading">
									<h6 class="panel-title">Colored justified</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>  --}}
                                <div class="tabbable">
                                    <ul class="nav nav-pills nav-justified">
                                        <li class="active">
                                            <a href="#colored-justified-tab1" data-toggle="tab">Today</a>
                                        </li>
                                        <li>
                                            <a href="#colored-justified-tab2" data-toggle="tab">YesterDay</a>
                                        </li>
                                        <li>
                                            <a href="#colored-justified-tab3" data-toggle="tab">This Week</a>
                                        </li>
                                        <li>
                                            <a href="#colored-justified-tab4" data-toggle="tab">Last Month</a>
                                        </li>
                                        <li>
                                            <a href="#colored-justified-tab5" data-toggle="tab">3 Months</a>
                                        </li>
                                        <li>
                                            <a href="#colored-justified-tab6" data-toggle="tab">6 Months</a>
                                        </li>
                                        <li>
                                            <a href="#colored-justified-tab7" data-toggle="tab">This Year</a>
                                        </li>
                                        <li>
                                            <a href="#colored-justified-tab8" data-toggle="tab">Last Year</a>
                                        </li>
                                        <li>
                                            <a href="#colored-justified-tab9" data-toggle="tab">Custom</a>
                                        </li>
                                        {{--  <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                                                <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#colored-justified-tab3" data-toggle="tab">Dropdown tab</a>
                                                </li>
                                                <li><a href="#colored-justified-tab4" data-toggle="tab">Another tab</a>
                                                </li>
                                            </ul>
                                        </li>  --}}
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="colored-justified-tab1">
                                            <ul class="nav nav-pills nav-justified">
                                                <li class="active">
                                                    <a href="/revenue">Revenue</a>
                                                </li>
                                                <li>
                                                    <a href="/sales">Sales</a>
                                                </li>
                                                <li>
                                                    <a href="#">CAT</a>
                                                </li>
                                                <li>
                                                    <a href="#">Non-CAT</a>
                                                </li>
                                                <li>
                                                    <a href="#">Study Abroad</a>
                                                </li>
                                                <li>
                                                    <a href="#">UnderGrad</a>
                                                </li>
                                                <li>
                                                    <a href="#">GDPI</a>
                                                </li>
                                                <li>
                                                    <a href="#">Mocks</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="tab-pane" id="colored-justified-tab2">
                                            Food truck fixie locavore, accusamus mcsweeneys marfa nulla single-origin
                                            coffee squid laeggin.
                                        </div>

                                        <div class="tab-pane" id="colored-justified-tab3">
                                            DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.
                                            Williamsburg whatever.
                                        </div>

                                        <div class="tab-pane" id="colored-justified-tab4">
                                            Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic,
                                            assumenda labore aesthet.
                                        </div>
                                        <div class="tab-pane" id="colored-justified-tab5">
                                            Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic,
                                            assumenda labore aesthet.
                                        </div>
                                        <div class="tab-pane" id="colored-justified-tab6">
                                            Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic,
                                            assumenda labore aesthet.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Colored tabs -->

                    @yield('content')

                    <div id="myModal" class="modal fade" data-backdrop="static" data-keyboard="false" role="dialog"
                        aria-labelledby="myModalLabel" aria-hidden="true"></div>
                    <!-- Footer -->
                    @include('revenue.partials.footer')
                    <!-- /Footer -->

                </div>
                <!-- /Content area -->
            </div>
            <!-- /Main content -->
        </div>
    </div>
    <!-- /Page container -->
</body>

</html>
