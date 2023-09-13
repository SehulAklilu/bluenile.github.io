window.addEventListener('resize', adjustVideoSize);

function adjustVideoSize() {
    const video = document.getElementById('video-background');
    const section = document.getElementById('home');
    const videoRatio = video.videoWidth / video.videoHeight;
    const sectionRatio = section.offsetWidth / section.offsetHeight;

    if (sectionRatio > videoRatio) {
        video.style.width = '100%';
        video.style.height = 'auto';
    } else {
        video.style.width = 'auto';
        video.style.height = '100%';
    }
}

// Adjust the video size on page load
window.onload = adjustVideoSize;


$(document).ready(function () {
    $(".testimonial-container").scroll(function () {
        var scrollPos = $(this).scrollLeft();
        // Add animation or style changes based on the scroll position
    });
});

