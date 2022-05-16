import lax from "lax.js";

const moveVal = 100;
let fraction = 0,
    multiplier = 0,
    newValue = 0;

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
                [0, moveVal * 6],
                {
                    //? calculate value, to make head move forth and back
                    //* if val is from 0 to 80 -> head is moving to right
                    //* if val is from 80 to 0 -> head is moving to left
                    cssFn: (val) => {
                        fraction = val / moveVal;

                        //* multiplier how many times is scrolled position greater than moveVal
                        multiplier = Math.floor(fraction);

                        // 0 + 80 * (3.8 - 3) => 80 * 0.8 => 10px
                        newValue = moveVal * (fraction - multiplier);

                        // if is multiplier is even head is moving to right
                        // if is multiplier is odd head is moving to left
                        if (multiplier % 2 === 0) {
                            // formula: 0 + 80 * (3.8 - 3) => 80 * 0.8 => 10px
                            return newValue < 0 ? 0 : newValue;
                        } else {
                            //* when head is going left, we have to subtract moveVal from newValue
                            // formula: 80 - ( 80 * (3.8 - 3)) => 80 - (80 * 0.8) => 70px
                            return newValue < 0 ? 0 : moveVal - newValue;
                        }
                    },
                },
            ],
            translateY: [["index"], [16]],
        },
    });
});
