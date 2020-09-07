$(function(){

    $('.tombolTambahData').on('click', function(){
        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit').html('Tambah Data');
        

    });

    $('.tampilModalUbah').on('click', function(){

        $('#formModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit').html('Ubah Data');
        $('.modal-body form').attr('action','http://localhost/phpmvc/public/karyawan/ubah');
        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/phpmvc/public/karyawan/getedit',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#nk').val(data.nk);
                $('#email').val(data.email);
                $('#stat').val(data.stat);
                $('#id').val(data.id);

            }
        });


    });

});