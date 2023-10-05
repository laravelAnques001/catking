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
                            trigger: 'axis',
                            axisPointer: {
                                type: 'shadow'
                            },
                        },

                        // Enable drag recalculate
                        calculable: true,


                        // Horizontal axis
                        xAxis: [{
                            type: 'category',
                            data: ['GRE Intensive', 'GRE Turbo', 'IELTS Turbo',
                                'IELTS Intensive', 'IELTS Specialized (Academic)',
                                'IELTS Specialized (General)', 'IELTS Intensive (General)',
                                'IELTS Turbo (General)', 'GMAT Intensive', 'GMAT Turbo',
                                'GMAT Intensive', 'CAT+ GRE+ Application',
                                'CAT+ GMAT Applications', 'CAT+ GMAT Applications', 'CAT+ GMAT',
                                'CAT+ GRE', 'CAT 2024 + Gmat'
                            ]
                        }],

                        // Vertical axis
                        yAxis: [{
                            type: 'value'
                        }],

                        // Add series
                        series: [{
                                name: 'Today',
                                type: 'bar',
                                data: [500, 300, 350, 900, 600, 400, 150, 210, 400, 150, 330, 350,
                                    1000, 200, 350, 600, 250
                                ],
                                itemStyle: {
                                    normal: {
                                        color: '#D1E8FE',
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
                                name: 'Last Day',
                                type: 'bar',
                                data: [570, 400, 450, 1000, 500, 300, 100, 310, 500, 250, 430, 500,
                                    1100, 300, 250, 500, 100
                                ],
                                itemStyle: {
                                    normal: {
                                        color: '#3490EB',
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
                            data: ['GRE Intensive', 'GRE Turbo', 'IELTS Turbo',
                                'IELTS Intensive', 'IELTS Specialized (Academic)',
                                'IELTS Specialized (General)', 'IELTS Intensive (General)',
                                'IELTS Turbo (General)', 'GMAT Intensive', 'GMAT Turbo',
                                'GMAT Intensive', 'CAT+ GRE+ Application',
                                'CAT+ GMAT Applications', 'CAT+ GMAT Applications', 'CAT+ GMAT',
                                'CAT+ GRE', 'CAT 2024 + Gmat'
                            ]
                        }],

                        // Vertical axis
                        yAxis: [{
                            type: 'value'
                        }],

                        // Add series
                        series: [{
                                name: 'Today',
                                type: 'bar',
                                data: [7, 5, 4, 2, 3, 6, 2, 4, 4, 5, 3, 2, 4,2,1,2,1],
                                itemStyle: {
                                    normal: {
                                        color: '#6186FF',
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
                                name: 'Last Day',
                                type: 'bar',
                                data: [8, 6, 3, 3, 4, 5, 1, 2, 3, 6, 1, 4, 3,1,1,1,3],
                                itemStyle: {
                                    normal: {
                                        color: '#BFCEFF',
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
    <!-- Basic column chart -->
    <div class="panel panel-flat mt-10 mb-10 border-radius-15">
        <div class="panel-heading border-radius-15">
            <h5 class="panel-title">Total Revenue</h5>
            <div class="heading-elements">
                <div class="heading-text">
                    <span class="status-mark border-blue-theme bg-blue-theme position-left"></span>Today
                    <span class="status-mark border-blue-theme-300 bg-blue-theme-300 position-left ml-5"></span>Last Day
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
    <div class="panel panel-flat mt-10 mb-10 border-radius-15">
        <div class="panel-heading border-radius-15">
            <h5 class="panel-title">No Of Enrollment</h5>
            <div class="heading-elements">
                <div class="heading-text">
                    <span class="status-mark border-cornBlue-theme bg-cornBlue-theme position-left"></span>Today
                    <span class="status-mark border-cornBlue-theme-300 bg-cornBlue-theme-300 position-left ml-5"></span>Last
                    Day
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
@endsection
