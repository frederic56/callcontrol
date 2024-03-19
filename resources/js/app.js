 import { dropRight } from 'lodash';
import './bootstrap';

 //Variable
let menu = document.getElementById('menu')
let cancel = document.getElementById('cancel')
let show = document.querySelector('.show')
let sideBar = document.querySelector('.sidebar')

// menu.addEventListener('click', function(e){
//     e.preventDefault()
//     sideBar.style.dropRight = "250px";
// })


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




 function changeBg(){
     var navbar = document.querySelector('.navbar');
    
     var scrollValue = window.scrollY
     if (scrollValue < 80) {
         navbar.classList.remove('navbarColor')
        // navLink.classList.remove('items');  
         Vue.style.display = "block"
    }else{
       navbar.classList.add('navbarColor') 
       Vue.style.display = "none"
      // navLink.classList.add('items');      
    }
 }
window.addEventListener('scroll', changeBg)

let user = document.getElementById('user')
let icon_user = document.getElementById('icon')
let comm = document.querySelector('.ad-sb-comment')
let article = document.querySelector('.ad-sb-article')
let candidate = document.querySelector('.ad-sb-cand')
let pages = document.querySelector('.ad-sb-pages')
let icon_page = document.getElementById('icon-page')
let social = document.getElementById('social')
let socialfb = document.querySelector('.ad-sb-facebook')
let icon_social = document.getElementById('icon-social')

user.addEventListener('click', () => {
    icon_user.classList.toggle('on')
    comm.classList.toggle('on')
})

pages.addEventListener('click', () => {
    icon_page.classList.toggle('on')
    article.classList.toggle('on')
    candidate.classList.toggle('on')
})

social.addEventListener('click', () => {
    icon_social.classList.toggle('on')
    socialfb.classList.toggle('on')
})

// let ctx = document.getElementById('chart').getContext('2d');
// let userChart = new Char(ctx,{
//     type:'bar',
//     data:{
//         labels: {!! json_encode($labels) !!},
//         datasets: {!! json_encode($datasets) !!}
//     },
// });