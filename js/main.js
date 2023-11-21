'use strict';

{
    const hamburger = document.getElementById('hamburger_menu');
    const navigation = document.getElementById('navigation');
    const navMenu = document.getElementById('nav-menu');

    hamburger.addEventListener('click',function(){
        navigation.classList.toggle('active');
        navMenu.classList.toggle('active');
        hamburger.classList.toggle('active');
    })

    //閉じる
    navigation.addEventListener('click',function(){
        navigation.classList.toggle('active');
        navMenu.classList.toggle('active');
        hamburger.classList.toggle('active');
    })

}