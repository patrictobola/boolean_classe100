const restoreForm = document.querySelectorAll('.restore-form');

restoreForm.forEach( form => {
form.addEventListener('submit' , e => {
    e.preventDefault();
    const studentName = form.dataset.name;
    const isConfirmed = confirm(`Sei sicuro di voler ripristinare ${studentName}`);
    if(isConfirmed) form.submit();
})
})