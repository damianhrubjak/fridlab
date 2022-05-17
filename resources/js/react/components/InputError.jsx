import React from "react";
import PropTypes from "prop-types";
import { has } from "lodash";

function InputError({ error }) {
    return (
        <div
            className={`overflow-hidden transition-all duration-300 ${
                has(error, "message") ? "max-h-20" : "max-h-0"
            }`}
        >
            <div className="mt-4 flex items-center bg-rose-700 p-3">
                <p className="text-2xl">
                    <i className="fa-solid fa-triangle-exclamation"></i>
                </p>
                <p className="ml-4 text-lg font-bold">
                    {has(error, "message") && error.message}
                </p>
            </div>
        </div>
    );
}

InputError.propTypes = {
    error: PropTypes.object.isRequired,
};

export default InputError;
