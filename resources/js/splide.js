import Splide from "@splidejs/splide";

new Splide(".splide", {
    perPage: 5,
    focus: "center",
    padding: "2rem",
    gap: "2rem",
    breakpoints: {
        1280: {
            perPage: 3,
        },
        1024: {
            perPage: 2,
        },
        640: {
            perPage: 1,
        },
    },
}).mount();
