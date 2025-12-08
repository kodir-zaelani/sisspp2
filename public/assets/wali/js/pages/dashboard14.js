



$(function () {
    "use strict";



    var options = {
      series: [{
      name: 'Total Attendence',
      type: 'column',
      data: [440, 505, 414, 671, 227, 413, 201, 352, 752, 320, 257, 160]
    }, {
      name: 'Passed',
      type: 'line',
      data: [323, 642, 435, 527, 443, 622, 117, 231, 822, 222, 412, 116]
    }],
      chart: {
      height: 326,
      type: 'line',
      toolbar: {
        show: false
      }
    },
    stroke: {
      width: [0, 3],
        curve: 'smooth',
    },
    plotOptions: {
      bar: {
        horizontal: false,
        columnWidth: '50%',
        borderRadius: 3
      },
    },
    legend: {
      show: false,
      position: 'top',
      horizontalAlign: 'right',
    },
    colors:['#6e63e6', '#05825f'],
    dataLabels: {
      enabled: false,
      enabledOnSeries: [1]
    },
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    };

    var chart = new ApexCharts(document.querySelector("#chart44"), options);
    chart.render();


    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        responsive: {
          0: {
            items: 1,
          },
          600: {
            items: 2,
          },
          1000: {
            items: 2,
            margin: 10
          }
        }
      });

});







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





    



    var dom = document.getElementById('chart-container');
var myChart = echarts.init(dom, null, {
  renderer: 'canvas',
  useDirtyRect: false
});
var app = {};


var option;

option = {
  tooltip: {
    trigger: 'item'
  },
  legend: {
    top: 'bottom',
    left: 'center',
  },
  color: ['#3083fd', '#ff9920', '#ff562f'],
  series: [
    {
      name: 'State of Health',
      type: 'pie',
      radius: ['40%', '70%'],
      avoidLabelOverlap: false,
      padAngle: 3,
      itemStyle: {
        borderRadius: 5
      },
      label: {
        show: false,
        position: 'center'
      },
      emphasis: {
        label: {
          show: false,
          fontSize: 40,
          fontWeight: 'bold'
        }
      },
      labelLine: {
        show: false
      },
      data: [
        { value: 1048, name: ' Top Result ' },
        { value: 735, name: ' Average Result ' },
        { value: 300, name: 'Fail' }
      ]
    }
  ]
};

if (option && typeof option === 'object') {
  myChart.setOption(option);
}

window.addEventListener('resize', myChart.resize);