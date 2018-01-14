
document.addEventListener("DOMContentLoaded", function() {
	console.log("Rendering Maths...");
	renderMathInElement(document.getElementById('main-content'), {
		"delimiters" : [
			{left: "$$", right: "$$", display: true},
			{left: "$", right: "$", display: false},
			{left: "\\begin\{equation\}", right: "\\end\{equation\}", display: true}
		]
	});
});