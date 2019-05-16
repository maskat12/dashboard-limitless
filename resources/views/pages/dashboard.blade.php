@extends('layouts.app')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="card text-center">
                        <div class="card-header bg-light">
                            <h6 class="card-title">TOTAL POWER</h6>
                        </div>
                        <div class="card-body text-center">
                            <span class="font-size-lg text-uppercase font-weight-bold">10000 KWH</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card text-center">
                        <div class="card-header bg-light">
                            <h6 class="card-title">TOTAL ENERGY</h6>
                        </div>
                        <div class="card-body text-center">
                            <span class="font-size-lg text-uppercase font-weight-bold">10000 KWH</span>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <span class="font-size-sm text-uppercase font-weight-semibold">From</span>
                            <span class="font-size-sm text-uppercase font-weight-semibold">Nov 12, 11:25 am</span>
                            <span class="font-size-sm text-uppercase font-weight-semibold">To</span>
                            <span class="font-size-sm text-uppercase font-weight-semibold">Today</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- POWER CONSUMPTION PIE CHART -->
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-header bg-light">
                    <h6 class="card-title">POWER CONSUMPTION</h6>
                </div>
                <div class="card-body text-center">
                    <div class="chart-container">
                        <div class="d-inline-block" id="c3-pie-chart"></div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <span class="font-size-sm text-uppercase font-weight-semibold">From</span>
                    <span class="font-size-sm text-uppercase font-weight-semibold">Nov 12, 11:25 am</span>
                    <span class="font-size-sm text-uppercase font-weight-semibold">To</span>
                    <span class="font-size-sm text-uppercase font-weight-semibold">Today</span>
                </div>
            </div>
        </div>
        <!-- /POWER CONSUMPTION PIE CHART -->

        <!-- ENERGY CONSUMPTION PIE CHART -->
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-header bg-light">
                    <h6 class="card-title">ENERGY CONSUMPTION</h6>
                </div>
                <div class="card-body text-center">
                    <div class="chart-container">
                        <div class="d-inline-block" id="c3-pie-chart2"></div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <span class="font-size-sm text-uppercase font-weight-semibold">From</span>
                    <span class="font-size-sm text-uppercase font-weight-semibold">Nov 12, 11:25 am</span>
                    <span class="font-size-sm text-uppercase font-weight-semibold">To</span>
                    <span class="font-size-sm text-uppercase font-weight-semibold">Today</span>
                </div>
            </div>
        </div>
        <!-- /ENERGY CONSUMPTION PIE CHART -->
    </div>
    <div class="row">
        <!-- TOTAL POWER CONSUMPTION LAST 24H LINE CHART -->
        <div class="col-md-6">
            <div class="card text-center">
                <div class="card-header bg-light">
                    <h6 class="card-title">TOTAL POWER CONSUMPTION LAST 24H</h6>
                </div>
                <div class="card-body text-center">
                    <div class="chart-container">
                        <div class="d-inline-block" id="c3-line-chart"></div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <span class="font-size-sm text-uppercase font-weight-semibold">From</span>
                    <span class="font-size-sm text-uppercase font-weight-semibold">Nov 12, 11:25 am</span>
                    <span class="font-size-sm text-uppercase font-weight-semibold">To</span>
                    <span class="font-size-sm text-uppercase font-weight-semibold">Today</span>
                </div>
            </div>
        </div>
        <!-- /TOTAL POWER CONSUMPTION LAST 24H LINE CHART -->
        <!-- TOTAL ENERGY CONSUMPTION LAST 7 DAYS BAR CHART -->
        <div class="col-md-6">
            <div class="card text-center">
                <div class="card-header bg-light">
                    <h6 class="card-title">TOTAL ENERGY CONSUMPTION LAST 7 DAYS</h6>
                </div>
                <div class="card-body text-center">
                    <div class="chart-container">
                        <div class="chart" id="c3-bar-stacked-chart"></div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <span class="font-size-sm text-uppercase font-weight-semibold">From</span>
                    <span class="font-size-sm text-uppercase font-weight-semibold">Nov 12, 11:25 am</span>
                    <span class="font-size-sm text-uppercase font-weight-semibold">To</span>
                    <span class="font-size-sm text-uppercase font-weight-semibold">Today</span>
                </div>
            </div>
        </div>
        <!-- /TOTAL ENERGY CONSUMPTION LAST 7 DAYS BAR CHART -->
    </div>
</div>
@endsection
@section('javascript')
<script>
    /* ------------------------------------------------------------------------------
 *
 *  # C3.js - lines and areas
 *
 *  Demo JS code for c3_lines_areas.html page
 *
 * ---------------------------------------------------------------------------- */


// Setup module
// ------------------------------

var С3LinesAreas = function() {


//
// Setup module components
//

// Chart
var _linesAreasExamples = function() {
    if (typeof c3 == 'undefined') {
        console.warn('Warning - c3.min.js is not loaded.');
        return;
    }
    // Define charts elements
    var pie_chart_element = document.getElementById('c3-pie-chart');
    var pie_chart_element2 = document.getElementById('c3-pie-chart2');
    var line_chart_element = document.getElementById('c3-line-chart');
    var bar_stacked_chart_element = document.getElementById('c3-bar-stacked-chart');
    // Pie chart
    if(pie_chart_element) {

        // Generate chart
        var pie_chart = c3.generate({
            bindto: pie_chart_element,
            size: { width: 350 },
            color: {
                pattern: ['#3F51B5', '#FF9800', '#4CAF50', '#00BCD4', '#F44336']
            },
            data: {
                columns: [
                    ['Personal', 30],
                    ['Group', 120],
                ],
                type : 'pie'
            }
        });

        // Change data
        setTimeout(function () {
            pie_chart.load({
                columns: [
                    ["Wisuda", 0.2, 0.2, 0.2, 0.2, 0.2, 0.4, 0.3, 0.2, 0.2, 0.1, 0.2, 0.2, 0.1, 0.1, 0.2, 0.4, 0.4, 0.3, 0.3, 0.3, 0.2, 0.4, 0.2, 0.5, 0.2, 0.2, 0.4, 0.2, 0.2, 0.2, 0.2, 0.4, 0.1, 0.2, 0.2, 0.2, 0.2, 0.1, 0.2, 0.2, 0.3, 0.3, 0.2, 0.6, 0.4, 0.3, 0.2, 0.2, 0.2, 0.2],
                    ["Lulus", 1.4, 1.5, 1.5, 1.3, 1.5, 1.3, 1.6, 1.0, 1.3, 1.4, 1.0, 1.5, 1.0, 1.4, 1.3, 1.4, 1.5, 1.0, 1.5, 1.1, 1.8, 1.3, 1.5, 1.2, 1.3, 1.4, 1.4, 1.7, 1.5, 1.0, 1.1, 1.0, 1.2, 1.6, 1.5, 1.6, 1.5, 1.3, 1.3, 1.3, 1.2, 1.4, 1.2, 1.0, 1.3, 1.2, 1.3, 1.3, 1.1, 1.3],
                    ["Ga Lulus", 2.5, 1.9, 2.1, 1.8, 2.2, 2.1, 1.7, 1.8, 1.8, 2.5, 2.0, 1.9, 2.1, 2.0, 2.4, 2.3, 1.8, 2.2, 2.3, 1.5, 2.3, 2.0, 2.0, 1.8, 2.1, 1.8, 1.8, 1.8, 2.1, 1.6, 1.9, 2.0, 2.2, 1.5, 1.4, 2.3, 2.4, 1.8, 1.8, 2.1, 2.4, 2.3, 1.9, 2.3, 2.5, 2.3, 1.9, 2.0, 2.3, 1.8],
                ]
            });
        }, 4000);
        setTimeout(function () {
            pie_chart.unload({
                ids: 'Personal'
            });
            pie_chart.unload({
                ids: 'Group'
            });
        }, 8000);

        // Resize chart on sidebar width change
        $('.sidebar-control').on('click', function() {
            pie_chart.resize();
        });
    }
    if(pie_chart_element2) {
        // Generate chart
        var pie_chart2 = c3.generate({
            bindto: pie_chart_element2,
            size: { width: 350 },
            color: {
                pattern: ['#3F51B5', '#FF9800', '#4CAF50', '#00BCD4', '#F44336']
            },
            data: {
                columns: [
                    ['Kebakaran', 30],
                    ['Satu', 120],
                ],
                type : 'pie'
            }
        });

        // Change data
        setTimeout(function () {
            pie_chart2.load({
                columns: [
                    ["Pemadaman", 0.2, 0.2, 0.2, 0.2, 0.2, 0.4, 0.3, 0.2, 0.2, 0.1, 0.2, 0.2, 0.1, 0.1, 0.2, 0.4, 0.4, 0.3, 0.3, 0.3, 0.2, 0.4, 0.2, 0.5, 0.2, 0.2, 0.4, 0.2, 0.2, 0.2, 0.2, 0.4, 0.1, 0.2, 0.2, 0.2, 0.2, 0.1, 0.2, 0.2, 0.3, 0.3, 0.2, 0.6, 0.4, 0.3, 0.2, 0.2, 0.2, 0.2],
                    ["Api", 1.4, 1.5, 1.5, 1.3, 1.5, 1.3, 1.6, 1.0, 1.3, 1.4, 1.0, 1.5, 1.0, 1.4, 1.3, 1.4, 1.5, 1.0, 1.5, 1.1, 1.8, 1.3, 1.5, 1.2, 1.3, 1.4, 1.4, 1.7, 1.5, 1.0, 1.1, 1.0, 1.2, 1.6, 1.5, 1.6, 1.5, 1.3, 1.3, 1.3, 1.2, 1.4, 1.2, 1.0, 1.3, 1.2, 1.3, 1.3, 1.1, 1.3],
                    ["Dihutan", 2.5, 1.9, 2.1, 1.8, 2.2, 2.1, 1.7, 1.8, 1.8, 2.5, 2.0, 1.9, 2.1, 2.0, 2.4, 2.3, 1.8, 2.2, 2.3, 1.5, 2.3, 2.0, 2.0, 1.8, 2.1, 1.8, 1.8, 1.8, 2.1, 1.6, 1.9, 2.0, 2.2, 1.5, 1.4, 2.3, 2.4, 1.8, 1.8, 2.1, 2.4, 2.3, 1.9, 2.3, 2.5, 2.3, 1.9, 2.0, 2.3, 1.8],
                ]
            });
        }, 4000);
        setTimeout(function () {
            pie_chart2.unload({
                ids: 'Kebakaran'
            });
            pie_chart2.unload({
                ids: 'Satu'
            });
        }, 8000);

        // Resize chart on sidebar width change
        $('.sidebar-control').on('click', function() {
            pie_chart2.resize();
        });
        }

    // Line chart
    if(line_chart_element) {

        // Generate chart
        var line_chart = c3.generate({
            bindto: line_chart_element,
            point: { 
                r: 4   
            },
            size: { height: 400 },
            color: {
                pattern: ['#4CAF50', '#F4511E', '#1E88E5']
            },
            data: {
                columns: [
                    ['data1', 30, 200, 100, 400, 150, 250],
                    ['data2', 50, 20, 10, 40, 15, 25]
                ],
                type: 'spline'
            },
            grid: {
                y: {
                    show: true
                }
            }
        });

        // Change data
        setTimeout(function () {
            line_chart.load({
                columns: [
                    ['data1', 230, 190, 300, 500, 300, 400]
                ]
            });
        }, 3000);
        setTimeout(function () {
            line_chart.load({
                columns: [
                    ['data3', 130, 150, 200, 300, 200, 100]
                ]
            });
        }, 6000);
        setTimeout(function () {
            line_chart.unload({
                ids: 'data1'
            });
        }, 9000);

        // Resize chart on sidebar width change
        $('.sidebar-control').on('click', function() {
            line_chart.resize();
        });
    }
    // Stacked bar chart
    if(bar_stacked_chart_element) {
        // Generate chart
        var bar_stacked_chart = c3.generate({
            bindto: bar_stacked_chart_element,
            size: { height: 400 },
            color: {
                pattern: ['#FF9800', '#F44336', '#009688', '#4CAF50']
            },
            data: {
                columns: [
                    ['data1', -30, 200, 200, 400, -150, 250],
                    ['data2', 130, 100, -100, 200, -150, 50],
                    ['data3', -230, 200, 200, -300, 250, 250]
                ],
                type: 'bar',
                groups: [
                    ['data1', 'data2']
                ]
            },
            grid: {
                x: {
                    show: true
                },
                y: {
                    lines: [{value:0}]
                }
            }
        });

        // Change data
        setTimeout(function () {
            bar_stacked_chart.groups([['data1', 'data2', 'data3']])
        }, 4000);
        setTimeout(function () {
            bar_stacked_chart.load({
                columns: [['data4', 100, -50, 150, 200, -300, -100]]
            });
        }, 8000);
        setTimeout(function () {
            bar_stacked_chart.groups([['data1', 'data2', 'data3', 'data4']])
        }, 10000);

        // Resize chart on sidebar width change
        $('.sidebar-control').on('click', function() {
            bar_stacked_chart.resize();
        });
    }
};


//
// Return objects assigned to module
//

return {
    init: function() {
        _linesAreasExamples();
    }
}
}();


// Initialize module
// ------------------------------

document.addEventListener('DOMContentLoaded', function() {
    С3LinesAreas.init();
});

</script>
@endsection
