// Select the boxes
const videosBox = document.getElementById("videos-box");
const projectsBox = document.getElementById("projects-box");
const designsBox = document.getElementById("designs-box");

// Select the modals
const videosModal = document.getElementById("videos-modal");
const projectsModal = document.getElementById("projects-modal");
const designsModal = document.getElementById("designs-modal");

// Select the close buttons
const closeButtons = document.querySelectorAll(".close-button");

// Function to open a specific modal
function openModal(modal) {
    modal.classList.add("active");
}

// Function to close a specific modal
function closeModal(modal) {
    modal.classList.remove("active");
}

// Open the corresponding modal when each box is clicked
videosBox.addEventListener("click", () => openModal(videosModal));
projectsBox.addEventListener("click", () => openModal(projectsModal));
designsBox.addEventListener("click", () => openModal(designsModal));

// Close the modal when the close button is clicked
closeButtons.forEach(button => {
    button.addEventListener("click", (event) => {
        const modalId = event.target.getAttribute("data-modal");
        const modal = document.getElementById(modalId);
        closeModal(modal);
    });
});

// Close the modal when clicking outside the modal content
[ videosModal, projectsModal, designsModal ].forEach(modal => {
    modal.addEventListener("click", (event) => {
        if (event.target === modal) {
            closeModal(modal);
        }
    });
});

// Handle the grid of images
document.addEventListener("DOMContentLoaded", () => {
    const grid = document.querySelector(".pinterest-grid");

    if (grid) {
        const images = Array.from(grid.children);

        images.forEach(img => {
            // Ensure the images fill the modal properly
            img.style.width = "";
            img.style.height = "auto";
            
            // Open image in a new tab when clicked
            img.addEventListener("click", () => {
                const imageUrl = img.getAttribute("src");
                window.open(imageUrl, "_blank");
            });
        });
    }
});
