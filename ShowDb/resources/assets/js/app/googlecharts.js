$(document).ready(function() {

    console.log(GoogleCharts);
    // Load the Visualization API and the corechart package.
    //google.charts.load('current', {'packages':['corechart']});

    // Set a callback to run when the Google Visualization API is loaded.
    if(typeof drawChartsLocal == 'function') {
	    //GoogleCharts.load(drawChartsLocal, {
        //    'packages': ['geochart'],
        //    'mapsApiKey': 'AIzaSyC94p4NDgSVwh34FPRCDvaUDnNMA1V-sSU'
        //});
        GoogleCharts.load(drawChartsLocal);
    }

});
