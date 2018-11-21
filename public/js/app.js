$(function () {
	$('#list-of-projects').on('change', onNewProjectSelected);
});

function onNewProjectSelected() {
	var project_id = $(this).val();
	window.location.href = "seleccionar/proyecto/"+project_id;
}
