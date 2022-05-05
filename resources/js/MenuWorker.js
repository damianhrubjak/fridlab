class MenuWorker {
    #header = null;
    #oldScrollValue = 0;
    constructor() {
        this.#header = document.querySelector("#app-header");

        this.createEventListeners();
    }

    createEventListeners() {
        window.addEventListener("scroll", () => {
            this.onScroll();
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
}

export default new MenuWorker();
