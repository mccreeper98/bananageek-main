
$(document).ready(() => {
    $('#btn-1').click(() => {
        const name = $('#name').val()
        const email = $('#email').val()
        const tel = $('#phone').val()
        const desc = $('#service').val()
        if ($('#test5').is(":checked") && name && email && tel && desc) {
            sendData(name, email, tel, desc)
        }
    })
})
function sendData(name, email, tel, desc) {
    $.post('https://bananageek.mx/api/contact/submit',
        {
            name, email, tel, desc
        }, (result) => {
            swal.fire({
                title: '¡Listo!',
                text: 'Hemos recibido tu información, pronto nos comunicaremos contigo',
                icon: 'success',
                confirmButtonText: 'Aceptar'
            });

            $('#name').val('');
            $('#email').val('');
            $('#phone').val('');
            $('#service').val('');

        });
}
