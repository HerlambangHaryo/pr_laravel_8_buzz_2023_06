/*
Template Name: STUDIO - Responsive Bootstrap 5 Admin Template
Version: 3.0.0
Author: Sean Ngu
*/

var handleInitHighlightJs = function() {
	$('.hljs-container pre code').each(function(i, block) {
		hljs.highlightBlock(block);
	});
};


/* Controller
------------------------------------------------ */
$(document).ready(function() {
	handleInitHighlightJs();
});