



$(function () {
    "use strict";



    var options = {
          series: [{
          name: 'Students',
          data: [44, 55, 41, 67, 22, 43, 44]
        }, {
          name: 'Teacher',
          data: [13, 23, 20, 8, 13, 27, 13]
        }, {
          name: 'Other',
          data: [23, 17, 12, 9, 15, 24, 18]
        }],
          chart: {
          foreColor:"#bac0c7",
          type: 'bar',
          height: 310,
          stacked: true,
          toolbar: {
            show: false
          },
          zoom: {
            enabled: true
          }
        },
        responsive: [{
          breakpoint: 480,
          options: {
            legend: {
              position: 'bottom',
              offsetX: -10,
              offsetY: 0
            }
          }
        }],     
        grid: {
            show: true,
            borderColor: '#f7f7f7',      
        },
        colors:['#0052cc', '#4f81cb', '#aaccff'],
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '15%',
            colors: {
                backgroundBarColors: ['#f0f0f0'],
                backgroundBarOpacity: 1,
            },
          },
        },
        dataLabels: {
          enabled: false
        },
 
        xaxis: {
          categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Set', 'Sun'],
        },
        legend: {
          show: true,
          position: 'top',
          horizontalAlign: 'center',
        },
        fill: {
          opacity: 1
        }
        };

        var chart = new ApexCharts(document.querySelector("#charts_widget_1_chart"), options);
        chart.render();




   //----chart4
    //Get the context of the Chart canvas element we want to select
    var dasChartjs = document.getElementById("chartjs4").getContext("2d");
    // Create Linear Gradient
    var blue_trans_gradient = dasChartjs.createLinearGradient(0, 0, 0, 100);
    blue_trans_gradient.addColorStop(0, 'rgba(28, 117, 188,1)');
    blue_trans_gradient.addColorStop(0.75, 'rgba(255,255,255,0)');
    // Chart Options
    var DASStats = {
        responsive: true,
        maintainAspectRatio: false,
        datasetStrokeWidth : 3,
        pointDotStrokeWidth : 4,
        tooltipFillColor: "rgba(28, 117, 188,0.8)",
        legend: {
            display: false,
        },
        hover: {
            mode: 'label'
        },
        scales: {
            xAxes: [{
                display: false,
            }],
            yAxes: [{
                display: false,
                ticks: {
                    min: 0,
                    max: 80
                },
            }]
        },
        title: {
            display: false,
            fontColor: "#FFF",
            fullWidth: false,
            fontSize: 30,
            text: '52%'
        }
    };

    // Chart Data
    var DASMonthData = {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
        datasets: [{
            label: "abc",
            data: [20, 40, 65, 50, 30, 60, 40],
            backgroundColor: blue_trans_gradient,
            borderColor: "#1c75bc",
            borderWidth: 1.5,
            strokeColor : "#1c75bc",
            pointRadius: 0,
        }]
    };

    var DASCardconfig = {
        type: 'line',

        // Chart Options
        options : DASStats,

        // Chart Data
        data : DASMonthData
    };

    // Create the chart
    var DASAreaChart = new Chart(dasChartjs, DASCardconfig);


       //----chart5
    //Get the context of the Chart canvas element we want to select
    var dasChartjs = document.getElementById("chartjs5").getContext("2d");
    // Create Linear Gradient
    var blue_trans_gradient = dasChartjs.createLinearGradient(0, 0, 0, 100);
    blue_trans_gradient.addColorStop(0, 'rgba(4, 160, 139,1)');
    blue_trans_gradient.addColorStop(0.75, 'rgba(255,255,255,0)');
    // Chart Options
    var DASStats = {
        responsive: true,
        maintainAspectRatio: false,
        datasetStrokeWidth : 3,
        pointDotStrokeWidth : 4,
        tooltipFillColor: "rgba(28, 117, 188,0.8)",
        legend: {
            display: false,
        },
        hover: {
            mode: 'label'
        },
        scales: {
            xAxes: [{
                display: false,
            }],
            yAxes: [{
                display: false,
                ticks: {
                    min: 0,
                    max: 80
                },
            }]
        },
        title: {
            display: false,
            fontColor: "#FFF",
            fullWidth: false,
            fontSize: 30,
            text: '52%'
        }
    };

    // Chart Data
    var DASMonthData = {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
        datasets: [{
            label: "abc",
            data: [20, 40, 65, 50, 30, 60, 40],
            backgroundColor: blue_trans_gradient,
            borderColor: "#04a08b",
            borderWidth: 1.5,
            strokeColor : "#04a08b",
            pointRadius: 0,
        }]
    };

    var DASCardconfig = {
        type: 'line',

        // Chart Options
        options : DASStats,

        // Chart Data
        data : DASMonthData
    };

    // Create the chart
    var DASAreaChart = new Chart(dasChartjs, DASCardconfig);




       //----chart6
    //Get the context of the Chart canvas element we want to select
    var dasChartjs = document.getElementById("chartjs6").getContext("2d");
    // Create Linear Gradient
    var blue_trans_gradient = dasChartjs.createLinearGradient(0, 0, 0, 100);
    blue_trans_gradient.addColorStop(0, 'rgba(0, 186, 255, 1)');
    blue_trans_gradient.addColorStop(0.75, 'rgba(255,255,255,0)');
    // Chart Options
    var DASStats = {
        responsive: true,
        maintainAspectRatio: false,
        datasetStrokeWidth : 3,
        pointDotStrokeWidth : 4,
        tooltipFillColor: "rgba(28, 117, 188,0.8)",
        legend: {
            display: false,
        },
        hover: {
            mode: 'label'
        },
        scales: {
            xAxes: [{
                display: false,
            }],
            yAxes: [{
                display: false,
                ticks: {
                    min: 0,
                    max: 80
                },
            }]
        },
        title: {
            display: false,
            fontColor: "#FFF",
            fullWidth: false,
            fontSize: 30,
            text: '52%'
        }
    };

    // Chart Data
    var DASMonthData = {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
        datasets: [{
            label: "abc",
            data: [20, 40, 65, 50, 30, 60, 40],
            backgroundColor: blue_trans_gradient,
            borderColor: "#00baff",
            borderWidth: 1.5,
            strokeColor : "#00baff",
            pointRadius: 0,
        }]
    };

    var DASCardconfig = {
        type: 'line',

        // Chart Options
        options : DASStats,

        // Chart Data
        data : DASMonthData
    };

    // Create the chart
    var DASAreaChart = new Chart(dasChartjs, DASCardconfig);




       //----chart7
    //Get the context of the Chart canvas element we want to select
    var dasChartjs = document.getElementById("chartjs7").getContext("2d");
    // Create Linear Gradient
    var blue_trans_gradient = dasChartjs.createLinearGradient(0, 0, 0, 100);
    blue_trans_gradient.addColorStop(0, 'rgba(255, 153, 32, 1)');
    blue_trans_gradient.addColorStop(0.75, 'rgba(255,255,255,0)');
    // Chart Options
    var DASStats = {
        responsive: true,
        maintainAspectRatio: false,
        datasetStrokeWidth : 3,
        pointDotStrokeWidth : 4,
        tooltipFillColor: "rgba(28, 117, 188,0.8)",
        legend: {
            display: false,
        },
        hover: {
            mode: 'label'
        },
        scales: {
            xAxes: [{
                display: false,
            }],
            yAxes: [{
                display: false,
                ticks: {
                    min: 0,
                    max: 80
                },
            }]
        },
        title: {
            display: false,
            fontColor: "#FFF",
            fullWidth: false,
            fontSize: 30,
            text: '52%'
        }
    };

    // Chart Data
    var DASMonthData = {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
        datasets: [{
            label: "abc",
            data: [20, 40, 65, 50, 30, 60, 40],
            backgroundColor: blue_trans_gradient,
            borderColor: "#ff9920",
            borderWidth: 1.5,
            strokeColor : "#ff9920",
            pointRadius: 0,
        }]
    };

    var DASCardconfig = {
        type: 'line',

        // Chart Options
        options : DASStats,

        // Chart Data
        data : DASMonthData
    };

    // Create the chart
    var DASAreaChart = new Chart(dasChartjs, DASCardconfig);


});



        var options = {
          chart: {
            height: 100,
            type: "radialBar"
          },

          series: [80],
            colors: ['#0052cc'],
          plotOptions: {
            radialBar: {
              hollow: {
                margin: 15,
                size: "50%"
              },
              track: {
                background: '#ff9920',
              },

              dataLabels: {
                showOn: "always",
                name: {
                  offsetY: -150,
                  show: false,
                  color: "#888",
                  fontSize: "13px"
                },
                value: {
                  color: "#111",
                  fontSize: "15px",
                  show: true
                }
              }
            }
          },

          stroke: {
            lineCap: "round",
          },
          labels: ["Progress"]
        };

        var chart = new ApexCharts(document.querySelector("#revenue5"), options);

        chart.render();





// slimScroll-------------------------------------------------
window.onload = function() {
  // Cache DOM Element
  var scrollable = $('.scrollable');
  
  // Keeping the Scrollable state separate
  var state = {
    pos: {
      lowest: 0,
      current: 0
    },
    offset: {
      top: [0, 0], //Old Offset, New Offset
    }
  }
  //
  scrollable.slimScroll({
    height: '284px',
    width: '',
    start: 'top'
  });
  //
  scrollable.slimScroll().bind('slimscrolling', function (e, pos) {
    // Update the Scroll Position and Offset
    
    // Highest Position
    state.pos.highest = pos !== state.pos.highest ?
      pos > state.pos.highest ? pos : state.pos.highest
    : state.pos.highest;
    
    // Update Offset State
    state.offset.top.push(pos - state.pos.lowest);
    state.offset.top.shift();
    
    if (state.offset.top[0] < state.offset.top[1]) {
      console.log('...Scrolling Down')
      // ... YOUR CODE ...
    } else if (state.offset.top[1] < state.offset.top[0]) {
      console.log('Scrolling Up...')
      // ... YOUR CODE ...
    } else {
      console.log('Not Scrolling')
      // ... YOUR CODE ...
    }
  });
};
// slimScroll------------------------------------------------- End





// area chart
 Morris.Area({
        element: 'area-chart3',
        data: [{
                    period: '2019',
                    data1: 15,
                    data2: 25
                }, {
                    period: '2020',
                    data1: 55,
                    data2: 20
                }, {
                    period: '2021',
                    data1: 25,
                    data2: 55
                }, {
                    period: '2022',
                    data1: 65,
                    data2: 15
                }, {
                    period: '2023',
                    data1: 35,
                    data2: 25
                }, {
                    period: '2024',
                    data1: 30,
                    data2: 85
                }, {
                    period: '2025',
                    data1: 25,
                    data2: 15
                }


                ],
                lineColors: ['#0052cc', '#aaccff'],
                xkey: 'period',
                ykeys: ['data1', 'data2'],
                labels: ['Enrolled', 'Left'],
                pointSize: 0,
                lineWidth: 2,
                resize:true,
                fillOpacity: 0.5,
                behaveLikeLine: true,
                gridLineColor: '#e0e0e0',
                hideHover: 'auto'
        
    });
    
    