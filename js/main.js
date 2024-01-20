let burger_icon = document.querySelector('#check');
let menu = document.querySelector('.header__navigation');
let body = document.querySelector('body');

burger_icon.addEventListener('click', function(){
    menu.classList.toggle('active');
    burger_icon.classList.toggle('active');
    body.classList.toggle('lock');
});