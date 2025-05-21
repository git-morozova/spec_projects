// Кнопки разворачивания и сворачивания скрытого текста1
const showButton = document.getElementById('showButton');
if (showButton) {
    showButton.addEventListener('click', function () {
        const expandableBlock = document.getElementById('expandableBlock');
        if (expandableBlock && expandableBlock.classList.contains('project__hidden')) {
            expandableBlock.classList.remove('project__hidden');
            expandableBlock.classList.add('project__visible');
        
            const hideButton = document.getElementById('hideButton');
            if (hideButton) {
                hideButton.classList.remove('project__hidden');
                hideButton.classList.add('project__visible');            
                showButton.classList.add('project__hidden');
            }
        }
    });
}

const hideButton = document.getElementById('hideButton');
if (hideButton) {
    hideButton.addEventListener('click', function () {
        const expandableBlock = document.getElementById('expandableBlock');
        if (expandableBlock && expandableBlock.classList.contains('project__visible')) {
            expandableBlock.classList.remove('project__visible');
            expandableBlock.classList.add('project__hidden');
        
            const showButton = document.getElementById('showButton');
            if (showButton) {
                showButton.classList.remove('project__hidden');
                showButton.classList.add('project__visible');            
                hideButton.classList.add('project__hidden');
            }
        }
    });
}

// Кнопки разворачивания и сворачивания скрытого текста2
const showButton2 = document.getElementById('showButton2');
if (showButton2) {
    showButton2.addEventListener('click', function () {
        const expandableBlock2 = document.getElementById('expandableBlock2');
        if (expandableBlock2 && expandableBlock2.classList.contains('project__hidden')) {
            expandableBlock2.classList.remove('project__hidden');
            expandableBlock2.classList.add('project__visible');
        
            const hideButton2 = document.getElementById('hideButton2');
            if (hideButton2) {
                hideButton2.classList.remove('project__hidden');
                hideButton2.classList.add('project__visible');            
                showButton2.classList.add('project__hidden');
            }
        }
    });
}

const hideButton2 = document.getElementById('hideButton2');
if (hideButton2) {
    hideButton2.addEventListener('click', function () {
        const expandableBlock2 = document.getElementById('expandableBlock2');
        if (expandableBlock2 && expandableBlock2.classList.contains('project__visible')) {
            expandableBlock2.classList.remove('project__visible');
            expandableBlock2.classList.add('project__hidden');
        
            const showButton2 = document.getElementById('showButton2');
            if (showButton2) {
                showButton2.classList.remove('project__hidden');
                showButton2.classList.add('project__visible');            
                hideButton2.classList.add('project__hidden');
            }
        }
    });
}
