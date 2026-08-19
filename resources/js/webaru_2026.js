import Alpine from 'alpinejs';


window.Alpine = Alpine;


/* =============================================================
   Mobile Navigation
============================================================= */

Alpine.data('mobileMenu', () => ({

    open: false,

    toggle() {
        this.open = !this.open;
    },

    close() {
        this.open = false;
    },

}));


/* =============================================================
   Hero Carousel
============================================================= */

Alpine.data('heroCarousel', (config = {}) => ({

    active: 0,

    total: config.total ?? 1,

    interval: config.interval ?? 6000,

    timer: null,


    init() {
        this.start();
    },


    next() {

        this.active =
            (this.active + 1) % this.total;

    },


    previous() {

        this.active =
            (this.active - 1 + this.total) % this.total;

    },


    goTo(index) {

        this.active = index;

        this.restart();

    },


    start() {

        if (this.total <= 1) {
            return;
        }

        this.stop();

        this.timer = setInterval(() => {

            this.next();

        }, this.interval);

    },


    stop() {

        if (!this.timer) {
            return;
        }

        clearInterval(this.timer);

        this.timer = null;

    },


    restart() {

        this.stop();

        this.start();

    },

}));


/* =============================================================
   Start Alpine
============================================================= */

Alpine.start();
