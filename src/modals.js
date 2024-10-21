document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById("modal-testimonios");
    const modalTitle = modal.querySelector(".modal-title");
    const iframe = modal.querySelector("iframe");
    let player;

    modal.addEventListener("show.bs.modal", function (event) {
        const button = event.relatedTarget;
        const nombre = button.getAttribute("data-bs-nombre");
        const videoId = button.getAttribute("data-bs-youtube-video");

        // Update modal title
        modalTitle.textContent = `Testimonio de ${nombre}`;

        // Update iframe src
        const newSrc = `https://www.youtube.com/embed/${videoId}?enablejsapi=1`;
        iframe.src = newSrc;
    });

    modal.addEventListener("shown.bs.modal", function () {
        // Initialize YouTube player when modal is fully shown
        player = new YT.Player(iframe, {
            events: {
                onReady: onPlayerReady,
            },
        });
    });

    modal.addEventListener("hide.bs.modal", function () {
        if (player && typeof player.stopVideo === "function") {
            player.stopVideo();
        }
    });

    function onPlayerReady(event) {
        // Player is ready, you can add any additional setup here if needed
    }
});
