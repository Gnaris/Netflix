let inputs = Array.from(document.querySelectorAll(".input-box"))
let labels = Array.from(document.querySelectorAll(".label-box"))
let errors = Array.from(document.querySelectorAll(".input-error"))

inputs.forEach(input => input.addEventListener("click", (e) => {
    e.target.classList.add("input-box-focused")
}))

inputs.forEach(input => input.addEventListener("focusin", (e) => {
    labels.find(label => label.getAttribute("data-type") == e.target.id).classList.add("label-focused")
}))

inputs.forEach(input => input.addEventListener("focusout", (e) => {
    if(e.target.value === "" || e.target.value === undefined)
    {
        labels.find(label => label.getAttribute("data-type") == e.target.id).classList.remove("label-focused")
    }
}))

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
