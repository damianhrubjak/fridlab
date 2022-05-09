import React from "react";
import { createRoot } from "react-dom/client";

export default function ContactForm() {
    return <div>ContactForm</div>;
}

const el = document.getElementById("react-mount-contact-form");
if (el) {
    const root = createRoot(el);
    root.render(<ContactForm />);
}
