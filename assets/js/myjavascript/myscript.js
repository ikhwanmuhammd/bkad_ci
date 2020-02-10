// format currency
function format_currency(input) {
	"use strict";
	var angka = input.val().replace(/[^0-9]+/g, "");
	var pjg = angka.length;
	if (pjg < 3) {
		input.val(angka.substring(0, pjg % 3) + angka.substring(pjg % 3));
	} else if (pjg == 3) {
		input.val(angka.substring(0, 3));
	} else if (pjg < 6) {
		input.val(angka.substring(0, pjg % 3) + "." + angka.substring(pjg % 3));
	} else if (pjg == 6) {
		input.val(angka.substring(0, 3) + "." + angka.substring(3, 6));
	} else if (pjg < 9) {
		input.val(angka.substring(0, pjg % 3) + "." + angka.substring(pjg % 3, 3 + (pjg % 3)) + "." + angka.substring(3 + (pjg % 3)));
	} else if (pjg == 9) {
		input.val(angka.substring(0, 3) + "." + angka.substring(3, 6) + "." + angka.substring(6, 9));
	} else if (pjg < 12) {
		input.val(angka.substring(0, pjg % 3) + "." + angka.substring(pjg % 3, 3 + (pjg % 3)) + "." + angka.substring(3 + (pjg % 3), 6 + (pjg % 3)) + "." + angka.substring(6 + (pjg % 3)));
	} else if (pjg == 12) {
		input.val(angka.substring(0, 3) + "." + angka.substring(3, 6) + "." + angka.substring(6, 9) + "." + angka.substring(9, 12));
	}

}
$(function () {
	"use strict";
	$("#fc").focus();
	$("#fc").bind("keyup", function (e) {
		if ((e.which > 47 && e.which < 58) || e.which === 8 || e.which === 116) {
			format_currency($(this));
		} else {
			e.preventDefault();
		}
	});
});
$(function () {
	"use strict";
	$("#fd").focus();
	$("#fd").bind("keyup", function (e) {
		if ((e.which > 47 && e.which < 58) || e.which === 8 || e.which === 116) {
			format_currency($(this));
		} else {
			e.preventDefault();
		}
	});
});
$(function () {
	"use strict";
	$("#fe").focus();
	$("#fe").bind("keyup", function (e) {
		if ((e.which > 47 && e.which < 58) || e.which === 8 || e.which === 116) {
			format_currency($(this));
		} else {
			e.preventDefault();
		}
	});
});
$(function () {
	"use strict";
	$("#ff").focus();
	$("#ff").bind("keyup", function (e) {
		if ((e.which > 47 && e.which < 58) || e.which === 8 || e.which === 116) {
			format_currency($(this));
		} else {
			e.preventDefault();
		}
	});
});
//onlynumber
function hanyaAngka(evt) {
	var charCode = (evt.which) ? evt.which : event.keyCode
	if (charCode > 31 && (charCode < 48 || charCode > 57))
		return false;
	return true;
}
//table-kelompok
var table = $('#tabel-kelompok').DataTable({
  'paging'      : true,
  'lengthChange': true,
  'searching'   : true,
  'ordering'    : true,
  'info'        : true,
  'autoWidth'   : true,
  'language': {
    "zeroRecords": "Maaf, tidak ada kelompok yang sesuai", //changes words used
    "lengthMenu": "Tampilkan _MENU_ kelompok per halaman", //changes words used
    "info": "&raquo; Tampil _START_ - _END_ dari _TOTAL_ kelompok", //changes words used
    "search": "", //changes words used originally - Search clients:
    "searchPlaceholder": "Cari Kelompok",
    "infoFiltered": "(filter dari total _MAX_ kelompok)"
  }
});
//table-desa
var table = $('#tabel-desa').DataTable({
  'paging'      : true,
  'lengthChange': true,
  'searching'   : true,
  'ordering'    : true,
  'info'        : true,
  'autoWidth'   : true,
  'language': {
    "zeroRecords": "Maaf, tidak ada desa yang sesuai", //changes words used
    "lengthMenu": "Tampilkan _MENU_ desa per halaman", //changes words used
    "info": "&raquo; Tampil _START_ - _END_ dari _TOTAL_ desa", //changes words used
    "search": "", //changes words used originally - Search clients:
    "searchPlaceholder": "Cari desa",
    "infoFiltered": "(filter dari total _MAX_ desa)"
  }
});
//table-anggota
var table = $('#tabel-anggota').DataTable({
  'paging'      : true,
  'lengthChange': true,
  'searching'   : true,
  'ordering'    : true,
  'info'        : true,
  'autoWidth'   : true,
  'language': {
    "zeroRecords": "Maaf, tidak ada anggota yang sesuai", //changes words used
    "lengthMenu": "Tampilkan _MENU_ anggota per halaman", //changes words used
    "info": "&raquo; Tampil _START_ - _END_ dari _TOTAL_ anggota", //changes words used
    "search": "", //changes words used originally - Search clients:
    "searchPlaceholder": "Cari anggota",
    "infoFiltered": "(filter dari total _MAX_ anggota)"
  }
});
