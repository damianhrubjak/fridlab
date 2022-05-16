import lax from "lax.js";

const moveVal = 100;

window.addEventListener("DOMContentLoaded", () => {
    lax.init();
    lax.addDriver("scrollY", function () {
        return window.scrollY;
    });

    lax.addElements(".lax-robot", {
        scrollY: {
            "max-height": [
                ["index", 300],
                [0, 119],
                {
                    cssUnit: "px",
                    cssFn: (val) => `${val}px`,
                },
            ],
        },
    });
    lax.addElements(".lax-printer-head", {
        scrollY: {
            translateX: [
                ["index", 300],
                [0, moveVal * 6], //70 * 8
                {
                    // calculate value, to make head move forth and back
                    // if val is from 0 to 80 -> head is moving to right
                    // if val is from 80 to 0 -> head is moving to left
                    cssFn: (val) => {
                        const fraction = val / moveVal;

                        // multiplier how many times is scrolled position greater than moveVal
                        const multiplier = Math.round(fraction);

                        // if is multiplier is even head is moving to right
                        // if is multiplier is odd head is moving to left
                        if (multiplier % 2 === 0) {
                            // formula: 0 + 80 * (3.8 - 3) => 80 * 0.8 => 10px
                            return moveVal * (fraction - multiplier);
                        } else {
                            // formula: 80 - ( 80 * (3.8 - 3)) => 80 - (80 * 0.8) => 70px
                            return 70 - moveVal * (fraction - multiplier);
                        }
                    },
                },
            ],
            translateY: [["index"], [16]],
        },
    });
});
