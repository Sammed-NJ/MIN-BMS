// ADMIN EVENT LISTENER

// div from admin
const runMovieTable = document.querySelector('.admin-table');
const movieAdd = document.querySelector('.add-container');

//btn from admin
const adminAddBtn = document.querySelector('.admin-add-btn');
const adminBackBtn = document.querySelector('.back-btn');

adminAddBtn.addEventListener('click', function() {

    runMovieTable.classList.add('hide');
    movieAdd.classList.remove('hide');
});

adminBackBtn.addEventListener('click', function() {

    runMovieTable.classList.remove('hide');
    movieAdd.classList.add('hide');

});