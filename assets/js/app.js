var ctx = document.getElementById("myChart");
var data = {
    labels: ["PHP", "Javascript", "Laravel", "Sass", "HTML & CSS", "Bootstrap", "Git", "Wordpress"],
    datasets: [
        {
            label: "Relative Skill",
            fillColor: "#fffff",
            strokeColor: "#fffff",
            pointColor: "#fffff",
            pointHighlightStroke: "#fffff",
            data: [55, 75, 60, 75, 95, 90, 80, 75]
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
    scaleStepWidth: 20,
    scaleStartValue: 0,
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