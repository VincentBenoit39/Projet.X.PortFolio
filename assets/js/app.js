var ctx = document.getElementById("myChart").getContext("2d");
var data = {
    labels: ["PHP", "Javascript", "Laravel", "Sass", "HTML & CSS", "Bootstrap", "Git", "Wordpress"],
    datasets: [
        {
            label: "Relative Skill",
            fillColor: "rgba(151,187,205,0.5)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(220,220,220,1)",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [60, 75, 55, 60, 100, 85, 80, 45]
        }
    ]
};
new Chart(ctx, {'type':'radar','data': data, 'options': {	
	scaleOverlay : false,
	scaleOverride : false,
	scaleSteps : null,
	scaleStepWidth : null,
	scaleStartValue : null,
	scaleShowLine : true,
	scaleLineColor : "#999",
	scaleLineWidth : 1,
	scaleShowLabels : false,
	scaleLabel : "<%=value%>",
	scaleFontFamily : "'Arial'",
	scaleFontSize : 12,	
	scaleFontStyle : "normal",
	scaleFontColor : "#666",
	scaleShowLabelBackdrop : true,
	scaleBackdropColor : "rgba(255,255,255,1)",
	scaleBackdropPaddingY : 20,	
	scaleBackdropPaddingX : 200,
	angleShowLineOut : true,
	angleLineColor : "rgba(255,255,255,0.3)",
	angleLineWidth : 1,			
	pointLabelFontFamily : "'Arial'",
	pointLabelFontStyle : "normal",
	pointLabelFontSize : 12,
	pointLabelFontColor : "#EFEFEF",
	pointDot : true,
	pointDotRadius : 3,
	pointDotStrokeWidth : 1,
	datasetStroke : true,
	datasetStrokeWidth : 1,
	datasetFill : true,
	animation : true,
	animationSteps : 60,
	animationEasing : "easeOutQuart",
	onAnimationComplete : null
	
}});
