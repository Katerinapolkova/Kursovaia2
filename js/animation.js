let scrollObject = document.getElementById("car");
let main__btn = document.querySelector(".main__btn");
let main_logo = document.querySelector(".main__logo");

console.log(window.innerWidth)
if(window.innerWidth >= 1024) {
    window.addEventListener("scroll", () => {   
        if(window.pageYOffset <= 1920 && window.pageYOffset >= 1460) {
            scrollObject.style.transform = `translate(${0}px, ${window.pageYOffset - 1340}px)`;
            scrollObject.style.zoom = `1.3`;
    
            if (window.pageYOffset <= 1600) {
                scrollObject.style.zoom = `1`;
            }
        }
    
        if(window.pageYOffset >= 1829) {
            main_logo.style.opacity = "1"
            main__btn.style.left = "100px"
        }
    });
}
