window.addEventListener('DOMContentLoaded', () => {

    const menu = document.querySelector('.menu'),
          navig = document.querySelector('.navig'),
          backX = document.querySelector('.image_back');

    navig.classList.add('hide');
    backX.classList.add('hide');
    

    if(window.screen.width > 450){
        navig.classList.remove('hide');
    }else if(window.screen.width > 300){
        menu.classList.remove('hide');
    }

    menu.addEventListener('click', () => {
        navig.classList.remove('hide');
        backX.classList.remove('hide');
    });

    backX.addEventListener('click', () => {
        navig.classList.add('hide');
    });
    
    //off zoom on mobile

    document.addEventListener('gesturestart', function(e){
        e.preventDefault();
        e.stopImmediatePropagation();
      }, {passive:false});

    window.history.replaceState({}, null, '/');
});
