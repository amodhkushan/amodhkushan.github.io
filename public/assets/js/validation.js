// EMAIL VALIDATION

function email_validation() {
    let iemail = document.form1.email;
    let error = document.getElementById('iemailerror');
    error.innerText = "";
    let pattern = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;

    iemail.classList.remove('is-invalid', 'is-valid');
    error.innerText = "";

    if(iemail.value === "") {
        error.innerText="Required field";
        error.style.color='red';
        iemail.classList.add('is-invalid');
        return false;
    }

    if(!iemail.value.match(pattern)) {
        error.innerText="Enter valid e-mail address";
        error.style.color='red';
        iemail.classList.add('is-invalid');
        iemail.focus();
        return false;
    }

    error.innerText="Valid Email Address";
    error.style.color='green';
    iemail.classList.add('is-valid');
    return true;
}

// NAME VALIDATION

function name_validation() {
    let iname = document.form1.name;
    let error = document.getElementById('inameerror');
    error.innerText = "";
    let pattern = /^[a-zA-Z\s]{3,45}$/;

    iname.classList.remove('is-invalid', 'is-valid');
    error.innerText = "";

    if(iname.value === "") {
        error.innerText="Please Enter Name";
        error.style.color='red';
        iname.classList.add('is-invalid');
        return false;
    }

    if(!iname.value.match(pattern)) {
        error.innerText="Name is not valid";
        error.style.color='red';
        iname.classList.add('is-invalid');
        iname.focus();
        return false;
    }

    error.innerText="Valid Name";
    error.style.color='green';
    iname.classList.add('is-valid');
    return true;
}

// SUBJECT VALIDATION

function subj_validation() {
    let isubj = document.form1.subj;
    let error = document.getElementById('isubjerror');
    error.innerText = "";
    let pattern = /^[a-zA-Z0-9\s]{10,50}$/;

    isubj.classList.remove('is-invalid', 'is-valid');
    error.innerText = "";

    if(isubj.value === "") {
        error.innerText="Please Enter Subject";
        error.style.color='red';
        isubj.classList.add('is-invalid');
        return false;
    }

    if(!isubj.value.match(pattern)) {
        error.innerText="Minimum Subject Length 10 Characters and Maximum 50 Characters";
        error.style.color='red';
        isubj.classList.add('is-invalid');
        isubj.focus();
        return false;
    }

    error.innerText="Valid Subject";
    error.style.color='green';
    isubj.classList.add('is-valid');
    return true;
}

// MESSAGE VALIDATION

function msg_validation() {
    let imsg = document.form1.msg;
    let error = document.getElementById('imsgerror');
    error.innerText = "";
    let pattern = /^[\s\S]{0,500}$/;

    imsg.classList.remove('is-invalid', 'is-valid');
    error.innerText = "";

    if(imsg.value === "") {
        error.innerText="Please Enter Message";
        error.style.color='red';
        imsg.classList.add('is-invalid');
        return false;
    }

    if(!imsg.value.match(pattern)) {
        error.innerText="Maximum 500 Characters";
        error.style.color='red';
        imsg.classList.add('is-invalid');
        imsg.focus();
        return false;
    }

    error.innerText="Valid Message";
    error.style.color='green';
    imsg.classList.add('is-valid');
    return true;
}

