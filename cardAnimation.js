//Finding elements that are taller or wider than the document
/*const docWidth = document.documentElement.offsetWidth;
const docHeight = document.documentElement.offsetHeight;

[].forEach.call(
    document.querySelector("*"), function(element){
        if(element.offsetWidth > docWidth){
            //console.log("Greater than document width: ", element);
        }else if(element.offsetHeight > docHeight){
            //console.log("Greater than document height: ", element);
        }
    }
)*/


//reference the menu open and close buttons and the menu itself
const menuBtn = document.querySelector(".menu-btn");
const menuClsBtn = document.querySelector(".menu-cls-btn");
const menu = document.querySelector(".menu");

//register event listeners for buttons
menuBtn.addEventListener("click", function(){
    //toggle the class that hides menu and menu close button
    this.classList.toggle("menu-hide");
    menuClsBtn.classList.toggle("menu-hide");
    menu.classList.toggle("menu-hide");
});
menuClsBtn.addEventListener("click", function(){
    this.classList.toggle("menu-hide");
    menu.classList.toggle("menu-hide");
    menuBtn.classList.toggle("menu-hide");
});

//=========== Mobile Functionality ==========//
//simply detect if a mouse is being used by detected a mouseover event..this way if mouse is being used no need to add the specific classes

(function handleMobile(){
    //when the first card is clicked in mobile view we want to translate the other card downward
    const cardAbove = document.querySelector(".card:nth-child(1)");
    const cardBelow = cardAbove.nextElementSibling;
    if(window.innerWidth < 430){

        cardAbove.addEventListener("click", function(){
            cardBelow.classList.toggle("active");
        });
        cardBelow.addEventListener("click", function(){
            cardBelow.classList.toggle("active");
        });
        //since this event listener is called once and only once I should be able to create an event listener inside of this without worry of it being re-created over and over.
        /*window.addEventListener("touchstart", function firstTouch(){
            //set global variable signifying mouse is available and width of screen is large enough for useability.
          //  console.log("this is a mobile device: ", window.innerWidth);
            window.removeEventListener("touchstart", firstTouch, false);

            cardAbove.addEventListener("click", function(){
                cardBelow.classList.toggle("active");
            });
            cardBelow.addEventListener("click", function(){
                cardBelow.classList.toggle("active");
            });
        }, false);*/
    }
   
})();
