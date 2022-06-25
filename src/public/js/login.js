const form = document.forms.login__form;
const regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

window.onload = () => {
    listenerFormulario();
}

const listenerFormulario = () => {
    form.addEventListener('submit', (e) => {
        e.preventDefault();

        const { email, senha } = form;

        if(!isEmailValid(email.value)){
            email.focus();
        }
        else{
            alert('tudo certo')
        }

    });
};

const isEmailValid = (email) => {

    if (regexEmail.test(email)) {
        return (true)
    }
    
    return (false)
}

const setFieldIncorrect = (field, message) => {
    let nodeMessage = document.createTextNode(message);
    field.append(nodeMessage);
};