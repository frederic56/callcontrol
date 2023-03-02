import './bootstrap';

var navItems = document.querySelector('.nav-items');
var navLink = document.querySelector('.nav-link');
var Vue = document.querySelector('.vue');
var navItem = document.getElementById('nav-item')
var menu2 = document.getElementById('menu2')
var menu3 = document.getElementById('menu3')
var menu4 = document.getElementById('menu4')

function changeBg(){
    var navbar = document.getElementById('headerId');
    
    var scrollValue = window.scrollY
    if (scrollValue < 100) {
        navbar.classList.remove('navbarColor')
        Vue.style.display = 'block'
        navLink.classList.remove('items');      

        // Vue.style.display = 'none'
    }else{
        navbar.classList.add('navbarColor') 
        navLink.classList.add('items');      
        Vue.style.display = 'none'
    }
}

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

window.addEventListener('scroll', changeBg)
