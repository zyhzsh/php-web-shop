const carouselSlide=document.querySelector('.carousel-slide');
const carouseImages=document.querySelectorAll('.carousel-slide img');

const BtnRrev=document.querySelector('#btn-Rrev');
const BtnNext=document.querySelector('#btn-Next');

let productintro=document.getElementsByClassName('product_intro');

let counter=1;
let prevscounter=counter;
let description_id='#'+carouseImages[counter].alt;
let currentProductDescription=document.querySelector(description_id);

currentProductDescription.style.display="inline";

const size=carouseImages[0].clientWidth;
carouselSlide.style.transform='translateX('+(-size*counter )+'px)';

BtnNext.addEventListener('click',function(){
    if(counter>=carouseImages.length-1)return;
    carouselSlide.style.transition="transform 0.6s ease-in-out";
    counter++;
    UpdateIntro()
    carouselSlide.style.transform='translateX('+(-size*counter)+'px)';

});
BtnRrev.addEventListener('click',function(){
    if(counter<=0)return;
    carouselSlide.style.transition="transform 0.6s ease-in-out";
    counter--;
    UpdateIntro()
    carouselSlide.style.transform='translateX('+(-size*counter)+'px)';

});

carouselSlide.addEventListener('transitionend',function(){
    if(carouseImages[counter].id ==='lastClone'){
        carouselSlide.style.transition="none";
        counter=carouseImages.length-2;
        carouselSlide.style.transition="transform 0.6s ease-in-out";
    }
    if(carouseImages[counter].id ==='firstClone'){
        carouselSlide.style.transition="none";
        counter=carouseImages.length-counter;
        carouselSlide.style.transition="transform 0.6s ease-in-out";
    }
});




function UpdateIntro()
{
    productintro[0].style.display="none";
    productintro[1].style.display="none";
    productintro[2].style.display="none";
    description_id='#'+carouseImages[counter].alt;
    currentProductDescription=document.querySelector(description_id);  
    currentProductDescription.style.display="inline";

}

// let btn_search=document.getElementById("searchbtn");
// let text=document.getElementById("searchtext");
// btn_search.addEventListener("click",AddResquest);
// function AddResquest()
// {
//   btn_search.href='?page=search&text='+text.value;
// }