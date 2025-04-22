// Кнопка разворачивания скрытого текста
document.getElementById('showButton').addEventListener('click', function () {
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
document.getElementById('hideButton').addEventListener('click', function () {
    const expandableBlock = document.getElementById('expandableBlock');

    if (expandableBlock.classList.contains('project__visible')) {
        expandableBlock.classList.remove('project__visible');
        expandableBlock.classList.add('project__hidden');
        this.classList.add('project__hidden');
        document.getElementById('showButton').classList.remove('project__hidden');
        document.getElementById('showButton').classList.add('project__visible');
    }
});

// галерея 2
let timer;

function slideInitial() {
    initBullets();
    initArrows();

    setTimeout(() => {
        slideRight();
        startAutoPlay();
    }, 500);
}

function startAutoPlay() {
    clearInterval(timer); 
    timer = setInterval(slideRight, 6000); 
}

function stopAutoPlay() {
    clearInterval(timer); 
}

const repeat = false;
const noArrows = false;
const noBullets = false;

const container = document.querySelector('.slider-container');
var slide = document.querySelectorAll('.slider-single');
var slideTotal = slide.length - 1;
var slideCurrent = -1;

startAutoPlay(); 

function initBullets() {
    if (noBullets) return;

    const bulletContainer = document.createElement('div');
    bulletContainer.classList.add('bullet-container');

    slide.forEach((_, i) => {
        const bullet = document.createElement('div');
        bullet.classList.add('bullet');
        bullet.id = `bullet-index-${i}`;
        bullet.addEventListener('click', () => {
            stopAutoPlay();       
            goToIndexSlide(i);    
        });
        bulletContainer.appendChild(bullet);
    });

    container.appendChild(bulletContainer);
}

function initArrows() {
    if (noArrows) return;

    const leftArrow = document.createElement('a');
    const iLeft = document.createElement('i');
    iLeft.classList.add('fa', 'fa-arrow-left');
    leftArrow.classList.add('slider-left');
    leftArrow.appendChild(iLeft);
    leftArrow.addEventListener('click', () => {
        stopAutoPlay();   
        slideLeft();        
        startAutoPlay();  
    });

    const rightArrow = document.createElement('a');
    const iRight = document.createElement('i');
    iRight.classList.add('fa', 'fa-arrow-right');
    rightArrow.classList.add('slider-right');
    rightArrow.appendChild(iRight);
    rightArrow.addEventListener('click', () => {
        stopAutoPlay();     
        slideRight(); 
        startAutoPlay();  
    });

    container.appendChild(leftArrow);
    container.appendChild(rightArrow);
}

function slideInitial() {
    initBullets();
    initArrows();
    setTimeout(function () {
        slideRight();
    }, 500);
}

function updateBullet() {
    if (!noBullets) {
        document.querySelectorAll('.bullet').forEach((elem, i) => {
            elem.classList.toggle('active', i === slideCurrent);
        });
    }
    checkRepeat();
}

function checkRepeat() {
    if (!repeat) {
        const first = slide[0], last = slide[slideTotal];
        if (slideCurrent === slideTotal) {
            first.classList.add('not-visible');
            last.classList.remove('not-visible');
        } else if (slideCurrent === 0) {
            last.classList.add('not-visible');
            first.classList.remove('not-visible');
        } else {
            first.classList.remove('not-visible');
            last.classList.remove('not-visible');
        }
    }
}

function changeSlide(direction) {
    removeListenersFromSlides();
    let nextIndex;
    switch (direction) {
        case 'right':
            nextIndex = slideCurrent >= slideTotal ? 0 : slideCurrent + 1;
            break;
        case 'left':
            nextIndex = slideCurrent <= 0 ? slideTotal : slideCurrent - 1;
            break;
    }

    slide.forEach(elem => {
        elem.classList.remove('preactivede', 'preactive', 'active', 'proactive', 'proactivede');
    });

    if (nextIndex > 0) {
        slide[nextIndex - 1].classList.add('preactive');
    }
    slide[nextIndex].classList.add('active');
    if (nextIndex < slideTotal) {
        slide[nextIndex + 1].classList.add('proactive');
    }

    slideCurrent = nextIndex;
    addListenersForSlides();
    updateBullet();
}

document.querySelectorAll('.slider-single').forEach(sliderItem => {
    sliderItem.addEventListener('click', function(event) {
        event.stopPropagation(); 
        const activeClass = this.classList.contains('preactive') ? 'preactive' : 'proactive';
        if (activeClass === 'preactive') {
            slideLeft();
        } else if (activeClass === 'proactive') {
            slideRight();
        }
        stopAutoPlay();
    });
});

function addListenersForSlides() {
    const preactive = document.querySelector('.preactive');
    const proactive = document.querySelector('.proactive');

    if (proactive) {
        proactive.addEventListener('click', slideRight);
        proactive.classList.add('pointer');
    }
    if (preactive) {
        preactive.addEventListener('click', slideLeft);
        preactive.classList.add('pointer');
    }    
}

addListenersForSlides();

function removeListenersFromSlides() {
    const oldProactive = document.querySelector('.proactive');
    const oldPreactive = document.querySelector('.preactive');

    if (oldProactive) {
        oldProactive.removeEventListener('click', slideRight);
        oldProactive.classList.remove('pointer');
    }
    if (oldPreactive) {
        oldPreactive.removeEventListener('click', slideLeft);
        oldPreactive.classList.remove('pointer');
    }    
}

function slideRight() { changeSlide('right'); }
function slideLeft() { changeSlide('left'); }

function goToIndexSlide(index) {
    const sliding = (slideCurrent > index) ? () => slideRight() : () => slideLeft();
    while (slideCurrent !== index) {
        sliding();
    }
}

slideInitial();