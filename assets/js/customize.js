window.onload = function() {
    ////////////////////////////////
    /////////////////////////////////
    // line chart
    ///////////////////////////////////
    ///////////////////////////////////

      $.post("ajax.php",
      {
        name: "ajax"
      },
      function(data, status){
        var aaa = JSON.parse(data);
        console.log(aaa);

        var options1 = {
        backgroundColor: "#ffffff",
        animationEnabled: true,
        title: {
            // text: "Current Earning"
                // titleFontColor: "#ffffff",
        },
        axisX: {
            labelFontSize: 14,
            labelFontSize: 14,
            // title: "Duration",
            titleFontColor: "#ffffff",
            lineColor: "#ffffff",
            labelFontColor: "#6b6f82",
            tickColor: "#4F81BC",
            includeZero: false
        },
        axisY: {
            labelFontSize: 14,
            // title: "Earning",
            titleFontColor: "#ffffff",
            lineColor: "#ffffff",
            labelFontColor: "#6b6f82",
            tickColor: "#4F81BC",
            includeZero: false,
            // suffix: "K",
            // prefix: "£"
        },

        toolTip: {
            shared: true
        },
        data: [{
            type: "spline", //change it to line, area, bar, pie, etc
            // xValueFormatString: "MM YYY",
            markerSize: 5,
            name: "Total Earned * 10",
            color: "#f5109c",
            markerSize: 5,
            showInLegend: true,
            xValueFormatString: "MMMM",
            yValueFormatString: "£#0K",
            dataPoints: [
                { label: "Jan 2019",  y: 37 },
                // parseInt(aaa['total_earn_1'])
                { label: "Feb 2019",  y: 16 },
                { label: "March 2019", y: 80 },
                // parseInt(aaa['total_earn_3'])
                { label: "April 2019",y: 57 },
                { label: "May 2019",  y: 29 },
                // parseInt(aaa['total_earn_5'])
                { label: "June 2019", y: 40 },
                // { label: "July", y: 3.06 },
                // { label: "Aug",  y: 2.94 },
                // { label: "Sep",  y: 5.41 },
                // { label: "Oct",  y: 2.17 },
                // { label: "Nov",  y: 2.17 },
                // { label: "Dec",  y: 2.80 }
            ]
        },{
            type: "spline", //change it to line, area, bar, pie, etc
            // xValueFormatString: "MM YYY",
            name: "Total Paid * 10",
            color: "#23748D",
            markerSize: 5,
            showInLegend: true,
            xValueFormatString: "MMMM",
            yValueFormatString: "£#0K",
            // xValueFormatString: "MMMM",
            // yValueFormatString: "£#0K",
            dataPoints: [
                { label: "Jan 2019",  y: 6.6 },
                // parseInt(aaa['total_paid_1'])
                { label: "Feb 2019",  y: 2.8 },
                { label: "March 2019", y: 14.3 },
                // parseInt(aaa['total_paid_3'])
                { label: "April 2019",y: 10.2 },
                { label: "May 2019",  y: 5.2 },
                // parseInt(aaa['total_paid_5'])
                { label: "June 2019", y: 7.1 },
                // { label: "July", y: 3.06 },
                // { label: "Aug",  y: 2.94 },
                // { label: "Sep",  y: 5.41 },
                // { label: "Oct",  y: 2.17 },
                // { label: "Nov",  y: 2.17 },
                // { label: "Dec",  y: 2.80 }
            ]
        }]
    };
    $("#chartContainer1").CanvasJSChart(options1);

    // $("#tabs").tabs({
    //     create: function(event, ui) {
    //         //Render Charts after tabs have been created.
            
    //         // $("#chartContainer2").CanvasJSChart(options2);
    //     },
    //     activate: function(event, ui) {
    //         //Updates the chart to its container size if it has changed.
    //         ui.newPanel.children().first().CanvasJSChart().render();
    //     }
    // });


    // goal chart

    var totalgoal = 100;
    var visitorsData = {
        "Goal": [{
            click: visitorsChartDrilldownHandler,
            // cursor: "pointer",
            explodeOnClick: false,
            innerRadius: "80%",
            legendMarkerType: "square",
            // name: "New vs Returning Visitors",
            radius: "100%",
            showInLegend: true,
            startAngle: 90,
            type: "doughnut",
            dataPoints: [{
                y: 50,
                name: "Car",
                color: "#f5109c"
            }, {
                y: 50,
                name: "Free",
                color: "#f2f4f8"
            }]
        }],
    };

    var newVSReturningVisitorsOptions = {
        animationEnabled: true,
        theme: "light2",
        // title: {
        //     text: "Lastest Goal"
        // },
        backgroundColor: "#ffffff",
        legend: {
            fontFamily: "calibri",
            fontSize: 14,
            itemTextFormatter: function(e) {
                return e.dataPoint.name + ": " + Math.round(e.dataPoint.y / totalgoal * 100) + "%";
            }
        },
        data: []
    };

    newVSReturningVisitorsOptions.data = visitorsData["Goal"];
    $("#chartContainer").CanvasJSChart(newVSReturningVisitorsOptions);
    // pie.setPalette(new String[]{ "#fff", "#fff", "#fff", "#fff", "#fff" });

    function visitorsChartDrilldownHandler(e) {
        e.chart.options = visitorsDrilldownedChartOptions;
        // e.chart.options.data = visitorsData[e.dataPoint.name];
        e.chart.render();
    }
      });


    

    // ,{
    //         type: "spline", //change it to line, area, bar, pie, etc
    //         // xValueFormatString: "MM YYY",
    //         name: "Total Time",
    //         color: "#2E25A5",
    //         markerSize: 5,
    //         showInLegend: true,
    //         xValueFormatString: "MMMM",
    //         yValueFormatString: "#0h",
    //         // xValueFormatString: "MMMM",
    //         // yValueFormatString: "£#0K",
    //         dataPoints: [
    //             { label: "Jan 2019",  y: 12.28 },
    //             { label: "Feb 2019",  y: 13.83 },
    //             { label: "March 2019", y: 6.55 },
    //             { label: "April 2019",y: 8.81 },
    //             { label: "May 2019",  y: 24.37 },
    //             { label: "June 2019", y: 9.33 },
    //             // { label: "July", y: 3.06 },
    //             // { label: "Aug",  y: 2.94 },
    //             // { label: "Sep",  y: 5.41 },
    //             // { label: "Oct",  y: 2.17 },
    //             // { label: "Nov",  y: 2.17 },
    //             // { label: "Dec",  y: 2.80 }
    //         ]
    //     }

    

    // // appear banner
    // setTimeout(() => {
    //     $('.adbanner').removeClass('adbannerdisplay');
    //     setTimeout(() => {
    //         $('#adbanner0').removeClass('adbannerdisplay');
    //         setTimeout(() => {
    //             $('#adbanner2').removeClass('adbannerdisplay');
    //             setTimeout(() => {
    //                 $('#adbanner4').removeClass('adbannerdisplay');
    //             }, 1000);
    //         }, 1000);
    //     }, 1000);
    //     // $('#adbanner2').removeClass('adbannerdisplay');
    //     // $('#adbanner3').removeClass('adbannerdisplay');
    // }, 2000);
    // $('#ad-close-btn').click(function() {
    //     $('.adbanner1').addClass('adbannerdisplay');
    // })
}

// Table action

