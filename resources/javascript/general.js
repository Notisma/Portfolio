function computeTheme(theme) {
    let r = document.querySelector(':root');
    let newTheme = getComputedStyle(r);

    ['bg', 'section', 'txt', 'footer_bg', 'special_txt', 'hypertxt'].forEach(
        (cssElem) =>
            r.style.setProperty('--param-' + cssElem, newTheme.getPropertyValue('--' + theme + '-' + cssElem))
    );
}

function spawnLanguageDropdown() {
    document.getElementById("language_dropdown").classList.toggle("hide");
    document.getElementById("language_dropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function (event) {
    if (!event.target.matches('#language_icon')) {
        const openDropdown = document.getElementById("language_dropdown");
        if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
            openDropdown.classList.add('hide');
        }
    }
}

function copyMailToClipboard() {
    navigator.clipboard.writeText('raphael.izoret@etu.umontpellier.fr');
}
