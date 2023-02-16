const darkModeToggler = document.querySelector(".theme");
const light_theme = document.querySelector(".light__mode");
const dark_theme = document.querySelector(".dark__mode");
const darkMode = localStorage.getItem("darkMode");

// Set Dark Mode
const enableDarkMode = () => {
    document.body.classList.add("darkmode");
    dark_theme.style.display = "block";
    light_theme.style.display = "none";
    // document.querySelector(".aside__container").style.backgroundColor = "#343541";
    // document.querySelector(".heading").style.color = "#eee";
    // document.querySelector(".content__form").style.color = "#eee";
    // document.querySelector("body").style.backgroundColor = "#343541";
    darkMode = localStorage.setItem("darkMode", "enabled")
}

// Disable Dark Mode
const disableDarkMode = () => {
    document.body.classList.remove("darkmode");
    light_theme.style.display = "block";
    dark_theme.style.display = "none";
    darkMode = localStorage.setItem("darkMode", null)
}

// Add Event Listener
darkModeToggler.addEventListener("click", () => {
    let darkMode = localStorage.getItem("darkMode");
    if (darkMode !== "enabled")
        enableDarkMode();
    else {
        disableDarkMode();
    }
})

// Save Dark Mode History
// if (darkMode === "enabled") {
//     enableDarkMode();
// }

const upload_img_file = document.getElementById("img__upload");
const upload_video_file = document.getElementById("video__upload");
const img_upload = document.getElementById("preview_img_post");
const video_upload = document.getElementById("preview_video_post");
const space = document.getElementById("space");

upload_img_file.onchange = (event) => {
    const [file] = upload_img_file.files;
    if (file) {
        img_upload.src = URL.createObjectURL(file);
        img_upload.style.display = "block";
        img_upload.style.marginTop = "-51vh";
        space.style.display = "none";              
    }
}

upload_video_file.onchange = (event) => {
    const [file] = upload_video_file.files;
    if (file) {
        video_upload.src = URL.createObjectURL(file);
        video_upload.style.display = "block";
        video_upload.style.marginTop = "-51vh";
        space.style.display = "none"; 
    }
}