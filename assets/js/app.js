var ctx = document.getElementById("myChart");
var data = {
    labels: ["PHP", "Javascript", "Laravel", "Sass", "HTML & CSS", "Bootstrap", "Git", "Wordpress"],
    datasets: [
        {
            label: "Compétences",
            fill: true,
            backgroundColor: '#26619c6a',
            borderColor: '#26619c6a',
            pointBackgroundColor: '#26619C',
            pointBorderColor: '#fff',
            pointHoverBackgroundColor: '#fff',
            pointHoverBorderColor: '#26619C',
            data: [60, 75, 55, 60, 100, 85, 80, 45]
        }, {
            label: '-',
            data: [1, 1, 1, 1, 1, 1, 1, 1],
            fill: true,
            backgroundColor: 'rgba(247, 247, 247, 0)',
            borderColor: 'rgba(247, 247, 247, 0)',
            pointBackgroundColor: 'rgba(247, 247, 247, 0)',
            pointBorderColor: 'rgba(247, 247, 247, 0)',
            pointHoverBackgroundColor: 'rgba(247, 247, 247, 0)',
            pointHoverBorderColor: 'rgba(247, 247, 247, 0)'
          }]
        };
new Chart(ctx, {'type':'radar','data': data, options: {plugins: {legend: {display: false,}}} ,'options': {
	animationSteps: 1,
	animationEasing: "easeInOutExpo",
	responsive: true,
	showTooltips: true,
	scaleOverride: true,
    // scaleSteps: 1,
    // scaleStepWidth: 1,
    // scaleStartValue: 1,
    scaleLineColor: "rgba(200,200,200,.15)",
    angleShowLineOut: true,
    // angleLineWidth : 1,
    angleLineColor : "rgba(200,200,250,.15)",
    pointLabelFontFamily : "'freight-sans-pro', Calibri, Candara, Segoe, 'Segoe UI', Optima, Arial, sans-serif",
    // pointLabelFontSize : 2,
	pointLabelFontColor : "#99b",
	pointDot : true,
	// datasetStrokeWidth : 1
    
}});