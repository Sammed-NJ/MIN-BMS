// div
const logBox = document.querySelector('.content-log');
const signBox = document.querySelector('.content-sign');

// btn

// click btn to go to .content-sign div
const signBtn = document.querySelector('.sign-btn');
// click btn to go to .content-log div
const logBtn = document.querySelector('.log-btn');


signBtn.addEventListener('click', function() {

    logBox.classList.add('hide');
    signBox.classList.remove('hide');
});

logBtn.addEventListener('click', function() {

    logBox.classList.remove('hide');
    signBox.classList.add('hide');
});

