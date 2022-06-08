const deleteForm = document.querySelectorAll('.deleteForm')

deleteForm.forEach(element => {
    element.addEventListener('submit', (e) => {
        e.preventDefault();
        const confirmation = confirm('Sei sicuro di voler cancellare il post');
        if(confirmation) e.target.submit();
    });
});