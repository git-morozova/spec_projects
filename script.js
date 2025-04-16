// Функция для перемещения видео на указанную временную метку
function jumpToTime(seconds) {
    const video = document.querySelector('#video');
    video.currentTime = seconds;

    const anchor = document.querySelector('#a-video'); 
    anchor.scrollIntoView({ behavior: 'smooth' });
}

// Кнопка разворачивания скрытого текста
document.getElementById('showButton').addEventListener('click', function() {
    const expandableBlock = document.getElementById('expandableBlock');
    
    if (expandableBlock.classList.contains('project__hidden')) {
        expandableBlock.classList.remove('project__hidden');
        expandableBlock.classList.add('project__visible');        
        this.classList.add('project__hidden'); 
        document.getElementById('hideButton').classList.remove('project__hidden');
        document.getElementById('hideButton').classList.add('project__visible'); 
    }
});
// Кнопка сворачивания текста
document.getElementById('hideButton').addEventListener('click', function() {
    const expandableBlock = document.getElementById('expandableBlock');
    
    if (expandableBlock.classList.contains('project__visible')) {
        expandableBlock.classList.remove('project__visible');
        expandableBlock.classList.add('project__hidden');        
        this.classList.add('project__hidden'); 
        document.getElementById('showButton').classList.remove('project__hidden');
        document.getElementById('showButton').classList.add('project__visible'); 
    }
});
