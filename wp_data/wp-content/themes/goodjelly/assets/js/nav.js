document.addEventListener('DOMContentLoaded', function() {
  const navburger = document.getElementById('navburger');
  const topnav = document.getElementById('topnav');
  const navWrapper = document.getElementById('nav-wrapper');

  if (navburger && topnav && navWrapper) {
    // Toggle navigation menu on mobile
    navburger.addEventListener('click', function() {
      topnav.classList.toggle('topnav--active');
      navburger.classList.toggle('navburger--active');
      navWrapper.classList.toggle('nav-wrapper--active');
    });

    // Add scrolling class to navigation
    window.addEventListener('scroll', function() {
      if (window.scrollY > 10) {
        navWrapper.classList.add('nav-wrapper--scrolling');
        topnav.classList.add('topnav--scrolling');
      } else {
        navWrapper.classList.remove('nav-wrapper--scrolling');
        topnav.classList.remove('topnav--scrolling');
      }
    });
  }
});