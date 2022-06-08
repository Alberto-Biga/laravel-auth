const deleteForms = document.querySelectorAll('.delete-form');
deleteForms.forEach( form => {
    form.addEventListener('submit', (e) =>{
        e.preventDefault();
        const confirmation = confirm('Sei sicuro di eliminare il Post?');
        if(confirmation) e.target.submit();
    });
});
