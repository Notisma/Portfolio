function computeTheme(theme) {
    let r = document.querySelector(':root');
    let newTheme = getComputedStyle(r);

    ['bg_clr', 'section_clr', 'txt_clr', 'footer_bg_clr', 'special_txt_clr'].forEach(
        (cssElem) =>
            r.style.setProperty('--param-' + cssElem, newTheme.getPropertyValue('--' + theme + '-' + cssElem))
    );
}
