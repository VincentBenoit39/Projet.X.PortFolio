var ctx = document.getElementById("myChart");
var data = {
    labels: ["PHP", "Javascript", "Laravel", "Sass", "HTML & CSS", "Bootstrap", "Git", "Wordpress"],
    datasets: [
        {
            label: "Relative Skill",
            fillColor: "rgba(220,220,220,0.5)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [60, 75, 55, 60, 100, 85, 80, 45]
        }
    ]
};
new Chart(ctx, {'type':'radar','data': data, 'options': {
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