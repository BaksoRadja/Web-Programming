function notifikasi() {
    let form = document.getElementById('form-login');
    let elements = form.elements;
    let isEmpty = false;

    for (let i = 0; i < elements.length; i++){
        if (elements[i].type !== "submit" && elements[i].value.trim() === ""){
            elements[i].classList.add('error');
            isEmpty = true;
        } else {
            elements[i].classList.remove('error');
        }
    }

    if (isEmpty) {
        alert('Username dan Password harus diisi!!!');
        return false;
    } else {
        return true;
    }
}