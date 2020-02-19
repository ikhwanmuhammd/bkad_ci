//flashdata
const flashData = $('.flash-data').data('flashdata');
const halaman = $('.halaman').data('halaman');
//edit,tambah DESA
if (flashData) {
	Swal.fire({
		title : halaman,
		text : 'Berhasil '+ flashData,
		type : 'success'
	});
}

const gagal = $('.flashgagal').data('flashgagal');
if (gagal) {
	Swal.fire({
		icon: 'error',
		title: 'Oops...',
		text: 'Upload foto gagal!'
	});
}

//hapus
$('.tombol-hapus').on('click', function(e) {
	e.preventDefault();
	const href = $(this).attr('href');
	
	const swalWithBootstrapButtons = Swal.mixin({
		customClass: {
			confirmButton: 'btn btn-success m-3',
			cancelButton: 'btn btn-danger m-3'
		},
		buttonsStyling: false
	});

	swalWithBootstrapButtons.fire({
	  title: 'Apakah Anda Yakin?',
	  text: "Hapus " + halaman,
	  type: 'warning',
	  showCancelButton: true,
	  confirmButtonText: 'Ya',
	  cancelButtonText: 'Tidak',
	  reverseButtons: true
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		} else if (
			/* Read more about handling dismissals below */
			result.dismiss === Swal.DismissReason.cancel
		){
			swalWithBootstrapButtons.fire(
				halaman,
				'Batal Dihapus ',
				'error'
			);
		}
	});
});