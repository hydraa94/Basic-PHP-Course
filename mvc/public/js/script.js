$(function () {
    $('.tampilModalUbah').on('click', function () {
        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/phpcourse/mvc/public/siswa/getubah',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#nama').val(data.nama);
                $('#nik').val(data.nik);
                $('#email').val(data.email);
                $('#jenjang').val(data.jenjang);
                $('#id').val(data.id);
            }
        });
    });
});

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))