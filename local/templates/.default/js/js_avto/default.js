/*Скрипт показывает/скрывает меню в адаптиве по клику на иконку #menu,у переменной menuPadding желаельно оставить height = 'auto', иначе меню будет выходить за границы родительского блока. в условии else переменная menuPadding = '200px' - чтобы после исчезанию меню header снова сжимался*/
var menuClick = document.getElementById('menu');
menuClick.addEventListener('click', showBlock);
function showBlock(event){
    var elemShow = document.getElementById('myTopnav');
    var menuPadding = document.getElementById('wrapper');
    if (elemShow.className ==="topnav"){
        elemShow.className += " responsive";
        menuPadding.style.height = 'auto';
    }
    else{
        elemShow.className = "topnav";
        menuPadding.style.height = '200px';
    }
}