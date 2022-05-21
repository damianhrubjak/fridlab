import axios from "axios";
import { has, isEmpty, isUndefined } from "lodash";
import React, { useState, useCallback } from "react";
import { createRoot } from "react-dom/client";
import { useForm } from "react-hook-form";
import InputError from "../components/InputError";

export default function ContactForm({ translations }) {
    const {
        register,
        handleSubmit,
        formState: { errors },
        reset,
    } = useForm({
        mode: "onBlur",
    });

    const __ = useCallback(
        (key) => {
            const translation = translations.find(
                (translation) => translation[key] !== undefined
            );
            return !isUndefined(translation) ? translation[key] : key;
        },
        [translations]
    );

    const [isLoading, setIsLoading] = useState(false);
    const [responseError, setResponseError] = useState({});

    const sendForm = async (data) => {
        if (isLoading) {
            return;
        }

        setIsLoading(true);

        try {
            await axios.post(`${location.origin}/api/contact-form`, data);

            setResponseError({
                class: "bg-emerald-700",
                message: __(
                    "Contact form was successfully submitted, you will receive e-mail soon"
                ),
            });

            reset();
        } catch (error) {
            switch (error.response.status) {
                case 422:
                    setResponseError({
                        class: "bg-rose-700",
                        message: __(
                            "Form is filled wrong, check entered values"
                        ),
                    });
                    break;
                case 429:
                    setResponseError({
                        class: "bg-rose-700",
                        message: __("Too many attempts, try again tomorrow"),
                    });
                    break;

                default:
                    setResponseError({
                        class: "bg-rose-700",
                        message: __("Error occurred, try again later"),
                    });
                    break;
            }
        } finally {
            setIsLoading(false);
        }
    };

    return (
        <React.Fragment>
            <div
                className={`overflow-hidden transition-all duration-300 ${
                    !isEmpty(responseError)
                        ? "max-h-28 opacity-100 md:max-h-24"
                        : "max-h-0 opacity-0"
                }`}
            >
                <div
                    className={`mb-8 p-4 ${
                        has(responseError, "class") ? responseError.class : ""
                    }`}
                >
                    <p className="text-center text-xl font-bold">
                        {has(responseError, "message") && responseError.message}
                    </p>
                </div>
            </div>

            <form action="#" onSubmit={(e) => e.preventDefault()}>
                <div className="input-control mb-4 w-full md:w-[calc(50%-20px)]">
                    <label className="label-control" htmlFor="full-name-input">
                        {__("Name and surname")}
                    </label>
                    <input
                        className="input-content-control"
                        id="full-name-input"
                        type="text"
                        {...register("full_name", {
                            required: __("This field is required"),
                            maxLength: {
                                value: 100,
                                message: __("Entered value is too long"),
                            },
                            minLength: {
                                value: 3,
                                message: __("Entered value is too short"),
                            },
                        })}
                    />
                    <InputError
                        error={has(errors, "full_name") ? errors.full_name : {}}
                    />
                </div>
                <div className="mb-4 flex w-full flex-col-reverse gap-4 md:mb-10 md:flex-row md:gap-10">
                    <div className="input-control w-full md:w-1/2">
                        <label
                            className="label-control"
                            htmlFor="subject-input"
                        >
                            {__("Subject")}
                        </label>
                        <input
                            className="input-content-control"
                            id="subject-input"
                            type="text"
                            {...register("subject", {
                                required: __("This field is required"),
                                maxLength: {
                                    value: 50,
                                    message: __("Entered value is too long"),
                                },
                                minLength: {
                                    value: 3,
                                    message: __("Entered value is too short"),
                                },
                            })}
                        />
                        <InputError
                            error={has(errors, "subject") ? errors.subject : {}}
                        />
                    </div>
                    <div className="input-control w-full md:w-1/2">
                        <label className="label-control" htmlFor="email-input">
                            E-mail
                        </label>
                        <input
                            className="input-content-control"
                            id="email-input"
                            type="email"
                            {...register("email", {
                                required: __("This field is required"),
                                maxLength: {
                                    value: 100,
                                    message: __("Entered value is too long"),
                                },
                                minLength: {
                                    value: 3,
                                    message: __("Entered value is too short"),
                                },
                                pattern: {
                                    value: /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
                                    message: __(
                                        "This field does not match requested format"
                                    ),
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
                        {__("Your message")}
                    </label>
                    <textarea
                        className="input-content-control h-64"
                        id="message-input"
                        {...register("message", {
                            required: __("This field is required"),
                            maxLength: {
                                value: 7000,
                                message: __("Entered value is too long"),
                            },
                            minLength: {
                                value: 10,
                                message: __("Entered value is too short"),
                            },
                        })}
                    />
                    <InputError
                        error={has(errors, "message") ? errors.message : {}}
                    />
                </div>
                <div className="mt-10 flex w-full flex-col-reverse justify-between xxs:flex-row">
                    <div
                        className={`mt-8 flex items-center justify-center transition duration-300 xxs:mt-0 ${
                            isLoading ? "opacity-100" : "opacity-0"
                        }`}
                    >
                        <p className="flex animate-spin items-center justify-center font-heading text-3xl text-white">
                            <i className="fa-solid fa-spinner"></i>
                        </p>
                    </div>
                    <button
                        className="submit-button w-full text-center xxs:w-3/4 sm:w-1/2"
                        type="submit"
                        onClick={handleSubmit(sendForm)}
                    >
                        {__("Submit")}
                    </button>
                </div>
            </form>
        </React.Fragment>
    );
}

const el = document.getElementById("react-mount-contact-form");
if (el) {
    const root = createRoot(el);
    root.render(
        <ContactForm translations={JSON.parse(el.dataset.translations)} />
    );
}
