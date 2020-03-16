const flashdata = $('.flash-data').data('flashdata');

if (flashdata) {
	Swal.fire({
		type: 'success',
		title: 'Terimah Kasih',
		text: flashdata,
		footer: '<a href>WEBTEK</a>'
	});
}
