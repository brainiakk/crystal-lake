$(document).ready(function () {

    $('#standard').change(function ()  {
        if (this.checked) {
            $('#standard-input').removeAttr('disabled');
        } else if (this.checked == false) {
            $('#standard-input').attr('disabled', 'disabled');
        }
    });
    $('#deluxe').change(function () {
        if (this.checked) {
            $('#deluxe-input').removeAttr('disabled');
        }else if (this.checked == false) {
            $('#deluxe-input').attr('disabled', 'disabled');
        }
    });
    $('#executive').change(function () {
        if (this.checked) {
            $('#executive-input').removeAttr('disabled');
        }else if (this.checked == false) {
            $('#executive-input').attr('disabled', 'disabled');
        }
    });
    $('#studio').change(function ()  {
        if (this.checked) {
            $('#studio-input').removeAttr('disabled');
        } else if (this.checked == false) {
            $('#studio-input').attr('disabled', 'disabled');
        }
    });
    $('#diplomatic').change(function () {
        if (this.checked) {
            $('#diplomatic-input').removeAttr('disabled');
        }else if (this.checked == false) {
            $('#diplomatic-input').attr('disabled', 'disabled');
        }
    });
    $('#royal').change(function () {
        if (this.checked) {
            $('#royal-input').removeAttr('disabled');
        }else if (this.checked == false) {
            $('#royal-input').attr('disabled', 'disabled');
        }
    });
    $('#bedroom').change(function () {
        if (this.checked) {
            $('#bedroom-input').removeAttr('disabled');
        }else if (this.checked == false) {
            $('#bedroom-input').attr('disabled', 'disabled');
        }
    });
});
