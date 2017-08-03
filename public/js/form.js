/**
 * Created by andrew on 06.06.2017.
 */

function validate_form() {
    var valid = true;

    if (validate_fio() == false)
        valid = false;
    if (validate_email() == false)
        valid = false;
    if (validate_phone() == false)
        valid = false;
    if (valid == false) {
        window.alert("Поля не заполнены или заполнены неверно. Незаполненные отмечены красным.");
        event.preventDefault();
    }
    return valid;
}

function validate_fio(){
    var regExp = /^[а-яА-ЯёЁa-zA-Z]+\s[а-яА-ЯёЁa-zA-Z]+\s[а-яА-ЯёЁa-zA-Z]+$/;
    if (!(regExp.test(document.contact_form.name.value))) {
        document.contact_form.name.style.backgroundColor = "#ff8e8d";
        return false;
    } else {
        document.contact_form.name.style.backgroundColor = "#c1ffc8";
        return true;
    }
}

function validate_phone(){
    var regExp = /\+[37][0-9]{9,11}/;
    if (!(regExp.test(document.contact_form.phone.value))) {
        document.contact_form.phone.style.backgroundColor = "#ff8e8d";
        return false;
    } else {
        document.contact_form.phone.style.backgroundColor = "#c1ffc8";
        return true;
    }
}

function validate_email(){
    var regExp = /^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$/;
    if (!regExp.test(document.contact_form.em.value)) {
        document.contact_form.em.style.backgroundColor = "#ff8e8d";
        return false;
    } else {
        document.contact_form.em.style.backgroundColor = "#c1ffc8";
        return true;
    }
}