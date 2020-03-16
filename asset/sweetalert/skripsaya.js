const flashdata = $('.flash-data').data('flashdata');

if (flashdata) {
	Swal.fire({
		type: 'error',
		title: 'Oops..',
		text: '' + flashdata
		// footer: '<a href>Why do I have this issue?</a>'
	});
}
