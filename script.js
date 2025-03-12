document.addEventListener("DOMContentLoaded", () => {
    const projectLinks = document.querySelectorAll(".project a");
    
    projectLinks.forEach(link => {
        link.addEventListener("mouseover", () => {
            link.style.color = "#2a4930";
        });
        
        link.addEventListener("mouseout", () => {
            link.style.color = "#000";
        });
    });

    console.log("Projects page loaded successfully!");
<<<<<<< HEAD
});
=======
});
>>>>>>> 7f7c335 (Update Css)
