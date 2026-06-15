/* ==========================================
   FOOTER ACCORDION
========================================== */

function initFooterAccordion() {

    if(window.innerWidth > 767) {

        document
            .querySelectorAll('.footer-links')
            .forEach(list => {

                list.style.display = 'block';

            });

        return;
    }

    const accordions =
        document.querySelectorAll(
            '.footer-accordion'
        );

    accordions.forEach(item => {

        const button =
            item.querySelector(
                '.footer-title'
            );

        const content =
            item.querySelector(
                '.footer-links'
            );

        content.style.display = 'none';

        button.addEventListener(
            'click',
            () => {

                const isOpen =
                    content.style.display === 'block';

                document
                    .querySelectorAll(
                        '.footer-links'
                    )
                    .forEach(link => {

                        link.style.display = 'none';

                    });

                if(!isOpen){

                    content.style.display =
                    'block';

                }

            }
        );

    });

}

initFooterAccordion();

window.addEventListener(
    'resize',
    initFooterAccordion
);

const hamburger = document.querySelector(".hamburger");
const mobileMenu = document.querySelector(".mobile-menu");
const overlay = document.querySelector(".mobile-menu-overlay");
const closeBtn = document.querySelector(".mobile-menu-close");

function closeMenu() {
    hamburger.classList.remove("is-open");
    mobileMenu.classList.remove("active");
    overlay.classList.remove("active");
    document.body.classList.remove("menu-open");
}

function openMenu() {
    hamburger.classList.add("is-open");
    mobileMenu.classList.add("active");
    overlay.classList.add("active");
    document.body.classList.add("menu-open");
}

hamburger.addEventListener("click", () => {

    if (mobileMenu.classList.contains("active")) {
        closeMenu();
    } else {
        openMenu();
    }

});

closeBtn.addEventListener("click", closeMenu);

overlay.addEventListener("click", closeMenu);