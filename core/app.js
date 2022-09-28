let inputs = Array.from(document.querySelectorAll(".input-box"))
let labels = Array.from(document.querySelectorAll(".label-box"))
let errors = Array.from(document.querySelectorAll(".input-error"))

// BORDER BOTTOM ORANGE
inputs.forEach(input => input.addEventListener("click", (e) => {
    e.target.classList.add("input-box-focused")
}))

// LABEL INPUT
inputs.forEach(input => input.addEventListener("focusin", (e) => {
    labels.find(label => label.getAttribute("data-type") == e.target.id).classList.add("label-focused")
}))

inputs.forEach(input => input.addEventListener("focusout", (e) => {
    if(e.target.value === "" || e.target.value === undefined)
    {
        labels.find(label => label.getAttribute("data-type") == e.target.id).classList.remove("label-focused")
    }
}))

// CHECK VALUE

let mailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
let phoneRegex = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/

inputs.forEach(input => input.addEventListener("input", (e) => {
    switch(e.target.id)
    {
        case "login" :
            {
                if(e.target.value.match(mailRegex) || e.target.value.match(phoneRegex))
                {
                    errors.find(error => error.getAttribute("data-type") == e.target.id).classList.remove("show-error")
                }
                else
                {
                    errors.find(error => error.getAttribute("data-type") == e.target.id).classList.add("show-error")
                }
                break;
            }
        case "mdp" :
            {
                if(e.target.value.length >= 4 && e.target.value.length <= 60)
                {
                    errors.find(error => error.getAttribute("data-type") == e.target.id).classList.remove("show-error")
                }
                else
                {
                    errors.find(error => error.getAttribute("data-type") == e.target.id).classList.add("show-error")
                }
                break;
            }
    }
}))

//MORE INFORMATION BTN

document.querySelector(".more-information").addEventListener("click", (e) => {
    e.preventDefault()
    e.target.classList.add("more-information-hide")
    document.querySelector(".form-footer-security-information").classList.add("show-security-information")
})

// BTN CONNECT

let btnConnect = document.querySelector(".btn-submit");
let connexionError = document.querySelector(".connexion-error-container");
btnConnect.addEventListener("click", (e) => {
    let v1 = false;
    let v2 = false;
    inputs.forEach(input => {
        switch(input.id)
        {
        case "login" :
            {
                if(input.value.match(mailRegex) || input.value.match(phoneRegex))
                {
                    v1 = true
                }
                break;
            }
        case "mdp" :
            {
                if(input.value.length >= 4 && input.value.length <= 60)
                {
                    v2 = true
                }
                break;
            }
        }
    })
    if((v1 && v2) === false)
    {
        e.preventDefault()
    }
    connexionError.classList.add("show-connexion-error")
})

