const preview = document.getElementById("preview");
const placeholder =
    "https://image.shutterstock.com/image-vector/ui-image-placeholder-wireframes-apps-260nw-1037719204.jpg";
const logoImput = document.getElementById("thumb");

logoImput.addEventListener("change", function() {
    const url = this.value;
    if (url) {
        preview.setAttribute("src", url);
    } else preview.setAttribute("src", placeholder);
});
