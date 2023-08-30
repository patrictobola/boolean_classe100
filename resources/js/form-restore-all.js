const restoreAllForm = document.querySelectorAll('.restore-all-form');

restoreAllForm.forEach(form => {
  form.addEventListener('submit', e => {
    e.preventDefault();
    const isConfirmed = confirm(`Sei sicuro di voler ripristinare tutti gli studenti`);
    if (isConfirmed) form.submit();
  })
})