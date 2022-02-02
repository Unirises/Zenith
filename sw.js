let cache_name = "SimiCart"; // The string used to identify our cache
const ASSETS = [
    "assets/css/style.css",
    "assets/js/zenith.js",
    "index.php",
    "./zenith"
];
self.addEventListener("install", event => {
    console.log("installing...");
    event.waitUntil(
        caches
        .open(cache_name)
        .then(cache => {
            return cache.addAll(ASSETS);
        })
        .catch(err => console.log(err))
    );
});

self.addEventListener("fetch", event => {
    if (event.request.url === "https://medichem.online/zenith/") {
        // or whatever your app's URL is
        event.respondWith(
            fetch(event.request).catch(err =>
                self.cache.open(cache_name).then(cache => cache.match("index.php"))
            )
        );
    } else {
        event.respondWith(
            fetch(event.request).catch(err =>
                caches.match(event.request).then(response => response)
            )
        );
    }
});