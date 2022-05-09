import React from "react";
import { createRoot } from "react-dom/client";

export default function ContactForm() {
    return (
        <React.Fragment>
            <form action="#">
                <div class="input-control mb-4 w-[calc(50%-20px)]">
                    <label class="label-control" htmlFor="">
                        Meno a priezvisko
                    </label>
                    <input class="input-content-control " type="text" />
                </div>
                <div class="mb-10 flex w-full gap-10">
                    <div class="input-control w-1/2">
                        <label class="label-control" htmlFor="">
                            Predmet
                        </label>
                        <input class="input-content-control" type="text" />
                    </div>
                    <div class="input-control w-1/2">
                        <label class="label-control" htmlFor="">
                            E-mail
                        </label>
                        <input class="input-content-control" type="text" />
                    </div>
                </div>

                <div class="input-control">
                    <label class="label-control">Vaša správa</label>
                    <textarea class="input-content-control h-64"></textarea>
                </div>
                <div class="mt-10 flex w-full justify-center">
                    <button
                        class="submit-button  w-1/2 text-center"
                        type="submit"
                    >
                        Odoslať
                    </button>
                </div>
            </form>
        </React.Fragment>
    );
}

const el = document.getElementById("react-mount-contact-form");
if (el) {
    const root = createRoot(el);
    root.render(<ContactForm />);
}
