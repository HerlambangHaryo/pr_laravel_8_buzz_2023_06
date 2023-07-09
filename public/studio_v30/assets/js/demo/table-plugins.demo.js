/*
Template Name: STUDIO - Responsive Bootstrap 5 Admin Template
Version: 3.0.0
Author: Sean Ngu
*/

var handleRenderTableData = function() {
	var table = $('#datatableDefault').DataTable({
		dom: "<'row mb-3'<'col-md-4 mb-3 mb-md-0'l><'col-md-8 text-right'<'d-flex justify-content-end'f<'ms-2'B>>>>t<'row align-items-center'<'mr-auto col-md-6 mb-3 mb-md-0 mt-n2 'i><'mb-0 col-md-6'p>>",
		lengthMenu: [ 10, 20, 30, 40, 50 ],
		pageLength: 50,
		responsive: true,
		order: [[0, 'desc']],
		buttons: [
			{ extend: 'print', className: 'btn btn-default btn-sm' },
			{ extend: 'csv', className: 'btn btn-default btn-sm' }
		]
	});
};


/* Controller
------------------------------------------------ */
$(document).ready(function() {
	handleRenderTableData();
});