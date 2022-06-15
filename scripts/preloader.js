window.addEventListener('DOMContentLoaded', () => {

    const mask = document.querySelector('.mask');

    window.addEventListener('load', () => {
        mask.classList.add('hide-loader');
        setTimeout(()=> {
            mask.remove();
        }, 700);
    });
});