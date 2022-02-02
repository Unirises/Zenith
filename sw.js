let cache_name = "SimiCart"; // The string used to identify our cache
const ASSETS = [
    "./zenith/assets/css/style.css",
    "./zenith/assets/js/zenith.js",
    "./zenith/index.php",
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