@extends('revenue.layouts.app')
@push('head_script')
    <script type="text/javascript" src="{{ asset('assets/js/plugins/visualization/d3/d3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/visualization/echarts/echarts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/charts/echarts/timeline_option.js') }}"></script>

    <script>
        $(function() {
            require.config({
                paths: {
                    echarts: 'assets/js/plugins/visualization/echarts'
                }
            });
            require(
                [
                    'echarts',
                    'echarts/theme/limitless',
                    'echarts/chart/pie',
                    'echarts/chart/funnel',
                    'echarts/chart/bar',
                    'echarts/chart/line'
                ],
                // Charts setup
                function(ec, limitless) {
                    // Initialize charts
                    // ------------------------------
                    var total_revenue = ec.init(document.getElementById('total_revenue'), limitless);
                    var no_of_enrollment = ec.init(document.getElementById('no_of_enrollment'), limitless);

                    total_revenue_options = {

                        // Setup grid
                        grid: {
                            x: 40,
                            x2: 40,
                            y: 35,
                            y2: 25
                        },

                        // Add tooltip
                        tooltip: {
                            trigger: 'axis'
                        },

                        // Enable drag recalculate
                        calculable: true,

                        // Horizontal axis
                        xAxis: [{
                            type: 'category',
                            data: ['CAT', 'Non-CAT', 'StudyAbroad', 'UnderGrad', 'GDPI', 'Mocks']
                        }],

                        // Vertical axis
                        yAxis: [{
                            type: 'value'
                        }],

                        // Add series
                        series: [{
                                name: 'Today Day',
                                type: 'bar',
                                data: [7.0, 23.2, 25.6, 76.7, 135.6, 162.2, 32.6, 20.0],
                                itemStyle: {
                                    normal: {
                                        label: {
                                            show: true,
                                            textStyle: {
                                                fontWeight: 500
                                            }
                                        }
                                    }
                                }
                            },
                            {
                                name: 'Previous Day',
                                type: 'bar',
                                data: [9.0, 26.4, 58.7, 70.7, 175.6, 182.2, 48.7, 18.8],
                                itemStyle: {
                                    normal: {
                                        label: {
                                            show: true,
                                            textStyle: {
                                                fontWeight: 500
                                            }
                                        }
                                    }
                                }
                            }
                        ]
                    };

                    no_of_enrollment_options = {

                        // Setup grid
                        grid: {
                            x: 40,
                            x2: 40,
                            y: 35,
                            y2: 25
                        },

                        // Add tooltip
                        tooltip: {
                            trigger: 'axis'
                        },

                        // Enable drag recalculate
                        calculable: true,

                        // Horizontal axis
                        xAxis: [{
                            type: 'category',
                            data: ['CAT', 'Non-CAT', 'StudyAbroad', 'UnderGrad', 'GDPI', 'Mocks']
                        }],

                        // Vertical axis
                        yAxis: [{
                            type: 'value'
                        }],

                        // Add series
                        series: [{
                                name: 'Today Day',
                                type: 'bar',
                                data: [7.0, 23.2, 25.6, 76.7, 135.6, 162.2, 32.6, 20.0],
                                itemStyle: {
                                    normal: {
                                        label: {
                                            show: true,
                                            textStyle: {
                                                fontWeight: 500
                                            }
                                        }
                                    }
                                }
                            },
                            {
                                name: 'Previous Day',
                                type: 'bar',
                                data: [9.0, 26.4, 58.7, 70.7, 175.6, 182.2, 48.7, 18.8],
                                itemStyle: {
                                    normal: {
                                        label: {
                                            show: true,
                                            textStyle: {
                                                fontWeight: 500
                                            }
                                        }
                                    }
                                }
                            }
                        ]
                    };


                    // Apply options
                    // ------------------------------
                    total_revenue.setOption(total_revenue_options);
                    no_of_enrollment.setOption(no_of_enrollment_options);

                    // Resize charts
                    // ------------------------------

                    window.onresize = function() {
                        setTimeout(function() {
                            total_revenue.resize();
                            no_of_enrollment.resize();
                        }, 200);
                    }
                }
            );

        });
    </script>
@endpush
@section('content')
    {{--  <div class="row">
        <div class="col-md-12">  --}}
            <!-- Basic column chart -->
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">Total Revenue</h5>
                    <div class="heading-elements">
                        <div class="heading-text">
                            <span class="status-mark border-info position-left"></span>Today
                            <span class="status-mark border-success position-left ml-5"></span>Last Day
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="chart-container">
                        <div class="chart has-fixed-height" id="total_revenue"></div>
                    </div>
                </div>
            </div>
            <!-- /basic column chart -->

            <!-- Basic column chart -->
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">No Of Enrollment</h5>
                    <div class="heading-elements">
                        <div class="heading-text">
                            <span class="status-mark border-info position-left"></span>Today
                            <span class="status-mark border-success position-left ml-5"></span>Last Day
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="chart-container">
                        <div class="chart has-fixed-height" id="no_of_enrollment"></div>
                    </div>
                </div>
            </div>
            <!-- /basic column chart -->
        {{--  </div>
    </div>  --}}
@endsection
