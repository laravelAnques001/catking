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
                    {{--  var nested_pie = ec.init(document.getElementById('nested_pie'), limitless);  --}}
                    var basic_columns = ec.init(document.getElementById('basic_columns'), limitless);

                    {{--  nested_pie_options = {

                        // Add tooltip
                        tooltip: {
                            trigger: 'item',
                            formatter: "{a} <br/>{b}: {c} ({d}%)"
                        },

                        // Add legend
                        legend: {
                            show: false,
                            orient: 'vertical',
                            x: 'left',
                            data: ['Italy', 'Spain', 'Austria', 'Germany', 'Poland', 'Denmark', 'Hungary',
                                'Portugal', 'France', 'Netherlands'
                            ]
                        },

                        // Display toolbox
                        toolbox: {
                            show: false,
                            orient: 'vertical',
                            feature: {
                                mark: {
                                    show: false,
                                    title: {
                                        mark: 'Markline switch',
                                        markUndo: 'Undo markline',
                                        markClear: 'Clear markline'
                                    }
                                },
                                dataView: {
                                    show: false,
                                    readOnly: false,
                                    title: 'View data',
                                    lang: ['View chart data', 'Close', 'Update']
                                },
                                magicType: {
                                    show: false,
                                    title: {
                                        pie: 'Switch to pies',
                                        funnel: 'Switch to funnel',
                                    },
                                    type: ['pie', 'funnel']
                                },
                                restore: {
                                    show: false,
                                    title: 'Restore'
                                },
                                saveAsImage: {
                                    show: false,
                                    title: 'Same as image',
                                    lang: ['Save']
                                }
                            }
                        },

                        // Enable drag recalculate
                        calculable: false,

                        // Add series
                        series: [{
                            name: 'Countries',
                            type: 'pie',
                            radius: ['50%', '35%'],

                            // for funnel
                            x: '55%',
                            y: '7.5%',
                            width: '35%',
                            height: '85%',
                            funnelAlign: 'left',
                            max: 1048,

                            data: [{
                                    value: 535,
                                    name: 'Italy'
                                },
                                {
                                    value: 310,
                                    name: 'Germany'
                                },
                                {
                                    value: 234,
                                    name: 'Poland'
                                },
                                {
                                    value: 135,
                                    name: 'Denmark'
                                },
                                {
                                    value: 948,
                                    name: 'Hungary'
                                },
                                {
                                    value: 251,
                                    name: 'Portugal'
                                },
                                {
                                    value: 147,
                                    name: 'France'
                                },
                                {
                                    value: 202,
                                    name: 'Netherlands'
                                }
                            ]
                        }]
                    };  --}}


                    basic_columns_options = {

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
                    {{--  nested_pie.setOption(nested_pie_options);  --}}
                    basic_columns.setOption(basic_columns_options);

                    // Resize charts
                    // ------------------------------

                    window.onresize = function() {
                        setTimeout(function() {
                            {{--  nested_pie.resize();  --}}
                            basic_columns.resize();
                        }, 200);
                    }
                }
            );

            // donut multiple pie
            donutMultiple('#d3-donut-multiple', 110, 10);

            function donutMultiple(element, radius, margin) {
                var data = [
                    [11975, 5871, 8916, 2868]
                ];
                var colors = d3.scale.category10();
                var svg = d3.select(element)
                    .selectAll("svg")
                    .data(data)
                    .enter()
                    .append("svg")
                    .attr("width", (radius + margin) * 2)
                    .attr("height", (radius + margin) * 2)
                    .append("g")
                    .attr("class", "d3-arc")
                    .attr("transform", "translate(" + (radius + margin) + "," + (radius + margin) + ")");

                var arc = d3.svg.arc()
                    .innerRadius(radius / 1.75)
                    .outerRadius(radius);

                svg.selectAll("path")
                    .data(d3.layout.pie())
                    .enter()
                    .append("path")
                    .attr("d", arc)
                    .style("stroke", "#fff")
                    .style("fill", function(d, i) {
                        return colors(i);
                    });
            }
        });
    </script>
@endpush
@section('content')
    <!-- Application status -->
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-flat border-radius-15 mt-20">
                <div class="panel-heading border-radius-15">
                    <h6 class="panel-title">Enrollments</h6>
                    <div class="heading-elements">
                        <div class="heading-text">
                            <span class="status-mark border-primary position-left"></span>This Year
                            <span class="status-mark border-primary-300 position-left ml-5"></span>Last Year
                        </div>
                    </div>
                </div>

                <div class="panel-body">
                    <ul class="progress-list">
                        <li>
                            <label>Total No Of Enrollment <span>80%</span></label>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-primary" style="width: 80%">
                                    <span class="sr-only">80% Complete</span>
                                </div>
                            </div>
                            <div class="progress progress-xxs mt-5">
                                <div class="progress-bar progress-bar-primary" style="width: 70%" data-tor-tooltip="25%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" title="70%">
                                    <span class="sr-only">70% Complete</span>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <ul class="progress-list mt-15">
                        <li>
                            <label>Enrollments Through installments & EMI <span>50%</span></label>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-info" style="width: 50%">
                                    <span class="sr-only">50% Complete</span>
                                </div>
                            </div>
                            <div class="progress progress-xxs mt-5">
                                <div class="progress-bar progress-bar-success" style="width: 30%">
                                    <span class="sr-only">30% Complete</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="panel panel-flat border-radius-15 mt-20">
                <div class="panel-heading border-radius-15">
                    <h6 class="panel-title">Revenue</h6>

                    <div class="heading-elements">
                        <div class="heading-text">
                            <span class="status-mark border-info position-left"></span>This Year
                            <span class="status-mark border-success position-left ml-5"></span>Last Year
                        </div>
                    </div>
                </div>

                <div class="panel-body">
                    <ul class="progress-list">
                        <li>
                            <label>Total Revenue <span>Target $32,000</span></label>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-info" style="width: 80%">
                                    <span class="sr-only">80% Complete</span>
                                </div>
                            </div>
                            <div class="progress progress-xxs mt-5">
                                <div class="progress-bar progress-bar-success" style="width: 70%">
                                    <span class="sr-only">70% Complete</span>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <ul class="progress-list mt-15">
                        <li>
                            <label>Revenue From Installments & EMI <span>Target $32,000</span></label>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-info" style="width: 50%">
                                    <span class="sr-only">50% Complete</span>
                                </div>
                            </div>
                            <div class="progress progress-xxs mt-5">
                                <div class="progress-bar progress-bar-success" style="width: 30%">
                                    <span class="sr-only">30% Complete</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <!-- Nested pie charts -->
            <div class="panel panel-flat border-radius-15 mt-20">
                <div class="panel-heading border-radius-15">
                    <h5 class="panel-title">Total No Of Enrollment </h5>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Courses Name</th>
                                            <th>Leads</th>
                                            <th>Enrollment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>CAT</td>
                                            <td>54</td>
                                            <td>30</td>
                                        </tr>
                                        <tr>
                                            <td>NON-CAT</td>
                                            <td>42</td>
                                            <td>25</td>
                                        </tr>
                                        <tr>
                                            <td>Study Abroad</td>
                                            <td>36</td>
                                            <td>20</td>
                                        </tr>
                                        <tr>
                                            <td>UnderGrad</td>
                                            <td>23</td>
                                            <td>12</td>
                                        </tr>
                                        <tr>
                                            <td>GDPI</td>
                                            <td>19</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td>Mocks</td>
                                            <td>14</td>
                                            <td>5</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel-body">
                            <div class="chart-container text-center">
                                <div class="chart svg-inline" id="d3-donut-multiple"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /nested pie charts -->
        </div>

        <div class="col-md-6">
            <!-- Basic column chart -->
            <div class="panel panel-flat border-radius-15 mt-20">
                <div class="panel-heading border-radius-15">
                    <h5 class="panel-title">Total Revenue</h5>
                    <div class="heading-elements">
                        <div class="heading-text">
                            <span class="status-mark border-info position-left"></span>This Day
                            <span class="status-mark border-success position-left ml-5"></span>Previous Day
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="chart-container">
                        <div class="chart has-fixed-height" id="basic_columns"></div>
                    </div>
                </div>
            </div>
            <!-- /basic column chart -->
        </div>
    </div>

    <div class="row">

        <div class="col-md-6">
            <!-- Basic column chart -->
            <div class="panel panel-flat border-radius-15 mt-20">
                <div class="panel-heading border-radius-15">
                    <h5 class="panel-title">Failed Order</h5>

                    <div class="heading-elements">
                        <div class="heading-text">
                            <a href="{{ route('ceo-revenue.revenue-model') }}" class="ajaxviewmodel">
                                {{--  <i class="icon-info22 position-right"></i>  --}}
                                <img src="{{ asset('assets/images/icon/info.png') }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <ul class="progress-list">
                        <li>
                            <label>Failed Order With Successful Repeat Purchase <span>25</span></label>
                        </li>
                        <li class="mt-20">
                            <label>Actual Failed Orders The Ones Who Did Not Purchase <span>10</span></label>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /basic column chart -->
        </div>
    </div>



    <!-- /application status -->
@endsection
