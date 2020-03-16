$(document).ready(function () {

	// $(document).on("click", ".tombolTambah", function () {

	// 	$('#title').html('Form tambah data');
	// 	$('.modal-footer button[type=submit]').html('Simpan');
	// });
	// $(document).on("click", "#ubahData", function () {

	// 	const id = $(this).data('id');
	// 	$('#title').html('Form Ubah data');
	// 	$('.modal-footer button[type=submit]').html('Submit');
	// 	$.ajax({
	// 		url: "http://localhost/ci_Model/ac/getUpdate/",

	// 		method: "POST",
	// 		data: {
	// 			id: id
	// 		},
	// 		dataType: "json",
	// 		success: function (data) {
	// 			$('#asset').val(data.asset);
	// 			$('#wing').val(data.wing);
	// 			$('#lantai').val(data.lantai);
	// 			$('#lokasi').val(data.lokasi);
	// 			$('#merk').val(data.merk);
	// 			$('#jenis').val(data.jenis);
	// 			$('#type').val(data.type);
	// 			$('#kapasitas').val(data.kapasitas);
	// 			$('#refrigerants').val(data.refrigerants);
	// 			$('#datepicker').val(data.tgl_pemasangan);
	// 			$('#jenis_kerusakan').val(data.jenis_kerusakan);
	// 			$('#reservation').val(data.tgl_maint);
	// 			$('#jenis_kerusakan').val(data.jenis_kerusakan);
	// 			$('#st_kompresor').val(data.st_kompresor);
	// 			$('#status').val(data.status);
	// 			$('#catatan').val(data.catatan);
	// 		}
	// 	});
	// });

});

$(function () {



	$('#status').change(function () {
		var status = $('#status').val();
		if (status == "Normal") {
			document.getElementById('jenis_kerusakan').value = "";
			$('#jenis_kerusakan').attr('readonly', true);
		} else {
			$('#jenis_kerusakan').attr('required', true);
			$('#jenis_kerusakan').removeAttr('readonly', false);
		}
	});

	$('#jenis').change(function () {
		var jenis = $('#jenis option:selected').val();
		if (jenis == "Inverter") {
			document.getElementById('refrigerants').innerHTML =
				"<option value='R410'>R410</option><option value='R320'>R32</option>";
		} else {

			document.getElementById('refrigerants').innerHTML =
				"<option value='R22'>R22</option><option value='R410'>R410</option><option value='R320'>R32</option><option value='Musicool'>Musicool</option>";
		}
	});

	$('#merk').change(function () {
		var merk = $('#merk option:selected').val();
		if (merk == "Daikin") {
			document.getElementById('type').innerHTML =
				"<option value='Cassete'>Cassete</option><option value='Sentral'>Sentral</option><option value='Splite'>Splite</option><option value='Standing Floor'>Standing Floor</option>";
			document.getElementById('kapasitas').innerHTML =
				"<option value='1/2 PK'>1/2 PK</option><option value='3/4 PK'>3/4 PK</option><option value='1 PK'>1 PK</option><option value='1,5 PK'>1,5 PK</option><option value='2 PK'>2 PK</option><option value='2,5 PK'>2,5 PK</option><option value='3 PK'>3 PK</option><option value='5 PK'>5 PK</option><option value='10 PK'>10 PK</option>";
		} else if (merk == "LG" || merk == "Sharp" || merk == "Panasonic") {
			document.getElementById('type').innerHTML = "<option value='Splite'>Splite</option>";
			document.getElementById('kapasitas').innerHTML =
				"<option value='1/2 PK'>1/2 PK</option><option value='3/4 PK'>3/4 PK</option><option value='1 PK'>1 PK</option><option value='1,5 PK'>1,5 PK</option><option value='2 PK'>2 PK</option>";
		} else if (merk == "General") {
			document.getElementById('type').innerHTML =
				"<option value='Cassete'>Cassete</option><option value='Splite'>Splite</option>";
			document.getElementById('kapasitas').innerHTML =
				"<option value='2 PK'>2 PK</option><option value='3 PK'>3 PK</option><option value='5 PK'>5 PK</option>";
		}
	});

	$('#wing').change(function () {
		var wing = $('#wing option:selected').val();
		if (wing == "Lainnya") {

			document.getElementById('lantai').innerHTML =
				"<option value='Lantai 1'>Lantai 1</option>";

		} else if (wing == "Wing C" || wing == "Wing D") {
			document.getElementById('lantai').innerHTML =
				"<option value='Lantai 1'>Lantai 1</option><option value='Lantai 2'>Lantai 2</option>";


			$('#lantai').attr('required', true);
		} else if (wing == "Wing A" || wing == "Wing B") {
			document.getElementById('lantai').innerHTML =
				"<option value='Lantai 1'>Lantai 1</option><option value='Lantai 2'>Lantai 2</option><option value='Lantai 3'>Lantai 3</option>";
			document.getElementById('lbl').innerText = "Lantai *";
			$('#lantai').attr('required', true);
		}
	})



	$(document).on('click', '#btn-del', function (e) {
		const href = $(this).attr('href')
		e.preventDefault();
		Swal.fire({
			title: 'Apa kamu yakin?',
			text: "Kamu tidak dapat mengembalikan ini!",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Iya, hapus itu!'
		}).then((result) => {
			if (result.value) {
				document.location.href = href;
				Swal.fire(
					'Deleted!',
					'File berhasil dihapus',
					'success'
				)
			}
		});
	});



});
