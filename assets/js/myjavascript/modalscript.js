//ubah data desa
$(function() {
	$('#modal-edit-desa').on('show.bs.modal', function(event){

	var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
        var modal = $(this)

        // Isi nilai pada field
        $('#id').val(div.data('id'));
        $('#kode_desa').val(div.data('kode_desa'));
        $('#nama_desa').val(div.data('nama_desa'));
        $('#nama_kepala_desa').val(div.data('nama_kepala_desa'));
        $('#nama_kecamatan').val(div.data('nama_kecamatan'));
    
	});

});