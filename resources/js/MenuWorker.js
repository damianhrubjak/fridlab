class MenuWorker {
    #header = null;
    #oldScrollValue = 0;
    #menuWrapper = null;
    #burger = null;

    constructor() {
        this.#header = document.querySelector("#app-header");
        this.#menuWrapper = document.querySelector("#menu-links-wrapper");
        this.#burger = document.querySelector("#hamburger");

        this.createEventListeners();
    }

    createEventListeners() {
        window.addEventListener("scroll", () => {
            this.onScroll();
        });

        window.addEventListener("resize", () => {
            this.updateMenuHeight();
        });

        window.addEventListener("DOMContentLoaded", () => {
            this.updateMenuHeight();
        });

        this.#burger.addEventListener("click", () => {
            this.toggleMenu();
        });
    }

    onScroll() {
        let scrollTop =
            window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > 1000) {
            this.setMenuPosition(true);
        }

        if (scrollTop < this.#oldScrollValue) {
            this.setMenuPosition(false);
        }

        this.#oldScrollValue = scrollTop <= 0 ? 0 : scrollTop;
    }

    setMenuPosition(shouldGoAway) {
        shouldGoAway
            ? this.#header.classList.add("-translate-y-full")
            : this.#header.classList.remove("-translate-y-full");
    }

    updateMenuHeight() {
        const height =
            document.querySelector("#menu-links-get-height").offsetHeight + 15;
        document.body.style.setProperty("--menu-height", height + "px");
    }

    toggleMenu() {
        //* open:remove max-h-0 and add calculated max-height
        //* end: upper action is inverted
        this.#menuWrapper.classList.toggle("max-h-0");
        this.#menuWrapper.classList.toggle("max-h-[var(--menu-height)]");

        //* open:remove opacity-0 and add opacity-100
        //* end: upper action is inverted
        this.#menuWrapper.classList.toggle("opacity-0");
        this.#menuWrapper.classList.toggle("opacity-100");
    }
}

export default new MenuWorker();
