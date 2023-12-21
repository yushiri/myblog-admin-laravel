import './bootstrap';
import 'choices.js/public/assets/scripts/choices.min.js';
import 'choices.js/public/assets/styles/choices.min.css';
import Choices from 'choices.js';

document.addEventListener('DOMContentLoaded', () => {
    document.querySelector('.preloader').classList.remove('preloader');
    document.querySelector('.loader').classList.add('hidden');

    function toggleMenu() {
        let menu = document.getElementById('menu');
        if (menu.classList.contains('active')) {
            menu.classList.remove('active')
            setTimeout(() => {
                menu.style.display = 'none'
            }, 200)
        } else {
            menu.style.display = 'block'
            setTimeout(() => {
                menu.classList.add('active')
            }, 10)
        }
    }

    document.querySelectorAll('[data-toggle="menu"]').forEach((item) => {
        item.addEventListener('click', () => {
            toggleMenu();
        });
    });

    const element = document.querySelector('#dadata');
    const choices = new Choices(element, {
        position: 'top',
    });

    let url = 'https://suggestions.dadata.ru/suggestions/api/4_1/rs/suggest/address';
    let token = '6ea6cd972be0f7bb234875923714da5d080d9afe';

    choices.passedElement.element.addEventListener('search', (event) => {
        let options = {
            method: 'POST',
            mode: 'cors',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'Authorization': 'Token ' + token
            },
            body: JSON.stringify({query: event.detail.value})
        };

        fetch(url, options)
            .then(response => response.json())
            .then((result) => {
                let options = [];

                result.suggestions.forEach((item) => {
                    options.push({
                        label: item.value,
                        value: item.value,
                    });
                });

                console.log(options);


                choices.setChoices(options);
            });
    });
});


