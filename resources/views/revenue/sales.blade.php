@extends('revenue.layouts.app')
@push('head_script')
    <script type="text/javascript" src="{{ asset('assets/js/plugins/visualization/echarts/echarts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/charts/echarts/timeline_option.js') }}"></script>
    {{--  <script type="text/javascript" src="{{ asset('assets/js/charts/echarts/pies_donuts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/charts/echarts/columns_waterfalls.js') }}"></script>  --}}

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
                    var conversion_ratio = ec.init(document.getElementById('conversion_ratio'), limitless);
                    var call_hour_flow = ec.init(document.getElementById('call_hour_flow'), limitless);
                    var total_missed_calls = ec.init(document.getElementById('total_missed_calls'), limitless);

                    conversion_ratio_options = {

                        // Setup grid
                        grid: {
                            x: 30,
                            x2: 10,
                            y: 30,
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
                            data: ['Direct', 'Website', 'Sales Team', 'Ads', 'Free Cat Mocks',
                                'Free NMAT Mocks', 'Free CAT Works hops',
                                'Already Entrolled Other Institute', 'Intersted In EMI',
                                'Interested In Course Or Call Back Requests', 'NAIs Chat',
                                'Freebies On Website', 'Sulekha'
                            ]
                        }],

                        // Vertical axis
                        yAxis: [{
                            type: 'value'
                        }],

                        // Add series
                        series: [{
                                name: 'Leads',
                                type: 'bar',
                                data: [7.0, 23.2, 25.6, 76.7, 135.6, 162.2, 32.6, 20.0, 9.0, 26.4, 58.7,
                                    70.7, 175.6, 182.2, 48.7, 18.8
                                ],
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
                                name: 'Conversion Leads',
                                type: 'bar',
                                data: [9.0, 26.4, 58.7, 70.7, 175.6, 182.2, 48.7, 18.8, 7.0, 23.2, 25.6,
                                    76.7, 135.6, 162.2, 32.6, 20.0
                                ],
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
                    call_hour_flow_options = {

                        // Setup grid
                        grid: {
                            x: 30,
                            x2: 10,
                            y: 30,
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
                            data: ['10 AM', '11 AM', '12 PM', '1 PM', '2 PM', '3 PM', '4 PM',
                                '5 PM', '6 PM', '7 PM'
                            ]
                        }],

                        // Vertical axis
                        yAxis: [{
                            type: 'value'
                        }],

                        // Add series
                        series: [{
                                name: 'Leads',
                                type: 'bar',
                                data: [7.0, 23.2, 25.6, 76.7, 135.6, 162.2, 32.6, 20.0, 9.0, 26.4, 58.7,
                                    70.7, 175.6, 182.2, 48.7, 18.8
                                ],
                                itemStyle: {
                                    normal: {
                                        label: {
                                            show: true,
                                            textStyle: {
                                                fontWeight: 300
                                            }
                                        }
                                    }
                                }
                            },

                        ]
                    };
                    total_missed_calls_options = {

                        // Add tooltip
                        tooltip: {
                            trigger: 'item',
                            formatter: "{a} <br/>{b}: {c} ({d}%)"
                        },

                        // Add legend
                        legend: {
                            orient: 'vertical',
                            x: 'left',
                            data: ['Agent Disconnect', 'Caller Disconnect', 'System Disconnect']
                        },

                        // Display toolbox
                        {{--  toolbox: {
                            show: true,
                            orient: 'vertical',
                            feature: {
                                restore: {
                                    show: true,
                                    title: 'Restore'
                                },
                                saveAsImage: {
                                    show: true,
                                    title: 'Same as image',
                                    lang: ['Save']
                                }
                            }
                        },  --}}

                        // Enable drag recalculate
                        calculable: false,

                        // Add series
                        series: [{
                            name: 'Total Missed Calls',
                            type: 'pie',
                            radius: ['60%', '40%'],

                            // for funnel
                            x: '55%',
                            y: '7.5%',
                            width: '35%',
                            height: '85%',
                            funnelAlign: 'left',
                            max: 500,

                            data: [{
                                    value: 60,
                                    name: '30'
                                },
                                {
                                    value: 36,
                                    name: '18'
                                },
                                {
                                    value: 2,
                                    name: '4'
                                },
                            ]
                        }]
                    };

                    // Apply options
                    // ------------------------------
                    conversion_ratio.setOption(conversion_ratio_options);
                    call_hour_flow.setOption(call_hour_flow_options);
                    total_missed_calls.setOption(total_missed_calls_options);

                    // Resize charts
                    // ------------------------------

                    window.onresize = function() {
                        setTimeout(function() {
                            conversion_ratio.resize();
                            call_hour_flow.resize();
                            total_missed_calls.resize();
                        }, 200);
                    }
                }
            );
        });
    </script>
@endpush
@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="panel">
                <div class="panel-heading bg-primary">
                    <h5 class="panel-title">Total Calls</h5>
                    <div class="heading-elements">
                        <div class="heading-text h5">
                            826
                        </div>
                    </div>
                </div>
                <table class="table datatable-basic table-bordered">
                    <tbody>
                        <tr>
                            <td>Total Connected Calls</td>
                            <td>736</td>
                        </tr>
                        <tr>
                            <td>Total Unanswered Incoming Calls</td>
                            <td>82</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel ">
                <div class="panel-heading bg-primary">
                    <h5 class="panel-title">Leads</h5>
                    <div class="heading-elements">
                        <div class="heading-text">
                        </div>
                    </div>
                </div>
                <table class="table datatable-basic table-bordered">
                    <tbody>
                        <tr>
                            <td>Total Leads</td>
                            <td>85</td>
                            <td>100%</td>
                        </tr>
                        <tr>
                            <td>Untouched Leads</td>
                            <td class="text-danger">13</td>
                            <td class="text-danger">15.29%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel">
                <div class="panel-heading bg-primary">
                    <h5 class="panel-title">Converted Leads</h5>
                    <div class="heading-elements">
                        <div class="heading-text h5">
                        </div>
                    </div>
                </div>
                <table class="table datatable-basic table-bordered">
                    <tbody>
                        <tr>
                            <td>Agent Based Leads</td>
                            <td>56</td>
                        </tr>
                        <tr>
                            <td>Direct Leads</td>
                            <td>16</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row ">
        <h5 class="ml-15">Inbound Calls</h5>
        <div class="col-md-1">
            <div class="panel pt-5 pb-5 text-center">
                <h5>Total Calls</h5>
                <h5>120</h5>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel pt-5 pb-5 text-center">
                <h5>Connected Calls</h5>
                <h5>100</h5>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel pt-5 pb-5 text-center">
                <h5>Missed Calls</h5>
                <h5>20</h5>
            </div>
        </div>
        <div class="col-md-1">
            <div class="panel pt-5 pb-5 text-center">
                <h5>Calls Queue</h5>
                <h5>8</h5>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel pt-5 pb-5 text-center">
                <h5>Duration Hrs</h5>
                <h5>10.2</h5>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel pt-5 pb-5 text-center">
                <h5>Avg Duration In Min</h5>
                <h5>1.35</h5>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel pt-5 pb-5 text-center">
                <h5>Number Of Agents</h5>
                <h5>16</h5>
            </div>
        </div>
    </div>

    <div class="row ">
        <h5 class="ml-15">Outbound Calls</h5>
        <div class="col-md-1">
            <div class="panel pt-5 pb-5 text-center">
                <h5>Total Calls</h5>
                <h5>120</h5>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel pt-5 pb-5 text-center">
                <h5>Connected Calls</h5>
                <h5>100</h5>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel pt-5 pb-5 text-center">
                <h5>Missed Calls</h5>
                <h5>20</h5>
            </div>
        </div>
        <div class="col-md-1">
            <div class="panel pt-5 pb-5 text-center">
                <h5>Calls Queue</h5>
                <h5>8</h5>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel pt-5 pb-5 text-center">
                <h5>Duration Hrs</h5>
                <h5>10.2</h5>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel pt-5 pb-5 text-center">
                <h5>Avg Duration In Min</h5>
                <h5>1.35</h5>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel pt-5 pb-5 text-center">
                <h5>Number Of Agents</h5>
                <h5>16</h5>
            </div>
        </div>
    </div>

    <div class="row">
        <h5 class="ml-15">Progressive Calls</h5>
        <div class="col-md-1">
            <div class="panel pt-5 pb-5 text-center">
                <h5>Total Calls</h5>
                <h5>120</h5>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel pt-5 pb-5 text-center">
                <h5>Connected Calls</h5>
                <h5>100</h5>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel pt-5 pb-5 text-center">
                <h5>Missed Calls</h5>
                <h5>20</h5>
            </div>
        </div>
        <div class="col-md-1">
            <div class="panel pt-5 pb-5 text-center">
                <h5>Calls Queue</h5>
                <h5>8</h5>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel pt-5 pb-5 text-center">
                <h5>Duration Hrs</h5>
                <h5>10.2</h5>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel pt-5 pb-5 text-center">
                <h5>Avg Duration In Min</h5>
                <h5>1.35</h5>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel pt-5 pb-5 text-center">
                <h5>Number Of Agents</h5>
                <h5>16</h5>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <!-- Basic column chart -->
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">Conversion Ratio</h5>
                    <div class="heading-elements">
                        <div class="heading-text">
                            <span class="status-mark border-info position-left"></span>Leads
                            <span class="status-mark border-success position-left ml-5"></span>Conversion Leads
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="chart-container">
                        <div class="chart has-fixed-height" id="conversion_ratio"></div>
                    </div>
                </div>
            </div>
            <!-- /basic column chart -->
        </div>
        <div class="col-md-4">
            <!-- Basic column chart -->
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">Call Hour Flow</h5>
                    <div class="heading-elements">
                        <div class="heading-text">576</div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="chart-container">
                        <div class="chart has-fixed-height" id="call_hour_flow"></div>
                    </div>
                </div>
            </div>
            <!-- /basic column chart -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <!-- Bordered panel body table -->
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">Per Agent Conversion</h5>
                </div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-xxs">
                            <thead>
                                <tr>
                                    <th class="col-lg-1">Sr.No</th>
                                    <th class="col-lg-4">Agent Name</th>
                                    <th class="col-lg-1">Leads</th>
                                    <th class="col-lg-1">Converted Leads</th>
                                    <th class="col-lg-1">Untouched Leads</th>
                                    <th class="col-lg-1">Avg Talk Time</th>
                                    <th class="col-lg-3">
                                        <span class="status-mark border-info position-left"></span>Leads <br>
                                        <span class="status-mark border-success position-left"></span>Conversion Leads <br>
                                        <div class="progress progress-xxs">
                                            <div class="progress-bar progress-bar-info" style="width:100%">
                                                <span class="sr-only">80% Complete</span>
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>Deeksha Kapoor</td>
                                    <td>17</td>
                                    <td>12</td>
                                    <td class="text-danger">5</td>
                                    <td>11.6 min</td>
                                    <td>
                                        <div class="progress progress-xxs">
                                            <div class="progress-bar progress-bar-info" style="width: 15%">
                                                <span class="sr-only">15% Complete</span>
                                            </div>
                                        </div>
                                        <div class="progress progress-xxs mt-5">
                                            <div class="progress-bar progress-bar-success" style="width: 70%">
                                                <span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>02</td>
                                    <td>Farnaz Khan</td>
                                    <td>17</td>
                                    <td>11</td>
                                    <td class="text-danger">16</td>
                                    <td>5.5 min</td>
                                    <td>
                                        <div class="progress progress-xxs">
                                            <div class="progress-bar progress-bar-info" style="width: 35%">
                                                <span class="sr-only">35% Complete</span>
                                            </div>
                                        </div>
                                        <div class="progress progress-xxs mt-5">
                                            <div class="progress-bar progress-bar-success" style="width: 90%">
                                                <span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>03</td>
                                    <td>Vanshita Hiranandi</td>
                                    <td>15</td>
                                    <td>10</td>
                                    <td class="text-danger">5</td>
                                    <td>5.5 min</td>
                                    <td>
                                        <div class="progress progress-xxs">
                                            <div class="progress-bar progress-bar-info" style="width: 45%">
                                                <span class="sr-only">45% Complete</span>
                                            </div>
                                        </div>
                                        <div class="progress progress-xxs mt-5">
                                            <div class="progress-bar progress-bar-success" style="width: 75%">
                                                <span class="sr-only">75% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>01</td>
                                    <td>Deeksha Kapoor</td>
                                    <td>17</td>
                                    <td>12</td>
                                    <td class="text-danger">5</td>
                                    <td>11.6 min</td>
                                    <td>
                                        <div class="progress progress-xxs">
                                            <div class="progress-bar progress-bar-info" style="width: 15%">
                                                <span class="sr-only">15% Complete</span>
                                            </div>
                                        </div>
                                        <div class="progress progress-xxs mt-5">
                                            <div class="progress-bar progress-bar-success" style="width: 70%">
                                                <span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>02</td>
                                    <td>Farnaz Khan</td>
                                    <td>17</td>
                                    <td>11</td>
                                    <td class="text-danger">16</td>
                                    <td>5.5 min</td>
                                    <td>
                                        <div class="progress progress-xxs">
                                            <div class="progress-bar progress-bar-info" style="width: 35%">
                                                <span class="sr-only">35% Complete</span>
                                            </div>
                                        </div>
                                        <div class="progress progress-xxs mt-5">
                                            <div class="progress-bar progress-bar-success" style="width: 90%">
                                                <span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>03</td>
                                    <td>Vanshita Hiranandi</td>
                                    <td>15</td>
                                    <td>10</td>
                                    <td class="text-danger">5</td>
                                    <td>5.5 min</td>
                                    <td>
                                        <div class="progress progress-xxs">
                                            <div class="progress-bar progress-bar-info" style="width: 45%">
                                                <span class="sr-only">45% Complete</span>
                                            </div>
                                        </div>
                                        <div class="progress progress-xxs mt-5">
                                            <div class="progress-bar progress-bar-success" style="width: 75%">
                                                <span class="sr-only">75% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /bordered panel body table -->

        </div>

        <div class="col-md-4">
            <!-- Basic column chart -->
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">Call Timing</h5>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <th>Time Of Calls</th>
                            <th>Number Of Calls</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>09:00 Am - 09:00 Pm</td>
                                <td>576</td>
                            </tr>
                            <tr>
                                <td>09:00 Pm - 09:00 Am<br>
                                    (After Office Hours)
                                </td>
                                <td>120</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="panel-heading">
                    <h5 class="panel-title">Total Missed Calls</h5>
                    <div class="heading-elements">
                        <div class="heading-text h5">
                            50
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="chart-container">
                        <div class="chart has-fixed-height" id="total_missed_calls"></div>
                    </div>
                </div>
            </div>
            <!-- /basic column chart -->
        </div>
    </div>
@endsection
