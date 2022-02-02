let cache_name = 'zenith';
const staticAssets = [
    './',
    './index.php',
    './assets/css/styles.css',
    './assets/js/zenith.js'
];
self.addEventListener("install", event => {
    console.log("installing...");
    event.waitUntil(
        caches
        .open(cache_name)
        .then(cache => {
            return cache.addAll(staticAssets);
        })
        .catch(err => console.log(err))
    );
});

self.addEventListener("fetch", event => {
    console.log("You fetched " + event.url);
});