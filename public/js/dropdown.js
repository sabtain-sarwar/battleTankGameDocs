var menu = document.getElementsByClassName('dropdown')[0];
var menuItems = menu.getElementsByClassName('dropdown-item');

menu.addEventListener('click', toggleDropdownItem);

function toggleDropdownItem(e) {
    if (e.target.classList.contains('dropdown-item')) {
        console.log(e);
        menu.classList.toggle('active');
        menuItems[0].textContent = e.target.textContent;
    }
}