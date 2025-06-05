function openModal($el) {
    const modal = $el.dataset.target;
    const $target = document.getElementById(modal);
    $target.classList.add("is-active");
}

function closeModal($el, $nextEl, $resetForm = null) {
    const $target = $el.closest(".modal");
    $target.classList.remove("is-active");

    if ($resetForm !== null) {
        document.forms[$resetForm].reset();
    }
    if ($nextEl !== 0) {
        openModal($nextEl);
    }
}

function closeAllModals() {
    (document.querySelectorAll(".modal") || []).forEach(($modal) => {
        closeModal($modal);
    })
}

document.addEventListener('DOMContentLoaded', () => {
    document.addEventListener('keydown', (event) => {
        if (event.key === "Escape") {
            closeAllModals();
        }
    })
})
