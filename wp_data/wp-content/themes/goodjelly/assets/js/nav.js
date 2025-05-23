const nav = document.getElementById('topnav')
const hamburger = document.getElementById('navburger')
const header = document.getElementById('nav-wrapper')

nav.addEventListener('click', handleNav)
hamburger.addEventListener('click', handleNav)

function handleNav(e) {
  e.stopPropagation();
  if(!nav.classList.contains('topnav--active')){
    nav.classList.add('topnav--active')
    hamburger.classList.add('navburger--active')
    header.classList.add('nav-wrapper--active')
  } else {
    nav.classList.remove('topnav--active')
    hamburger.classList.remove('navburger--active')
    header.classList.remove('nav-wrapper--active')
  }
}

document.addEventListener('scroll', handleScroll)

function handleScroll(e) {
  let scrollPos = window.pageYOffset;
  if (scrollPos > 10) {
    header.classList.add('nav-wrapper--scrolling')
  } else {
    header.classList.remove('nav-wrapper--scrolling')
  }
}