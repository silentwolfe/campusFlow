const nav = document.querySelector("aside");
const nav_toggle = document.querySelector(".mobile_nav_toggle");

nav_toggle.addEventListener("click", () => {
    const visibilty = nav.getAttribute("data-visible");

    if (visibilty === "false")
    {
        nav.setAttribute("data-visible", true)
        nav_toggle.setAttribute("aria-expanded", true)
    }
    else {
        nav.setAttribute("data-visible", false)
        nav_toggle.setAttribute("aria-expanded", false)
    }
});