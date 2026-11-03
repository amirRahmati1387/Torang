let m1 = document.getElementById("hamberger_menue_slider_1")
let m2 = document.getElementById("hamberger_menue_slider_2")
let body = document.getElementById("body")
function hambergerMenue(el) {
    if (el == "open") {
        m1.classList.remove("invisible")
        m1.classList.add("visible")
        m1.classList.add("opacity-100")
        m2.classList.remove("translate-x-100")
        body.classList.remove("overflow-x-hidden")
        body.classList.add("overflow-y-hidden")
        m2.classList.add("translate-x-0")
    }
    if (el == "close") {
        body.classList.remove("overflow-y-hidden")
        body.classList.add("overflow-x-hidden")
        m1.classList.add("invisible")
        m1.classList.remove("visible")
        m1.classList.remove("opacity-100")
        m1.classList.add("opacity-0")
        m2.classList.add("translate-x-100")
        m2.classList.remove("translate-x-0")
    }
}

let l1 = document.getElementById("login_menue_slider_1")
let l2 = document.getElementById("login_menue_slider_2")

function loginANDsignup(el) {
    if (el == "open") {
        l2.classList.remove("scale-20")
        l1.classList.remove("invisible")
        l1.classList.add("visible")
        l1.classList.add("opacity-100")
        body.classList.remove("overflow-x-hidden")
        body.classList.add("overflow-y-hidden")
    }
    if (el == "close") {
        body.classList.remove("overflow-y-hidden")
        l2.classList.add("scale-20")
        body.classList.add("overflow-x-hidden")
        l1.classList.add("invisible")
        l1.classList.remove("visible")
        l1.classList.remove("opacity-100")
        l1.classList.add("opacity-0")
    }
}

// haj oghli

// let links = document.querySelectorAll('.links')
// links.forEach(link=>{
//     link.addEventListener('click', ()=>{
//         links.forEach(l=>{
//             l.classList.remove('bg-red-300')
//         })
//         link.classList.add('bg-red-300')
//     })
// })