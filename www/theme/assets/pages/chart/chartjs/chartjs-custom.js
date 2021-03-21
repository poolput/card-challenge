"use strict";
$(document).ready(function(){
     
    /*Pie chart*/
    var pieElem = document.getElementById("pieChart");
    var data4 = {
        labels: [
            "Blue",
            "Orange",
            "Sea Green"
        ],
        datasets: [{
            data: [30, 30, 40],
            backgroundColor: [
                "#25A6F7",
                "#FB9A7D",
                "#01C0C8"
            ],
            hoverBackgroundColor: [
                "#6cc4fb",
                "#ffb59f",
                "#0dedf7"
            ]
        }]
    };
/*
    var myPieChart = new Chart(pieElem, {
        type: 'pie',
        data: data4
    });
*/
});
