/* ==========================================
   DOM READY
========================================== */

document.addEventListener("DOMContentLoaded", () => {

    initCategoryButtons();
    initSidebarLinks();
    initProductFilter();
    initResearchSliders();

});

/* ==========================================
   MOBILE SLIDERS
========================================== */

    function initResearchSliders() {

    const mobileBreakpoint = 767;

    if (window.innerWidth <= mobileBreakpoint) {

        document
            .querySelectorAll('.product-slider')
            .forEach(slider => {

                const $slider = jQuery(slider);

                if (!$slider.hasClass('slick-initialized')) {

                    $slider.slick({

                        slidesToShow: 1,
                        slidesToScroll: 1,

                        infinite: false,

                        arrows: true,
                        dots: false,

                        adaptiveHeight: true,

                        prevArrow:
                            `<button class="slick-prev-custom" aria-label="Previous">
                                &#8249;
                            </button>`,

                        nextArrow:
                            `<button class="slick-next-custom" aria-label="Next">
                                &#8250;
                            </button>`

                    });

                }

            });

    } else {

        document
            .querySelectorAll('.product-slider')
            .forEach(slider => {

                const $slider = jQuery(slider);

                if ($slider.hasClass('slick-initialized')) {

                    $slider.slick('unslick');

                }

            });

    }

}



/* ==========================================
   WINDOW RESIZE
========================================== */

let resizeTimer;

window.addEventListener('resize', () => {

    clearTimeout(resizeTimer);

    resizeTimer = setTimeout(() => {

        initResearchSliders();

    }, 250);

});

/* ==========================================
   CATEGORY FILTER BUTTONS
========================================== */

function initCategoryButtons() {

    const buttons =
        document.querySelectorAll('.filter-btn');

    buttons.forEach(button => {

        button.addEventListener('click', () => {

            buttons.forEach(btn => {

                btn.classList.remove('active');

            });

            button.classList.add('active');

            const target =
                button.dataset.target;

            if (target === 'all') {

                const section =
                    document.querySelector(
                        '.research-categories-section'
                    );

                if (section) {

                    window.scrollTo({

                        top:
                            section.offsetTop - 100,

                        behavior: 'smooth'

                    });

                }

                return;

            }

            const targetSection =
                document.getElementById(target);

            if (targetSection) {

                window.scrollTo({

                    top:
                        targetSection.offsetTop - 120,

                    behavior: 'smooth'

                });

            }

        });

    });

}

/* ==========================================
   SIDEBAR LINKS
========================================== */

function initSidebarLinks() {

    const sidebarItems =
        document.querySelectorAll(
            '.sidebar-box li'
        );

    sidebarItems.forEach(item => {

        item.addEventListener('click', () => {

            const text =
                item.textContent
                    .trim()
                    .toLowerCase();

            let targetId = null;

            if (
                text.includes('metabolic')
            ) {
                targetId = 'metabolic';
            }

            else if (
                text.includes('gh signaling')
            ) {
                targetId = 'gh';
            }

            else if (
                text.includes('tissue')
            ) {
                targetId = 'tissue';
            }

            else if (
                text.includes('cellular')
            ) {
                targetId = 'cellular';
            }

            else if (
                text.includes('multi')
            ) {
                targetId = 'multi';
            }

            else if (
                text.includes('reconstruction')
            ) {
                targetId = 'reconstruction';
            }

            if (!targetId) return;

            const section =
                document.getElementById(
                    targetId
                );

            if (section) {

                window.scrollTo({

                    top:
                        section.offsetTop - 120,

                    behavior: 'smooth'

                });

            }

        });

    });

}

/* ==========================================
   PRODUCT FILTER
========================================== */

function initProductFilter() {

    const select =
        document.querySelector(
            '.product-filter'
        );

    if (!select) return;

    select.addEventListener(
        'change',
        handleProductFilter
    );

}

/* ==========================================
   PRODUCT FILTER LOGIC
========================================== */

function handleProductFilter(e) {

    const value = e.target.value;

    console.log(
        'Selected Filter:',
        value
    );

    /*
        Future:

        Price Low -> High
        Price High -> Low
        A-Z
        Z-A

        Can be implemented here
    */

}

/* ==========================================
   ACTIVE SECTION HIGHLIGHT
========================================== */

const sections =
    document.querySelectorAll(
        '.research-group'
    );

const navButtons =
    document.querySelectorAll(
        '.filter-btn'
    );

window.addEventListener(
    'scroll',
    highlightActiveSection
);

function highlightActiveSection() {

    let current = '';

    sections.forEach(section => {

        const sectionTop =
            section.offsetTop - 180;

        const sectionHeight =
            section.offsetHeight;

        if (
            window.scrollY >= sectionTop &&
            window.scrollY <
                sectionTop + sectionHeight
        ) {
            current = section.id;
        }

    });

    navButtons.forEach(btn => {

        btn.classList.remove('active');

        if (
            btn.dataset.target === current
        ) {
            btn.classList.add('active');
        }

    });

}


