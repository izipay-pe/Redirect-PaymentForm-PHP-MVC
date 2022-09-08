const sendData = (path, parameters, method = 'post') => {
    const form = document.createElement('form');
    form.method = method;
    form.action = path;
    document.body.appendChild(form);

    for (const key in parameters) {
        const formField = document.createElement('input');
        formField.type = 'hidden';
        formField.name = key;
        formField.value = parameters[key];
        form.appendChild(formField);
    }
    form.submit();
}
document.getElementById("List-Product").addEventListener("click", (e) => {
    if (e.target.nodeName == "BUTTON") {
        let data = {
            product: e.target.parentElement.children[0].innerText,
            image: e.target.parentElement.children[1].src,
            amount: e.target.parentElement.children[2].value,
        }
        e.target.parentElement.parentElement.outerHTML  = "";
        sendData('index.php', data, "post");
    }
})

const infoPayment = (e) =>{
    e.preventDefault();
    let dataPayment = {
        amount: e.target.children[0].value,
        image:  e.target.children[1].value,
        firstName: e.target.children[2].children[1].value,
        lastName: e.target.children[3].children[1].value,
        email: e.target.children[4].children[1].value,
    }
    sendData('index.php?action=infoPayment', dataPayment, "post");
}