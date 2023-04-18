let container = document.querySelector('.content-slider-container')
const countSlides = document.querySelectorAll('.slider-item').length

let widthForm = document.querySelector('.auth-form').clientWidth
const switchAuth = document.querySelector('.switch-auth')
const switchReg = document.querySelector('.switch-reg')
const authSlider = document.querySelector('.auth-slider')
let modalAuth = document.querySelector('.modal-auth')

// генерация точек слайдера
generateDots()

let widthSlide = document.querySelector('.slider-item').clientWidth
const dots = document.querySelectorAll('.dot')
const prevButton = document.querySelector('.prev-btn')
const nextButton = document.querySelector('.next-btn')
let positionX = 0
let maxPosition = (countSlides - 1) * widthSlide
let currentSlide = 1
// инициализация активного слайда по точке
checkDot(currentSlide)

function generateDots(){
    let fieldDots = document.querySelector('.slider-dots')
    let slides = 1

    while (slides <= countSlides){
        fieldDots.innerHTML += `<div class='dot' onclick='checkDot(${slides++})'></div>`
    }
}

nextButton.addEventListener('click',function (){
    if (currentSlide === countSlides){
        container.style.transform = `translateX(0px)`
        positionX = 0
        currentSlide = 1
    }
    else{
        positionX += widthSlide
        container.style.transform = `translateX(-${positionX}px)`
        ++currentSlide
    }
    checkDot(currentSlide)
    info()
})

prevButton.addEventListener('click',function (){
    if (currentSlide === 1){
        positionX = maxPosition
        container.style.transform = `translateX(-${positionX}px)`
        currentSlide = countSlides
    }
    else {
        positionX -= widthSlide
        container.style.transform = `translateX(-${positionX}px)`
        --currentSlide
    }
    checkDot(currentSlide)
    info()
})

// инфа для проверки работы слайдера
function info(){
    console.log(currentSlide)
    console.log(positionX)
}

// переключение точек слайдера
function checkDot(slide){
    let i = countSlides
    while(--i){
        dots[i].style.background = '#b9b7b7'
    }
    if (slide === 1){
        container.style.transform = `translateX(0px)`
        positionX = 0
        dots[0].style.background = '#e06421'
    }
    else{
        dots[0].style.background = '#b9b7b7'
        container.style.transform = `translateX(-${(slide - 1) * widthSlide}px)`
        dots[slide - 1].style.background = '#e06421'
    }
}

function openAuth(){
    modalAuth.style.visibility = "visible"
    modalAuth.style.opacity = "100"
}

function closeAuth(){
    modalAuth.style.visibility = "hidden"
    modalAuth.style.opacity = "0"
}

switchAuth.addEventListener('click',function(){
    authSlider.style.transform = `translateX(-${widthForm}px)`
})
switchReg.addEventListener('click',function(){
    authSlider.style.transform = `translateX(0px)`
})
