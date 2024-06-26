$(function() {
    $('.chips').chips();
    $('.chips-initial').chips({
        data: [{
            tag: 'Apple',
        }, {
            tag: 'Microsoft',
        }, {
            tag: 'Google',
        }],
    });
    $('.chips-placeholder').chips({
        placeholder: 'Ingresar servicio',
        secondaryPlaceholder: '+Tag',
    });
    $('.chips-autocomplete').chips({
        autocompleteOptions: {
            data: {
                'Apple': null,
                'Microsoft': null,
                'Google': null
            },
            limit: Infinity,
            minLength: 1
        }
    });
});