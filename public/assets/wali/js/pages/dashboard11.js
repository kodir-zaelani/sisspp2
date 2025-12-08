$(function () {
    "use strict";

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


var dom = document.getElementById('chart-container');
var myChart = echarts.init(dom, null, {
  renderer: 'canvas',
  useDirtyRect: false
});
var app = {};

var option;

option = {
  series: [
    {
      type: 'gauge',
      startAngle: 180,
      itemStyle: {
        color: '#0052cc',
        shadowColor: '#0052cc',
        shadowOffsetX: 0.8,
        shadowOffsetY: -0.8,
      },
      progress: {
        show: true,
        width: 60,
      },
      endAngle: 0,
      center: ['50%', '100%'],
      radius: '165%',
      min: 0,
      max: 1,
      splitNumber: 1,
      axisLine: {
        lineStyle: {
          width: 60,
          color: [
            [0, '#0052cc'],
            [1, '#F3F2FF'],
          ]
        }
      },
      pointer: {
        icon: 'path://M12.8,0.7l12,40.1H0.7L12.8,0.7z',
        length: '0%',
        width: 6,
        offsetCenter: [0, '-58%'],
        itemStyle: {
          color: 'auto'
        }
      },
      axisTick: {
        length: 0,
        lineStyle: {
          color: 'auto',
          width: 0
        }
      },
      splitLine: {
        length: 0,
        lineStyle: {
          color: 'auto',
          width: 0
        }
      },
      axisLabel: {
        color: '#464646',
        fontSize: 15,
        distance: -10,
        rotate: 'tangential',
        formatter: function (value) {
          
          return '';
        }
      },
      title: {
        offsetCenter: [0, '-10%'],
        fontSize: 15
      },
      detail: {
        fontSize: 30,
        offsetCenter: [0, '-25%'],
        valueAnimation: true,
        formatter: function (value) {
          return Math.round(value * 100) + '';
        },
        color: 'inherit'
      },
      data: [
        {
          value: 0.8,
          name: 'PRO LEARNER'
        }
      ]
    }
  ]
};

if (option && typeof option === 'object') {
  myChart.setOption(option);
}

window.addEventListener('resize', myChart.resize);



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


  var options = {
          series: [{
          name: 'Retention ',
          data: [44, 55, 41, 67, 22, 43, 44]
        }, {
          name: 'Droped',
          data: [ 13, 23, 20, 8, 13, 27, 13]
        }],
          chart: {
          type: 'bar',
          height: 232,
          offsetX: -15,
          offsetY: 8,
          stacked: true,
           toolbar: {
            show: false,
            },
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '45%',
          },
        },
        dataLabels: {
          enabled: false
        },
        colors: ['#3596f7', '#cce5ff'],
        stroke: {
          show: true,
          width: 5,
          colors: ['transparent']
        },
        xaxis: {
          categories: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
        },
        grid: {
          show: false,
        },
        legend: {
          show: false,
        },
        yaxis: {
          title: {
            text: ''
          }
        },
        fill: {
          opacity: 1
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return "$ " + val + " thousands"
            }
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#revenue-chart"), options);
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



