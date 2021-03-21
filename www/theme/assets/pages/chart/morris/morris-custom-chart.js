"use strict";
$(document).ready(function() {

    lineChart(); 

    $(window).on('resize',function() {
        window.lineChart.redraw(); 
    });
});

/*Line chart*/
function lineChart() {
    window.lineChart = Morris.Line({
        element: 'line-inside',
        data: [
            { y: '2006', a: 100, b: 90 },
            { y: '2007', a: 75, b: 65 },
            { y: '2008', a: 50, b: 40 },
            { y: '2009', a: 75, b: 65 },
            { y: '2010', a: 50, b: 40 },
            { y: '2011', a: 75, b: 65 },
            { y: '2012', a: 100, b: 90 }
        ],
        xkey: 'y',
        redraw: true,
        ykeys: ['a','b' ],
        hideHover: 'auto',
        labels: ['Series A','Series B' ],
        lineColors: ['#B4C1D7','#FF9F55' ]
    });
}
 
