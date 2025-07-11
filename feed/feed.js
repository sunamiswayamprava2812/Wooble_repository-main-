



// toggle post-input click button
const openModalBtn = document.getElementById('openModalBtn');
const closeModalBtn = document.getElementById('closeModalBtn');
const modal = document.getElementById('postModal');
const overlay = document.getElementById('overlay');

openModalBtn.onclick = () => {
    modal.style.display = 'block';
    overlay.style.display = 'block';
};

closeModalBtn.onclick = () => {
    modal.style.display = 'none';
    overlay.style.display = 'none';
};

window.onclick = (e) => {
    if (e.target === overlay) {
        modal.style.display = 'none';
        overlay.style.display = 'none';
    }
};


// toggle plus button
const plusBtn = document.getElementById("toggleExtraBtns");
const extraBtns = document.querySelector(".extra-buttons");

plusBtn.addEventListener("click", () => {
    if (extraBtns.style.display === "none" || extraBtns.style.display === "") {
        extraBtns.style.display = "flex";
        plusBtn.style.display = "none";
    } else {
        extraBtns.style.display = "none";
    }
});


// seemore seeless toggle button
document.addEventListener('DOMContentLoaded', function () {
    const seeMoreBtn = document.querySelector('.see-more-btn');
    const profilecardsitem = document.querySelector('.profile-cards-item');

    seeMoreBtn.addEventListener('click', function () {
        profilecardsitem.classList.toggle('show');

        const isShown = profilecardsitem.classList.contains('show');
        const label = isShown ? 'See less' : 'See more';
        const icon = isShown
            ? `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                           class="bi bi-chevron-compact-up" viewBox="0 0 16 16">
                       <path fill-rule="evenodd"
                             d="M7.776 5.553a.5.5 0 0 1 .448 0l6 3a.5.5 0 1 1-.448.894L8 6.56 2.224 9.447a.5.5 0 1 1-.448-.894z"/>
                   </svg>`
            : `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                           class="bi bi-chevron-compact-down" viewBox="0 0 16 16">
                       <path fill-rule="evenodd"
                             d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67"/>
                   </svg>`;

        this.innerHTML = `${label} ${icon}`;
    });
});
