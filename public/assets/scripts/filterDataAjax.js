$("#filter").on('click', function(event) {
	$.ajax({
		type: 'POST',
		url: '<?=admin_url("Beranda/FilterAjax/")?>',
		data: {
          identifier: $('#identifier').val(),
          jenis_kelamin: $('#jenis_kelamin').val(),
          agama: $('#agama').val(),
          eselon: $('#eselon').val(),
          pendidikan: $('#pendidikan').val(),
          satker: $('#satker').val()
        }
		}).done(function(response) {
			if (response.success) {
				// Do it here
			} else swal('Gagal', 'Data gagal dihapus.', 'error');
		});
});