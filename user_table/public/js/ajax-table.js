$(document).ready(function() {
	button_bind();
});

function button_bind() {
	$('button.add').button(
    {
    	icons: { primary: 'ui-icon-plusthick' }
    });
	
	$('button.edit').button(
	{
		icons: { primary: 'ui-icon-pencil' },
		text: false
	});
	
	$('button.remove').button(
	{
		icons: { primary: 'ui-icon-closethick' },
		text: false
	});
	
	$('input.date').datepicker({
	    dateFormat: 'yy-mm-dd',
	    changeMonth: true,
	    changeYear: true,
	    yearRange: '1910:2012'
	});
}