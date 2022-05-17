import { has } from "lodash";
import React from "react";
import { createRoot } from "react-dom/client";
import { useForm } from "react-hook-form";
import InputError from "../components/InputError";

const errorMessages = {
    maxLength: "Zadaná hodnota je pridlhá",
    minLength: "Zadaná hodnota je prikrátka",
    required: "Toto pole je povinné",
    regex: "Toto pole nespĺňa daný formát",
};

export default function ContactForm() {
    const {
        register,
        handleSubmit,
        formState: { errors },
    } = useForm({
        mode: "onBlur",
    });

    const sendForm = (data) => {
        console.log(data);
    };

    console.log(errors);

    return (
        <React.Fragment>
            <form action="#" onSubmit={(e) => e.preventDefault()}>
                <div className="input-control mb-4 w-[calc(50%-20px)]">
                    <label className="label-control" htmlFor="full-name-input">
                        Meno a priezvisko
                    </label>
                    <input
                        className="input-content-control"
                        id="full-name-input"
                        type="text"
                        {...register("full_name", {
                            required: errorMessages.required,
                            maxLength: {
                                value: 100,
                                message: errorMessages.maxLength,
                            },
                            minLength: {
                                value: 3,
                                message: errorMessages.minLength,
                            },
                        })}
                    />
                    <InputError
                        error={has(errors, "full_name") ? errors.full_name : {}}
                    />
                </div>
                <div className="mb-10 flex w-full gap-10">
                    <div className="input-control w-1/2">
                        <label
                            className="label-control"
                            htmlFor="subject-input"
                        >
                            Predmet
                        </label>
                        <input
                            className="input-content-control"
                            id="subject-input"
                            type="text"
                            {...register("subject", {
                                required: errorMessages.required,
                                maxLength: {
                                    value: 50,
                                    message: errorMessages.maxLength,
                                },
                                minLength: {
                                    value: 3,
                                    message: errorMessages.minLength,
                                },
                            })}
                        />
                        <InputError
                            error={has(errors, "subject") ? errors.subject : {}}
                        />
                    </div>
                    <div className="input-control w-1/2">
                        <label className="label-control" htmlFor="email-input">
                            E-mail
                        </label>
                        <input
                            className="input-content-control"
                            id="email-input"
                            type="email"
                            {...register("email", {
                                required: errorMessages.required,
                                maxLength: {
                                    value: 70,
                                    message: errorMessages.maxLength,
                                },
                                minLength: {
                                    value: 3,
                                    message: errorMessages.minLength,
                                },
                                pattern: {
                                    value: /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
                                    message: errorMessages.regex,
                                },
                            })}
                        />
                        <InputError
                            error={has(errors, "email") ? errors.email : {}}
                        />
                    </div>
                </div>

                <div className="input-control">
                    <label className="label-control" htmlFor="message-input">
                        Vaša správa
                    </label>
                    <textarea
                        className="input-content-control h-64"
                        id="message-input"
                        {...register("message", {
                            required: errorMessages.required,
                            maxLength: {
                                value: 7000,
                                message: errorMessages.maxLength,
                            },
                            minLength: {
                                value: 10,
                                message: errorMessages.minLength,
                            },
                        })}
                    />
                    <InputError
                        error={has(errors, "message") ? errors.message : {}}
                    />
                </div>
                <div className="mt-10 flex w-full justify-center">
                    <button
                        className="submit-button  w-1/2 text-center"
                        type="submit"
                        onClick={handleSubmit(sendForm)}
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
