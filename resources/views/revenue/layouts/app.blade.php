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
                            <h4>
                                {{--  <i class="icon-arrow-left52 position-left"></i>  --}}
                                <span class="text-semibold">Welcome to CEO Revenue Dashboard</span>
                                <img src="{{ asset('assets/images/icon/hand.png') }}" alt="hii" class="ml-5">
                            </h4>
                        </div>
                    </div>

                    <!-- Colored tabs -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tabbable">
                                <ul class="nav nav-pills nav-justified">
                                    <li class="active  border-radius-15">
                                        <a href="#colored-justified-tab1"
                                            class="text-transform-unset btn-back-color border-radius-15"
                                            data-toggle="tab">Today</a>
                                    </li>
                                    <li>
                                        <a href="#colored-justified-tab2" class="text-transform-unset btn-back-color"
                                            data-toggle="tab">YesterDay</a>
                                    </li>
                                    <li>
                                        <a href="#colored-justified-tab3" class="text-transform-unset btn-back-color"
                                            data-toggle="tab">This
                                            Week</a>
                                    </li>
                                    <li>
                                        <a href="#colored-justified-tab4" class="text-transform-unset btn-back-color"
                                            data-toggle="tab">Last
                                            Month</a>
                                    </li>
                                    <li>
                                        <a href="#colored-justified-tab5" class="text-transform-unset btn-back-color"
                                            data-toggle="tab">3
                                            Months</a>
                                    </li>
                                    <li>
                                        <a href="#colored-justified-tab6" class="text-transform-unset btn-back-color"
                                            data-toggle="tab">6
                                            Months</a>
                                    </li>
                                    <li>
                                        <a href="#colored-justified-tab7" class="text-transform-unset btn-back-color"
                                            data-toggle="tab">This
                                            Year</a>
                                    </li>
                                    <li>
                                        <a href="#colored-justified-tab8" class="text-transform-unset btn-back-color"
                                            data-toggle="tab">Last
                                            Year</a>
                                    </li>
                                    <li>
                                        <a href="#colored-justified-tab9" class="text-transform-unset btn-back-color"
                                            data-toggle="tab">Custom</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane active" id="colored-justified-tab1">
                                        <ul class="nav nav-pills nav-justified">
                                            <li
                                                class="{{ Route::currentRouteName() == 'ceo-revenue.revenue' ? 'active' : ' border-radius-15' }}">
                                                <a href="{{ route('ceo-revenue.revenue') }}"
                                                    class="{{ Route::currentRouteName() == 'ceo-revenue.revenue' ? 'active-revenue text-transform-unset btn-back-revenue' : 'text-transform-unset btn-back-revenue  border-radius-15' }}">Revenue</a>
                                            </li>
                                            <li
                                                class="{{ Route::currentRouteName() == 'ceo-revenue.sales' ? 'active' : '' }}">
                                                <a href="{{ route('ceo-revenue.sales') }}"
                                                    class="{{ Route::currentRouteName() == 'ceo-revenue.sales' ? 'active-revenue text-transform-unset btn-back-revenue' : 'text-transform-unset btn-back-revenue' }}">Sales</a>
                                            </li>
                                            <li
                                                class="{{ Route::currentRouteName() == 'ceo-revenue.cat' ? 'active' : '' }}">
                                                <a href="{{ route('ceo-revenue.cat') }}"
                                                    class="{{ Route::currentRouteName() == 'ceo-revenue.cat' ? 'active-revenue text-transform-unset btn-back-revenue' : 'text-transform-unset btn-back-revenue' }}">CAT</a>
                                            </li>
                                            <li
                                                class="{{ Route::currentRouteName() == 'ceo-revenue.non-cat' ? 'active' : '' }}">
                                                <a href="{{ route('ceo-revenue.non-cat') }}"
                                                    class="{{ Route::currentRouteName() == 'ceo-revenue.non-cat' ? 'active-revenue text-transform-unset btn-back-revenue' : 'text-transform-unset btn-back-revenue' }}">Non-CAT</a>
                                            </li>
                                            <li
                                                class="{{ Route::currentRouteName() == 'ceo-revenue.study-abroad' ? 'active' : '' }}">
                                                <a href="{{ route('ceo-revenue.study-abroad') }}"
                                                    class="{{ Route::currentRouteName() == 'ceo-revenue.study-abroad' ? 'active-revenue text-transform-unset btn-back-revenue' : 'text-transform-unset btn-back-revenue' }}">Study
                                                    Abroad</a>
                                            </li>
                                            <li
                                                class="{{ Route::currentRouteName() == 'ceo-revenue.under-grad' ? 'active' : '' }}">
                                                <a href="{{ route('ceo-revenue.under-grad') }}"
                                                    class="{{ Route::currentRouteName() == 'ceo-revenue.under-grad' ? 'active-revenue text-transform-unset btn-back-revenue' : 'text-transform-unset btn-back-revenue' }}">UnderGrad</a>
                                            </li>
                                            <li
                                                class="{{ Route::currentRouteName() == 'ceo-revenue.GDPI' ? 'active' : '' }}">
                                                <a href="{{ route('ceo-revenue.GDPI') }}"
                                                    class="{{ Route::currentRouteName() == 'ceo-revenue.GDPI' ? 'active-revenue text-transform-unset btn-back-revenue' : 'text-transform-unset btn-back-revenue' }}">GDPI</a>
                                            </li>
                                            <li
                                                class="{{ Route::currentRouteName() == 'ceo-revenue.mocks' ? 'active' : '' }}">
                                                <a href="{{ route('ceo-revenue.mocks') }}"
                                                    class="{{ Route::currentRouteName() == 'ceo-revenue.mocks' ? 'active-revenue text-transform-unset btn-back-revenue' : 'text-transform-unset btn-back-revenue' }}">Mocks</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="tab-pane" id="colored-justified-tab2">
                                        Food truck fixie locavore, accusamus mcsweeneys marfa nulla single-origin
                                        coffee squid laeggin.
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
