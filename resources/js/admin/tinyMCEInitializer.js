import axios from "axios";

const uploadHandler = (blobInfo, progress) =>
    new Promise(async (resolve, reject) => {
        const formData = new FormData();
        formData.append("image", blobInfo.blob(), blobInfo.filename());

        try {
            const response = await axios.post(
                `${location.origin}/admin/upload-image`,
                formData,
                {
                    onUploadProgress: (e) =>
                        progress((e.loaded / e.total) * 100),
                    headers: {
                        "Content-Type": "multipart/form-data",
                    },
                }
            );

            resolve(response.data.url);
        } catch (error) {
            reject(error);
        }
    });

const tinyMCEInitializer = (tinymce, selector) =>
    tinymce.init({
        selector: selector,
        plugins: [
            "advlist",
            "autolink",
            "lists",
            "link",
            "preview",
            "anchor",
            "image",
            "link",
            "media",
            "searchreplace",
            "visualblocks",
            "fullscreen",
            "insertdatetime",
            "wordcount",
            "help",
        ],
        toolbar:
            "undo redo | " +
            "bold italic underline strikethrough | superscript subscript | alignleft aligncenter alignright alignjustify | " +
            "bullist numlist outdent indent | " +
            "fontsizeselect|removeformat | help",
        content_style:
            "@import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');" +
            "body { font-family:Ubuntu,sans-serif;}",
        language: "sk",
        images_upload_handler: uploadHandler,
        setup: (editor) =>
            editor.on("blur", () => {
                tinymce.triggerSave();
            }),
    });

// Add to window object, to make tinyMCEInitializer function available for whole document
window.tinyMCEInitializer = tinyMCEInitializer;
