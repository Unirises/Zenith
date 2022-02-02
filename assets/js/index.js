window.addEventListener('load', () => {
    registerSW();
});

function registerSW() {
    if ("serviceWorker" in navigator) {
        navigator.serviceWorker
            .register("sw.js")
            .then(() => console.log("registered service worker!"));
    }
}