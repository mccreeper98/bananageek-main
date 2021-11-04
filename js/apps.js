import {ENDPOINT} from './enviroments.js'
let step = 1;
let iosSelected = false;
let androidSelected = false;
let webSelected = false;
let nombre = '';
let correo = '';
let telefono = '';
let descripcion = '';
function modalInitialState() {
    // Cleaning variables' state
    step = 1;
    nombre = '';
    correo = '';
    telefono = '';
    descripcion = '';
    iosSelected = false;
    androidSelected = false;
    webSelected = false;
    // Cleaning platforms' state of first step
    $('#platform-ios').removeClass('platform-selected');
    $('#platform-android').removeClass('platform-selected');
    $('#platform-web').removeClass('platform-selected');
    // Cleaning modal inputs
    $('#txtDescripcion').val('');
    $('#txtCelular').val('');
    $('#txtCorreo').val('');
    $('#txtNombre').val('');
    // Showing only the first step of contact process
    $('#step1').show();
    $('#step2').hide();
    $('#step3').hide();
    $('#step4').hide();
    $('#step5').hide();
    $('#step6').hide();
    $('#step7').hide();


}
function step1Listeners() {
    $('#btn-contacto').click(() => {
        modalInitialState();
    });
    $('#platform-ios').click(() => {
        iosSelected = !iosSelected;
        $('#platform-ios').toggleClass('platform-selected')
    });
    $('#platform-android').click(() => {
        androidSelected = !androidSelected;
        $('#platform-android').toggleClass('platform-selected')
    });
    $('#platform-web').click(() => {
        webSelected = !webSelected;
        $('#platform-web').toggleClass('platform-selected')
    });
}
function changeStep() {
    if(step === 1) {
        $('#step1').fadeOut('fast', 'linear', () => {
            $('#step2').fadeIn('slow', 'linear');
        });
    } else if (step === 2) {
        $('#step2').fadeOut('fast', 'linear', () => {
            $('#step3').fadeIn('slow', 'linear');
            $('#step3 .textfield').first().focus();
        });
    } else if (step === 3) {
        $('#step3').fadeOut('fast', 'linear', () => {
            $('#step4').fadeIn('slow', 'linear');
            $('#step4 .textfield').first().focus();
        });
    } else if (step === 4) {
        $('#step4').fadeOut('fast', 'linear', () => {
            $('#step5').fadeIn('slow', 'linear');
            $('#step5 .textfield').first().focus();
        });
    } else if (step === 5) {
        $('#step5').fadeOut('fast', 'linear', () => {
            $('#step6').fadeIn('slow', 'linear');
            $('#step6 .textfield').first().focus();
        });
    } else if (step === 6) {
        $('#step6').fadeOut('fast', 'linear', () => {
            $('#step7').fadeIn('slow', 'linear');
            $('#step7 .textfield').first().focus();
        });
    }
    step += 1;
}
function changeStepListeners() {
    $('#btn-next').click(() => {

        if(step === 1) {
            if( iosSelected || androidSelected || webSelected) {
                changeStep();
            }
        } else if(step === 2) {
            changeStep();
        } else if(step === 3) {
            // required in step 3
            nombre = $('#txtNombre').val();
            $('#lblNombre').html(nombre);
            if( nombre !== '') {
                changeStep();
            }
        } else if(step === 4) {
            // required in step 4
            correo = $('#txtCorreo').val();
            if( correo.includes('@')) {
                changeStep();
            }
        } else if(step === 5) {
            // required in step 5
            telefono = '(+' + $('#cbCountryCode').val() + ') ' +
                $('#txtCelular').val();
            if( telefono !== '' && $('#txtCelular').val() !== '') {
                changeStep();
            }
        } else if(step === 6) {
            // required in step 6
            descripcion = $('#txtDescripcion').val();
            if( descripcion !== '' ) {
                const obj = {
                    correo,
                    nombre,
                    telefono,
                    descripcionProyecto: descripcion,
                    paraAndroid: androidSelected,
                    paraIos: iosSelected,
                    paraWeb: webSelected
                };
                $.post(ENDPOINT + '/contact/submit',
                    obj, (rslt) => {
                    console.log(rslt);
                });
                changeStep();
            }
        } else {
            console.debug('nombre', nombre);
            console.debug('correo', correo);
            console.debug('telefono', telefono);
            console.debug('descripcion', descripcion);
            console.debug('android', androidSelected);
            console.debug('ios', iosSelected);
            console.debug('web', webSelected);
            $('.modal').modal('close');
        }


    });
}
function setuoListeners() {
    step1Listeners();
    changeStepListeners();
}

$(document).ready(() => {
    // init modal from materialize
    $('.modal').modal();
    $('#cbCountryCode').formSelect();
    // Setting up page
    setuoListeners();
    modalInitialState();
});
