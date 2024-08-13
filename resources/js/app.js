import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


import axios from 'axios';


document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('#delete-book-button').forEach(form => {
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            fetch(form.action, {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                },
            })
            .then(response => {
                if (response.ok) {
                    form.remove(); 
                } else {
                    throw new Error('Failed to delete book');
                }
            })
            .catch(error => {
                console.error(error);
            });
        });
    });
});







