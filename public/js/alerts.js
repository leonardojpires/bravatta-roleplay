document.addEventListener('DOMContentLoaded', () => {
    const successAlert = document.getElementById('successAlert');
    const successClose = document.getElementById('successClose');

    const errorAlert = document.getElementById('errorAlert');
    const errorClose = document.getElementById('errorClose');

    if (successAlert && successClose) {
        successClose.addEventListener('click', () => {
            successAlert.classList.add('hidden');
        });
    }

    if (errorAlert && errorClose) {
        errorClose.addEventListener('click', () => {
            errorAlert.classList.add('hidden');
        });
    }
});