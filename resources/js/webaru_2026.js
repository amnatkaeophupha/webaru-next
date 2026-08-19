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

    userPaused: false,

    hoverPaused: false,

    focusPaused: false,

    reducedMotion: false,

    motionQuery: null,

    motionChangeHandler: null,

    visibilityHandler: null,


    init() {

        this.motionQuery = window.matchMedia('(prefers-reduced-motion: reduce)');
        this.reducedMotion = this.motionQuery.matches;
        this.userPaused = this.reducedMotion;

        this.motionChangeHandler = (event) => {

            this.reducedMotion = event.matches;

            if (this.reducedMotion) {
                this.userPaused = true;
                this.stop();

                return;
            }

            this.start();

        };

        this.visibilityHandler = () => {

            if (document.hidden) {
                this.stop();

                return;
            }

            this.start();

        };

        if (this.motionQuery.addEventListener) {
            this.motionQuery.addEventListener('change', this.motionChangeHandler);
        } else {
            this.motionQuery.addListener(this.motionChangeHandler);
        }

        document.addEventListener('visibilitychange', this.visibilityHandler);

        this.start();

    },


    destroy() {

        this.stop();

        if (this.motionQuery?.removeEventListener) {
            this.motionQuery.removeEventListener('change', this.motionChangeHandler);
        } else {
            this.motionQuery?.removeListener(this.motionChangeHandler);
        }

        document.removeEventListener('visibilitychange', this.visibilityHandler);

    },


    advance() {

        if (this.total <= 1) {
            return;
        }

        this.active = (this.active + 1) % this.total;

    },


    next() {

        this.advance();
        this.restart();

    },


    previous() {

        if (this.total <= 1) {
            return;
        }

        this.active = (this.active - 1 + this.total) % this.total;
        this.restart();

    },


    goTo(index) {

        if (index < 0 || index >= this.total) {
            return;
        }

        this.active = index;
        this.restart();

    },


    togglePlay() {

        if (this.reducedMotion) {
            return;
        }

        this.userPaused = !this.userPaused;

        if (this.userPaused) {
            this.stop();

            return;
        }

        this.start();

    },


    pauseForHover() {

        this.hoverPaused = true;
        this.stop();

    },


    resumeAfterHover() {

        this.hoverPaused = false;
        this.start();

    },


    pauseForFocus() {

        this.focusPaused = true;
        this.stop();

    },


    resumeAfterFocus() {

        this.focusPaused = false;
        this.start();

    },


    start() {

        if (
            this.total <= 1
            || this.userPaused
            || this.hoverPaused
            || this.focusPaused
            || this.reducedMotion
            || document.hidden
        ) {
            return;
        }

        this.stop();

        this.timer = window.setInterval(() => {
            this.advance();
        }, this.interval);

    },


    stop() {

        if (!this.timer) {
            return;
        }

        window.clearInterval(this.timer);
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
