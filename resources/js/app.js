import './bootstrap';

document.addEventListener("DOMContentLoaded", () => {
    function toggleMenu() {
        let menu = document.getElementById("menu");
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

    document.querySelectorAll("[data-toggle='menu']").forEach((item) => {
        item.addEventListener('click', () => {
            toggleMenu();
        });
    });
});
