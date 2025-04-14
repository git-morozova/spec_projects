// Функция для перемещения видео на указанную временную метку
function jumpToTime(seconds) {
    const video = document.querySelector('#video');
    video.currentTime = seconds;

    const anchor = document.querySelector('#a-video'); 
    anchor.scrollIntoView({ behavior: 'smooth' });
}

// Кнопка разворачивания скрытого текста
document.getElementById('toggleButton').addEventListener('click', function() {
    const expandableBlock = document.getElementById('expandableBlock');
    
    if (expandableBlock.classList.contains('project__hidden')) {
        expandableBlock.classList.remove('project__hidden');
        expandableBlock.classList.add('project__visible');        
        this.style.display = 'none'; 
    }
});

