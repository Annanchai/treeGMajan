function openNav() {
    document.getElementById("mobileMenu").style.width = "100%";
}

function closeNav() {
    document.getElementById("mobileMenu").style.width = "0";
    
}

/*Slider*/
/*var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function showSlides(n) {
    var i;
    var mySlides = document.getElementsByClassName("slides");
    if (n > mySlides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = mySlides.length}
    for (i = 0; i < mySlides.length; i++) {
        mySlides[i].style.display = "none";
}

    mySlides[slideIndex-1].style.display = "block";
}*/

var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("myslides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 3000);
    
}

var index = 0;
showInSlides();

function showInSlides() {
    var i;
    var slide = document.getElementsByClassName("inslides");
    for (i = 0; i < slide.length; i++) {
        slide[i].style.display = "none";
    }
    index++;
    if (index > slide.length) {index = 1}
    slide[index-1].style.display = "block";
    setTimeout(showInSlides, 3000);
    
}
