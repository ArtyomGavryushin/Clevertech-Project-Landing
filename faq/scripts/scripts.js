window.addEventListener('DOMContentLoaded', () => {

    const tabs = document.querySelectorAll('.question'),
          tabsContent = document.querySelectorAll('.answer'),
          tabsParent = document.querySelector('.questions'),
          tabsContentParent = document.querySelector('.answers'),
          arrowBack = document.querySelectorAll('.img_arrow_back');

    function hideTabContent(){
        tabsContent.forEach(item => {
            item.classList.add('hide');
            item.classList.remove('answer');
        });
    }

    function showTabContent(i = 0){
        tabsContent[i].classList.add('answer');
        tabsContent[i].classList.remove('hide');
    }

    tabsParent.addEventListener('click', (event) => {
        const target = event.target;

        if(target && target.classList.contains('question')){
            tabs.forEach((item, i) => {
                if(target == item){
                    hideTabContent(tabsParent.classList.add('hide'));
                    showTabContent(i, tabsContentParent.classList.remove('hide'));
                }
            });
        }
    });

    arrowBack.forEach(item => {
        item.addEventListener('click', () => {
            tabsContentParent.classList.add('hide');
            tabsParent.classList.remove('hide');
         })
    });

});
