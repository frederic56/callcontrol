 import { dropRight } from 'lodash';
import './bootstrap';

 //Variable
let menu = document.getElementById('menu')
let cancel = document.getElementById('cancel')
let show = document.querySelector('.show')
let sideBar = document.querySelector('.sidebar')

menu.addEventListener('click', function(e){
    e.preventDefault()
    sideBar.style.dropRight = "250px";
})


//Hidden menu 
// show.style.display = "none"
//Menu left function
// menu.addEventListener('click', function(e){
//     e.preventDefault()
//     if (getComputedStyle(show).display != "none") {
//         show.style.marginTop = "0px"
//         console.log('block1');
//     }else{
//         show.style.display = "flex"
//         show.style.marginTop = "0px"
//         console.log('none1');
//     }
// })

//Menu right function
// cancel.addEventListener('click', function(e){
//     e.preventDefault()
//     if (getComputedStyle(show).display != "none") {
//         show.style.marginTop = "-400px"
//         console.log('block2');
        
//     }else{
//         show.style.display = "flex"
//         show.style.marginTop = "0px"
//         console.log('none2');
//     }
// })

// window.addEventListener('click', function(e){
//     e.preventDefault()
//     if (this.getComputedStyle(show).marginTop == "0px") {
//         console.log('click');
//         show.style.marginTop = "-400px"
//     }
// })

// // Dropdown Menu
// let menuTab = document.querySelector('.menuTab')
// let menu_tab = document.querySelector('.menu_Tab')
// let close = document.querySelector('.close')

// menuTab.style.marginTop = "-300px"
// close.style.display = "none"
// menu_tab.addEventListener('click', function(e){
//     e.preventDefault();
//     if (getComputedStyle(menuTab).display !="none") {
//         menuTab.style.marginTop = "60px"
//         menu_tab.style.display = "none"
//         close.style.display = "block"
//         console.log('-300px');
//     }else{
//         menuTab.style.marginTop = "-300px"
//         console.log('30px');
//     }
// })

// close.addEventListener('click', function(e){
//     e.preventDefault();
//     if (getComputedStyle(menuTab).display !="none") {
//         close.style.display = "none"
//         menuTab.style.marginTop = "-300px"
//         menu_tab.style.display = "block"
//     }
// })




// function changeBg(){
//     var navbar = document.querySelector('.navbar');
    
//     var scrollValue = window.scrollY
//     if (scrollValue < 80) {
//         navbar.classList.remove('navbarColor')
//        // navLink.classList.remove('items');  
//         Vue.style.display = "block"
//     }else{
//         navbar.classList.add('navbarColor') 
//         Vue.style.display = "none"
//        // navLink.classList.add('items');      
//     }
// }
// window.addEventListener('scroll', changeBg)


// // localStorage.setItem('headerBg', navbar)
// // const headerBg = localStorage.getItem('headerBg')
// // //inactif navigateur

// // const inactivityTime = 30;
// // let lastActivityTime = Date.now();
// //  setInterval(() => {
//     //     if(document.hidden || (Date.now() - lastActivityTime) > inactivityTime * 120 * 1000){
//         //         alert('Vous avez été inactif pendant ' + inactivityTime + ' minutes. Veuillez recharger la page.');
//         //     }
//         //  }, 1000)

//         //  document.addEventListener('mousemove', () => {
//             //     lastActivityTime = Date.now();
//             //   });
            


//             // Menu left
// let menu_Left = document.getElementById('menu-left')
// let menu_Right = document.getElementById('menu-right')

// //Width lenght
// function widthD(){
//     return window.addEventListener('resize', function(event){
//         event.preventDefault()
        
//         function widthLenght(){
//             return window.innerWidth
//         }
//         let widthL = widthLenght()
//         // if (widthL <= 700 ) {
//         //    navItems.style.display = "none"
//         //    console.log(widthL);
//         // }else if (widthL >= 700 || menuRight) {
//         //     navItems.style.display = "block"
//         // }
//     })
// }
// widthD()


//     //Menu Left
// function menu_left(){
//     return menu_Left.addEventListener('click', function(event){
//          event.preventDefault();

//             function width(){
//                 return  window.addEventListener('resize', function(e){
//                     e.preventDefault()
//                     function current_width(){
//                         return window.innerWidth
//                     }
//                     current_width(); 
//                 })
//             }
//             let current_width = width();

//         if (getComputedStyle(menu_Left).display != "none" || current_width <= 700) {
//             navItems.style.display = "block"
//             menu_Right.style.display = "block"
//             menu_Left.style.display = "none"
//             navItems.classList.add('nav-itemR')
//             navItems.classList.remove('nav-items')
//             let bar = document.querySelector('.bar')
//             bar.style.display = "none"  
//         }else if(getComputedStyle(menu_Left).display != "none", current_width <= 700 ){
//            navItems.style.display = "block"
//            console.log('agnaty');
//         }
//      })
//  }
//  menu_left();

 
//  //Menu right
//  menu_Right.style.display = 'none'
//  function menu_right() {
//    return menu_Right.addEventListener('click', function(event){
//          event.preventDefault();

//          if (getComputedStyle(menu_Right).display !="none") {
//              menu_Right.style.display = "none"
//              menu_Left.style.display = "block" 
//              navItems.style.display ="none"
//              navItems.classList.remove('nav-itemR')
//              navItems.classList.add('nav-items')
//              function width(){
//                 return  window.addEventListener('resize', function(e){
//                     e.preventDefault()
//                     function current_width(){
//                         return window.innerWidth
//                     }
//                     let currentWidth = current_width(); 
//                     if (currentWidth >= 700 ) {
//                        navItems.style.display = "block"
//                        console.log('enter');
//                     }else if(currentWidth <= 700 && navItems.style.display !="none" ){
//                         navItems.style.display = "none"
//                         console.log('zay');
//                     }else if (currentWidth <= 700 && navItems.style.display =="block"){
//                         navItems.style.display = "none"
//                         console.log('oui');
//                     }
//                 })
//             }
//             width();
//         }
//      })    
//  }
// menu_right();
