const deleteForm = document.querySelectorAll('.delete-form');

deleteForm.forEach( form => {
form.addEventListener('submit' , e => {
    e.preventDefault();
    const studentName = form.dataset.name;
    const isConfirmed = confirm(`Sei sicuro di voler eliminare ${studentName}`);
    if(isConfirmed) form.submit();
})
})