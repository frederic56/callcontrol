import './bootstrap';

var navItems = document.querySelector('.nav-items');
var navLink = document.querySelector('.nav-link');
var Vue = document.querySelector('.vue');
var navItem = document.getElementById('nav-item')

function changeBg(){
    var navbar = document.querySelector('.navbar');
    
    var scrollValue = window.scrollY
    if (scrollValue < 100) {
        navbar.classList.remove('navbarColor')
        navLink.classList.remove('items');  
    }else{
        navbar.classList.add('navbarColor') 
        navLink.classList.add('items');      
    }
}
window.addEventListener('scroll', changeBg)


// localStorage.setItem('headerBg', navbar)
// const headerBg = localStorage.getItem('headerBg')
// //inactif navigateur

// const inactivityTime = 30;
// let lastActivityTime = Date.now();
//  setInterval(() => {
    //     if(document.hidden || (Date.now() - lastActivityTime) > inactivityTime * 120 * 1000){
        //         alert('Vous avez été inactif pendant ' + inactivityTime + ' minutes. Veuillez recharger la page.');
        //     }
        //  }, 1000)

        //  document.addEventListener('mousemove', () => {
            //     lastActivityTime = Date.now();
            //   });
            


            // Menu left
let menu_Left = document.getElementById('menu-left')
let menu_Right = document.getElementById('menu-right')

//Width lenght
function widthD(){
    return window.addEventListener('resize', function(event){
        event.preventDefault()
        
        function widthLenght(){
            return window.innerWidth
        }
        let widthL = widthLenght()
        // if (widthL <= 700 ) {
        //    navItems.style.display = "none"
        //    console.log(widthL);
        // }else if (widthL >= 700 || menuRight) {
        //     navItems.style.display = "block"
        // }
    })
}
widthD()


    //Menu Left
function menu_left(){
    return menu_Left.addEventListener('click', function(event){
         event.preventDefault();

            function width(){
                return  window.addEventListener('resize', function(e){
                    e.preventDefault()
                    function current_width(){
                        return window.innerWidth
                    }
                    current_width(); 
                })
            }
            let current_width = width();

        if (getComputedStyle(menu_Left).display != "none" || current_width <= 700) {
            navItems.style.display = "block"
            menu_Right.style.display = "block"
            menu_Left.style.display = "none"
            navItems.classList.add('nav-itemR')
            navItems.classList.remove('nav-items')
            let bar = document.querySelector('.bar')
            bar.style.display = "none"  
        }else if(getComputedStyle(menu_Left).display = "none", current_width <= 700 ){
           navItems.style.display = "block"
        }
        function width(){
            return  window.addEventListener('resize', function(e){
                e.preventDefault()
                function current_width(){
                    return window.innerWidth
                }
                current_width(); 
            })
        }
        let currentWidth = width();
        if (currentWidth >= 700) {
            navItems.style.display = "block"    
        }
     })
 }
 menu_left();

 
 //Menu right
 menu_Right.style.display = 'none'
 function menu_right() {
   return menu_Right.addEventListener('click', function(event){
         event.preventDefault();
         if (getComputedStyle(menu_Right).display !="none") {
             menu_Right.style.display = "none"
             menu_Left.style.display = "block" 
             navItems.style.display ="none"
            }else{
             navItems.classList.remove('nav-itemR')
             navItems.classList.add('nav-items')
            navItems.style.display = "block"
         }
     })    
 }
menu_right();
