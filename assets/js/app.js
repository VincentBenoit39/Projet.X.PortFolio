var ctx = document.getElementById("myChart");
var data = {
    labels: ["PHP", "Javascript", "Laravel", "Sass", "HTML & CSS", "Bootstrap", "Git", "Wordpress"],
    datasets: [
        {
            label: "Compétences",
            fill: true,
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgb(255, 99, 132)',
            pointBackgroundColor: 'rgb(255, 99, 132)',
            pointBorderColor: '#fff',
            pointHoverBackgroundColor: '#fff',
            pointHoverBorderColor: 'rgb(255, 99, 132)',
            data: [60, 75, 55, 60, 100, 85, 80, 45]
        }, {
            label: 'My Second Dataset',
            data: [10, 10, 10, 10, 10, 10, 10, 10],
            fill: true,
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgb(54, 162, 235)',
            pointBackgroundColor: 'rgb(54, 162, 235)',
            pointBorderColor: '#fff',
            pointHoverBackgroundColor: '#fff',
            pointHoverBorderColor: 'rgb(54, 162, 235)'
          }]
        };
new Chart(ctx, {'type':'radar','data': data, options: {plugins: {legend: {display: false,}}} ,'options': {
	animationSteps: 30,
	animationEasing: "easeInOutExpo",
	responsive: true,
	showTooltips: true,
	scaleOverride: true,
    scaleSteps: 5,
    scaleStepWidth: 100,
    scaleStartValue: 50,
    scaleLineColor: "rgba(200,200,200,.15)",
    angleShowLineOut: true,
    angleLineWidth : 1,
    angleLineColor : "rgba(200,200,250,.15)",
    pointLabelFontFamily : "'freight-sans-pro', Calibri, Candara, Segoe, 'Segoe UI', Optima, Arial, sans-serif",
    pointLabelFontSize : 14,
	pointLabelFontColor : "#99b",
	pointDot : false,
	datasetStrokeWidth : 1
    
}});