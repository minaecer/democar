/*

Template: Webster - Responsive Multi-purpose HTML5 Template
Author: potenzaglobalsolutions.com
Design and Developed by: potenzaglobalsolutions.com

NOTE:  This file includes morris.js all scripts. You can change anything related to morris chart in this file.

*/

!function($) {
    "use strict";

    var MorrisCharts = function() {};

    //Check if function exists
    $.fn.exists = function () {
        return this.length > 0;
    };

 /*************************
     Creates line chart
*************************/ 
    MorrisCharts.prototype.createLineChart = function(element, data, xkey, ykeys, labels, opacity, Pfillcolor, Pstockcolor, lineColors) {
        Morris.Line({
          element: element,
          data: data,
          xkey: xkey,
          ykeys: ykeys,
          labels: labels,
          fillOpacity: opacity,
          pointFillColors: Pfillcolor,
          pointStrokeColors: Pstockcolor,
          behaveLikeLine: true,
          gridLineColor: '#eef0f2',
          hideHover: 'auto',
          lineWidth: '3px',
          pointSize: 0,
          preUnits: '$',
          resize: true, //defaulted to true
          lineColors: lineColors
        });
    },

/*************************
     Creates area chart
*************************/ 
    MorrisCharts.prototype.createAreaChart = function(element, pointSize, lineWidth, data, xkey, ykeys, labels, lineColors) {
        Morris.Area({
            element: element,
            pointSize: 0,
            lineWidth: 0,
            data: data,
            xkey: xkey,
            ykeys: ykeys,
            labels: labels,
            hideHover: 'auto',
            resize: true,
            gridLineColor: '#eef0f2',
            lineColors: lineColors
        });
    },

/*************************
Creates area chart with dotted
*************************/ 
    MorrisCharts.prototype.createAreaChartDotted = function(element, pointSize, lineWidth, data, xkey, ykeys, labels, Pfillcolor, Pstockcolor, lineColors) {
        Morris.Area({
            element: element,
            pointSize: 3,
            lineWidth: 1,
            data: data,
            xkey: xkey,
            ykeys: ykeys,
            labels: labels,
            hideHover: 'auto',
            pointFillColors: Pfillcolor,
            pointStrokeColors: Pstockcolor,
            resize: true,
            smooth: false,
            gridLineColor: '#eef0f2',
            lineColors: lineColors
        });
    },

/*************************
    Creates Bar chart
*************************/ 
    MorrisCharts.prototype.createBarChart  = function(element, data, xkey, ykeys, labels, lineColors) {
        Morris.Bar({
            element: element,
            data: data,
            xkey: xkey,
            ykeys: ykeys,
            labels: labels,
            hideHover: 'auto',
            resize: true, //defaulted to true
            gridLineColor: '#eeeeee',
            barSizeRatio: 0.4,
            xLabelAngle: 35,
            barColors: lineColors
        });
    },

/*************************
    creates Stacked chart
*************************/ 
    MorrisCharts.prototype.createStackedChart  = function(element, data, xkey, ykeys, labels, lineColors) {
        Morris.Bar({
            element: element,
            data: data,
            xkey: xkey,
            ykeys: ykeys,
            stacked: true,
            labels: labels,
            hideHover: 'auto',
            resize: true, //defaulted to true
            gridLineColor: '#eeeeee',
            barColors: lineColors
        });
    },

/*************************
    creates Stacked chart
*************************/ 
    MorrisCharts.prototype.createDonutChart = function(element, data, colors) {
        Morris.Donut({
            element: element,
            data: data,
            resize: true, //defaulted to true
            colors: colors
        });
    },
    MorrisCharts.prototype.init = function() {

/*************************
    morris-line-example
*************************/ 
    if ($('#morris-line-example').exists()) {
        var $data  = [
             { y: '2008', a: 50, b: 0 },
            { y: '2009', a: 75, b: 50 },
            { y: '2010', a: 30, b: 80 },
            { y: '2011', a: 50, b: 50 },
            { y: '2012', a: 75, b: 10 },
            { y: '2013', a: 50, b: 40 },
            { y: '2014', a: 75, b: 50 },
            { y: '2015', a: 100, b: 70 }
          ];
        this.createLineChart('morris-line-example', $data, 'y', ['a', 'b'], ['Series A', 'Series B'],['0.1'],['#ffffff'],['#999999'], ['#45bbe0 ', '#f06292']);
    }

/*************************
    morris-area-example
*************************/ 
    if ($('#morris-area-example').exists()) {
    var $areaData = [
        { y: '2009', a: 10, b: 20 },
        { y: '2010', a: 75,  b: 65 },
        { y: '2011', a: 50,  b: 40 },
        { y: '2012', a: 75,  b: 65 },
        { y: '2013', a: 50,  b: 40 },
        { y: '2014', a: 75,  b: 65 },
        { y: '2015', a: 90, b: 60 }
    ];
    this.createAreaChart('morris-area-example', 0, 0, $areaData, 'y', ['a', 'b'], ['Series A', 'Series B'], ['#1ea69a', "#bdbdbd"]);
    }

/*************************
   morris-area-with-dotted
*************************/
   if ($('#morris-area-with-dotted').exists()) {
    var $areaDotData = [
        { y: '2009', a: 10, b: 20 },
        { y: '2010', a: 75,  b: 65 },
        { y: '2011', a: 50,  b: 40 },
        { y: '2012', a: 75,  b: 65 },
        { y: '2013', a: 50,  b: 40 },
        { y: '2014', a: 75,  b: 65 },
        { y: '2015', a: 90, b: 60 }
    ];
    this.createAreaChartDotted('morris-area-with-dotted', 0, 0, $areaDotData, 'y', ['a', 'b'], ['Series A', 'Series B'],['#ffffff'],['#999999'], ['#3b3e47', "#bdbdbd"]);
    }

/*************************
  morris-bar-example
*************************/
    if ($('#morris-bar-example').exists()) {
    var $barData  = [
        { y: '2012', a: 75,  b: 65 , c: 95 },
        { y: '2013', a: 50,  b: 40 , c: 22 },
        { y: '2014', a: 75,  b: 65 , c: 56 },
        { y: '2015', a: 100, b: 90 , c: 60 },
        { y: '2016', a: 100, b: 90 , c: 60 },
        { y: '2017', a: 100, b: 90 , c: 60 },
        { y: '2018', a: 100, b: 90 , c: 60 }
    ];
    this.createBarChart('morris-bar-example', $barData, 'y', ['a', 'b', 'c'], ['WordPress', 'HTML5', 'eCommerce'], ['#348cd4','#8892d6', '#45bbe0']);
    }   

/*************************
  morris-bar-stacked
*************************/
    if ($('#morris-bar-stacked').exists()) {
    var $stckedData  = [
        { y: '2007', a: 100, b: 90, c: 56 },
        { y: '2008', a: 75,  b: 65, c: 89 },
        { y: '2009', a: 100, b: 90, c: 120 },
        { y: '2010', a: 75,  b: 65, c: 110 },
        { y: '2011', a: 50,  b: 40, c: 85 },
        { y: '2012', a: 75,  b: 65, c: 52 },
        { y: '2013', a: 50,  b: 40, c: 77 },
        { y: '2014', a: 75,  b: 65, c: 90 },
        { y: '2015', a: 100, b: 90, c: 130 },
        { y: '2016', a: 80, b: 65, c: 95 },
        { y: '2017', a: 45, b: 180, c: 100 },
        { y: '2018', a: 75,  b: 65, c: 80 }
    ];
    this.createStackedChart('morris-bar-stacked', $stckedData, 'y', ['a', 'b', 'c'], ['WordPress', 'HTML5','eCommerce'], ['#348cd4','#8892d6', '#cfd9e1']);
    }

/*************************
  morris-donut-example
*************************/
    if ($('#morris-donut-example').exists()) {
    var $donutData = [
            {label: "Commission", value: 65},
            {label: "Sales", value: 150},
            {label: "Consulting", value: 120}
        ];
    this.createDonutChart('morris-donut-example', $donutData, ['#28a745', '#45bbe0', "#ebeff2"]);
    }
 }

/*************************
           init
*************************/
$.MorrisCharts = new MorrisCharts, $.MorrisCharts.Constructor = MorrisCharts
}(window.jQuery),

//initializing 
function($) {
    "use strict";
    $.MorrisCharts.init();
}(window.jQuery);