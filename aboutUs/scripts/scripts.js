window.addEventListener('DOMContentLoaded', () => {

	const tabs = document.querySelectorAll('.petal'),
          tabsContent = document.querySelectorAll('.main_block'),
          tabsParent = document.querySelector('.petals');

    function hideTabContent(){
        tabsContent.forEach(item => {
            item.classList.add('hide');
            item.classList.remove('main_block');
        });

        tabs.forEach(item => {
            item.classList.remove('active_petal');
        });
    }

    function showTabContent(i = 0){
        tabsContent[i].classList.add('main_block');
        tabsContent[i].classList.remove('hide');
        tabs[i].classList.add('active_petal');
    }

    hideTabContent();
    showTabContent();

    tabsParent.addEventListener('click', (event) => {
        const target = event.target;

        if(target && target.classList.contains('petal')){
            tabs.forEach((item, i) => {
                if(target == item){
                    hideTabContent();
                    showTabContent(i);
                }
            });
        }
    });
});