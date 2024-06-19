$(function() {
  'use strict';
  // Bar chart
  if($('#chartjsBar').length) {
    new Chart($("#chartjsBar"), {
      type: 'bar',
      data: {
        labels: [ "July", "Aug" , "Sept", "Oct", "Nov", "Dec", "Jan" , "Feb", "Mar", "Apr", "May", "Jun"],
        datasets: [
          {
            label: "Population",
            backgroundColor: ["#e32929", "#e32929","#e32929","#e32929","#e32929","#e32929","#e32929","#e32929","#e32929","#e32929","#e32929","#e32929","#e32929"],
            data: [2478,5267,734,2084,1433, 4567, 2478,5267,734,2084, 0, 0 ]
          }
        ]
      },
      options: {
        legend: { display: false },
      }
    });
  }

  if($('#chartjsLine').length) {
    new Chart($('#chartjsLine'), {
      type: 'line',
      data: {
        labels: [1500,1600,1700,1750,1800,1850,1900,1950,1999,2050],
        datasets: [{
          data: [86,114,106,106,107,111,133,221,783,2478],
          label: "Africa",
          borderColor: "#7ee5e5",
          backgroundColor: "rgba(0,0,0,0)",
          fill: false
        }, {
          data: [282,350,411,502,635,809,947,1402,3700,5267],
          label: "Asia",
          borderColor: "#f77eb9",
          backgroundColor: "rgba(0,0,0,0)",
          fill: false
        }
        ]
      }
    });
  }

  if($('#rentarreas').length) {
    var doughnutChart2 = new Chart($('#rentarreas'), {
      type: 'doughnut',
      data: {
        // labels: ["Open", "Closed"],
        datasets: [
          {
            label: "Tickets",
            backgroundColor: ["#a3a9a9","#4d8af0"],
            data: [30,(100-30)]
          }
        ]
      },
      series: [30],
      options: {
        cutoutPercentage: 75,
        plugins:{
          legend: {
            display: true,
            text: 'label'
          },
          title: {
            display: false,
            text: '50%'
          },
          datalabels: {
            color: '#000000',
            anchor: 'center',
            formatter: function(value, context){
              return 'label';
              // return context.dataset.data.reduce(function (a,b){
              //   return 'label';
              // },0);
            }
          }
        }
      }
    });
  }

  if($('#chartjsArea').length) {
    new Chart($('#chartjsArea'), {
      type: 'line',
      data: {
        labels: ["July", "Aug" , "Sept", "Oct", "Nov", "Dec", "Jan" , "Feb", "Mar", "Apr", "May", "Jun"],
        datasets: [{
          data: [3732000,3230000,2060100,2060100,2075000,2115000,1337000,2215000,1783000,2478000],
          label: "Collected",
          borderColor: "rgba(130,122,231,0.82)",
          backgroundColor: "rgba(189,185,243,0.53)",
          fill: true
        }, {
          data: [2594000,2380000,2270100,2390100,2195000,2815000,1937000,2515000,2183000,2578000],
          label: "Expected",
          borderColor: "rgba(246,91,89,0.58)",
          backgroundColor: "rgba(252,146,145,0.47)",
          fill: true
        }
        ]
      }
    });
    // addCenterLabelPlugin(chartjsArea, '');
  }

  if($('#chartjsBubble').length) {
    new Chart($('#chartjsBubble'), {
      type: 'bubble',
      data: {
        labels: "Africa",
        datasets: [
          {
            label: ["China"],
            backgroundColor: "#c2fdfd",
            borderColor: "#7ee5e5",
            data: [{
              x: 21269017,
              y: 5.245,
              r: 15
            }]
          }, {
            label: ["Denmark"],
            backgroundColor: "#ffbedd",
            borderColor: "#f77eb9",
            data: [{
              x: 258702,
              y: 7.526,
              r: 10
            }]
          }, {
            label: ["Germany"],
            backgroundColor: "#bbd4ff",
            borderColor: "#4d8af0",
            data: [{
              x: 3979083,
              y: 6.994,
              r: 15
            }]
          }, {
            label: ["Japan"],
            backgroundColor: "#ffe69d",
            borderColor: "#fbbc06",
            data: [{
              x: 4931877,
              y: 5.921,
              r: 15
            }]
          }
        ]
      },
      options: {
        scales: {
          yAxes: [{
            scaleLabel: {
              display: true,
              labelString: "Happiness"
            }
          }],
          xAxes: [{
            scaleLabel: {
              display: true,
              labelString: "GDP (PPP)"
            }
          }]
        }
      }
    });
  }

  if($('#chartjsRadar').length) {
    new Chart($('#chartjsRadar'), {
      type: 'radar',
      data: {
        labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
        datasets: [
          {
            label: "1950",
            fill: true,
            backgroundColor: "#ffbedd",
            borderColor: "#f77eb9",
            pointBorderColor: "#f77eb9",
            pointBackgroundColor: "#ffbedd",
            data: [8.77,55.61,21.69,6.62,6.82]
          }, {
            label: "2050",
            fill: true,
            backgroundColor: "#c2fdfd",
            borderColor: "#7ee5e5",
            pointBorderColor: "#7ee5e5",
            pointBackgroundColor: "#c2fdfd",
            // pointBorderColor: "#fff",
            data: [25.48,54.16,7.61,8.06,4.45]
          }
        ]
      }
    });
  }

  if($('#chartjsPolarArea').length) {
    new Chart($('#chartjsPolarArea'), {
      type: 'polarArea',
      data: {
        labels: ["Africa", "Asia", "Europe", "Latin America"],
        datasets: [
          {
            label: "Population (millions)",
            backgroundColor: ["#f77eb9", "#7ee5e5","#4d8af0","#fbbc06"],
            data: [2478,5267,734,784]
          }
        ]
      }
    });
  }

  if($('#chartjsGroupedBar').length) {
    new Chart($('#chartjsGroupedBar'), {
      type: 'bar',
      data: {
        labels: ["1900", "1950", "1999", "2050"],
        datasets: [
          {
            label: "Africa",
            backgroundColor: "#f77eb9",
            data: [133,221,783,2478]
          }, {
            label: "Europe",
            backgroundColor: "#7ee5e5",
            data: [408,547,675,734]
          }
        ]
      }
    });
  }

  if($('#chartjsMixedBar').length) {
    new Chart($('#chartjsMixedBar'), {
      type: 'bar',
      data: {
        labels: ["1900", "1950", "1999", "2050"],
        datasets: [{
          label: "Europe",
          type: "line",
          borderColor: "#66d1d1",
          backgroundColor: "rgba(0,0,0,0)",
          data: [408,547,675,734],
          fill: false
        }, {
          label: "Africa",
          type: "line",
          borderColor: "#ff3366",
          backgroundColor: "rgba(0,0,0,0)",
          data: [133,221,783,2478],
          fill: false
        }, {
          label: "Europe",
          type: "bar",
          backgroundColor: "#f77eb9",
          // backgroundColor: "rgba(0,0,0,0)",
          data: [408,547,675,734],
        }, {
          label: "Africa",
          type: "bar",
          backgroundColor: "#7ee5e5",
          backgroundColorHover: "#3e95cd",
          // backgroundColor: "rgba(0,0,0,0)",
          data: [133,221,783,2478]
        }
        ]
      }
    });
  }

  if ($('#ticketschart').length) {
    new Chart($('#ticketschart'), {
      type: 'doughnut',
      data: {
        labels: ["Open", "Closed"],
        datasets: [
          {
            label: "Tickets",
            backgroundColor: ["#D18340", "#48A030"],
            data: [150, 450]
          }
        ]
      },
      options: {
        responsive: true,
        maintainAspectRatio: true
      }
    });
  }


  if($('#chartjsPie').length) {
    new Chart($('#chartjsPie'), {
      type: 'pie',
      data: {
        // labels: ["Africa", "Asia", "Europe"],
        datasets: [{
          label: "Population (millions)",
          backgroundColor: ["#7ee5e5","#f77eb9","#4d8af0"],
          data: [2478,4267,1334]
        }]
      },
      options: {
        height: 400

      }
    });
  }

  if($('#Tenantdistribution').length) {
    new Chart($('#Tenantdistribution'), {
      type: 'doughnut',
      data: {
        labels: ["Nairobi", "Northern", "Eastern", "Western", "Southern"],
        datasets: [
          {
            label: "Tenants",
            backgroundColor: ["#CB1D1C","#E31ED3","#00A30C","#6C63FF", "#20D4DB"],
            data: [480,180,240,180,120]
          }
        ]
      }
    });
  }

  if ($('#chartjsDoughnut').length) {
    new Chart($('#chartjsDoughnut'), {
      type: 'doughnut',
      data: {
        labels: ["Open", "Closed"],
        datasets: [
          {
            label: "Tickets",
            backgroundColor: ["#da651e", "#2f7720"],
            data: [150, 450]
          }
        ]
      },
      options: {
        responsive: true,
        maintainAspectRatio: true,
        plugins: {
          datalabels: {
            color: '#fff',
            anchor: 'center',
            formatter: function(value, context) {
              return context.dataset.data.reduce(function(a, b) {
                return a + b;
              }, 0);
            }
          }
        }
      }
    });
  }

  if ($('#chartjsDoughnut3').length) {
    new Chart($('#chartjsDoughnut3'), {
      type: 'doughnut',
      data: {
        labels: ["Open", "Closed"],
        datasets: [
          {
            label: "Tickets",
            backgroundColor: ["#da651e", "#2f7720"],
            data: [150, 450]
          }
        ]
      },
      options: {
        responsive: true,
        maintainAspectRatio: true,
        plugins: {
          datalabels: {
            color: '#fff',
            anchor: 'center',
            formatter: function(value, context) {
              return context.dataset.data.reduce(function(a, b) {
                return a + b;
              }, 0);
            }
          }
        }
      }
    });
  }

  var options = {
    type: 'doughnut',
    data: {
      labels: ["Red", "Blue"],
      datasets: [{
        label: '# of Votes',
        data: [12, 19],
        backgroundColor: ["Red", "Blue"]
      }]
    },
    options: {
      rotation: 270, // start angle in degrees
      circumference: 180, // sweep angle in degrees
      plugins: {
        datalabels: {
          color: '#000000',
          anchor: 'center',
          formatter: function(value) {
            value = 'label;'
            return value;
          }
        }
      }
    },


  }

  var ctx = document.getElementById('chartJSContainer').getContext('2d');
  new Chart(ctx, options);






});

// comment
