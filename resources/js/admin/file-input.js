const fileLabels = document.querySelectorAll("[custom-file-input]");

fileLabels.forEach((label) => {
    const fileInput = label.querySelector("input");
    const filesOutputEl = label.querySelector("[custom-file-input-files]");
    fileInput.addEventListener("change", (e) => {
        let html = "";
        Array.from(e.target.files).map((file) => {
            html += `<div class="flex gap-2 font-bold bg-slate-800 text-white py-1 px-2"><p>${
                file.name
            }</p><p class="text-pallette-yellow">${
                Math.round((file.size / 1000000) * 100) / 100
            } MB</p></div>`;
        });
        filesOutputEl.innerHTML = html;
    });
});
