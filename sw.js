const CACHE_NAME = 'Zenith-V1';
const CACHE_FILES = [
    '/zenith/index.php',
    '/zenith/assets/css/style.css',
    '/zenith/assets/js/zenith.js',
    '/zenith/pages/navigation.php',
    '/zenith/pages/p1.php',
    '/zenith/pages/p2.php',
    '/zenith/pages/p3.php',
    '/zenith/pages/p4.php',
    '/zenith/pages/p5.php',
    '/zenith/pages/p6.php',
    '/zenith/assets/img/uap_logo.png',
    '/zenith/assets/img/bg/bg1.png',
    '/zenith/assets/img/bg/bg2.png',
    '/zenith/assets/img/bg/bg3.png',
    '/zenith/assets/img/navigation/Dosing.png',
    '/zenith/assets/img/navigation/Efficacy.png',
    '/zenith/assets/img/navigation/Home.png',
    '/zenith/assets/img/navigation/Immunomodulation.png',
    '/zenith/assets/img/navigation/Savings.png',
    '/zenith/assets/img/navigation/selected_dosage.png',
    '/zenith/assets/img/navigation/selected_efficacy.png',
    '/zenith/assets/img/navigation/selected_home.png',
    '/zenith/assets/img/navigation/selected_immunomodulation.png',
    '/zenith/assets/img/navigation/selected_safety.png',
    '/zenith/assets/img/navigation/selected_savings.png',
    '/zenith/assets/img/product/confidence.png',
    '/zenith/assets/img/product/uap_unilab.png',
    '/zenith/assets/img/product/zenith.png',

    '/zenith/assets/img/resources/dosage/Better_than_10_Days_Show.png',
    '/zenith/assets/img/resources/dosage/better_than_10_days.png',
    '/zenith/assets/img/resources/dosage/Co_Amoxiclav_Show.png',
    '/zenith/assets/img/resources/dosage/co-amoxiclav.png',
    '/zenith/assets/img/resources/dosage/Dosage-References.png',
    '/zenith/assets/img/resources/dosage/dosage-sub.png',
    '/zenith/assets/img/resources/dosage/dosage-title.png',
    '/zenith/assets/img/resources/dosage/For_Pneumonia_Show.png',
    '/zenith/assets/img/resources/dosage/for_pneumonia.png',

    '/zenith/assets/img/resources/efficacy/Asthma-Description.png',
    '/zenith/assets/img/resources/efficacy/Asthma-Photo.png',
    '/zenith/assets/img/resources/efficacy/Asthma.png',
    '/zenith/assets/img/resources/efficacy/Chronic_Respiratory.png',
    '/zenith/assets/img/resources/efficacy/Chronic-Respiratory-Description.png',
    '/zenith/assets/img/resources/efficacy/Chronic-Respiratory-Photo.png',
    '/zenith/assets/img/resources/efficacy/Efficacy-References.png',
    '/zenith/assets/img/resources/efficacy/Inpatient-Description.png',
    '/zenith/assets/img/resources/efficacy/Inpatient-Photo.png',
    '/zenith/assets/img/resources/efficacy/Inpatient.png',
    '/zenith/assets/img/resources/efficacy/Outpatient-Description.png',
    '/zenith/assets/img/resources/efficacy/Outpatient-Photo.png',
    '/zenith/assets/img/resources/efficacy/Outpatient.png',

    '/zenith/assets/img/resources/immo/Immunomodulation-References.png',
    '/zenith/assets/img/resources/immo/Immunomodulation-Subcopy.png',
    '/zenith/assets/img/resources/immo/Immunomodulation-Title.png',
    '/zenith/assets/img/resources/immo/Inhibits-Mobility-and-Quorum-Sensing-Icon.png',
    '/zenith/assets/img/resources/immo/Inhibits-Mobility-and-Quorum-Sensing-Text.png',
    '/zenith/assets/img/resources/immo/Inhibits-Mobility-and-Quorum-Sensing-Text2.png',
    '/zenith/assets/img/resources/immo/Middle-Image.png',
    '/zenith/assets/img/resources/immo/Middle-Image2.png',
    '/zenith/assets/img/resources/immo/Promising-Immunomodulatory-Icon.png',
    '/zenith/assets/img/resources/immo/Promising-Immunomodulatory-Text.png',
    '/zenith/assets/img/resources/immo/Promising-Immunomodulatory-Text2.png',
    '/zenith/assets/img/resources/immo/Promotes-Resolution-Icon.png',
    '/zenith/assets/img/resources/immo/Promotes-Resolution-Text.png',
    '/zenith/assets/img/resources/immo/Promotes-Resolution-Text2.png',
    '/zenith/assets/img/resources/immo/Reduces-Serum-Concentrations-Icon.png',
    '/zenith/assets/img/resources/immo/Reduces-Serum-Concentrations-Text.png',
    '/zenith/assets/img/resources/immo/Reduces-Serum-Concentrations-Text2.png',

    '/zenith/assets/img/resources/safety/COPD-Treatment-Description.png',
    '/zenith/assets/img/resources/safety/COPD-Treatment-Photo.png',
    '/zenith/assets/img/resources/safety/COPD-Treatment.png',
    '/zenith/assets/img/resources/safety/Less-Adverse-Events-Description.png',
    '/zenith/assets/img/resources/safety/Less-Adverse-Events-Photo.png',
    '/zenith/assets/img/resources/safety/Less-Adverse-Events.png',
    '/zenith/assets/img/resources/safety/Resistance-Cough-Description.png',
    '/zenith/assets/img/resources/safety/Resistance-Cough-Photo.png',
    '/zenith/assets/img/resources/safety/Resistant-Cough.png',
    '/zenith/assets/img/resources/safety/Safety-References.png',
    '/zenith/assets/img/resources/safety/Safety-Shape-under.png',
    '/zenith/assets/img/resources/safety/Safety-Sub.png',
    '/zenith/assets/img/resources/safety/Safety-Title.png',
    '/zenith/assets/img/resources/safety/Severe-Asthma-Description.png',
    '/zenith/assets/img/resources/safety/Severe-Asthma-Photo.png',
    '/zenith/assets/img/resources/safety/Severe-Asthma.png',

    '/zenith/assets/img/resources/savings/10_savings.png',
    '/zenith/assets/img/resources/savings/innovator-brand.png',
    '/zenith/assets/img/resources/savings/Medicine-Name.png',
    '/zenith/assets/img/resources/savings/Medicine-Packaging.png',
    '/zenith/assets/img/resources/savings/Tagline-Experience-Treatment.png',

    '/zenith/assets/img/resources/efficacy_title.png',
    '/zenith/assets/img/resources/references.png'

];

self.addEventListener('install', event => {
    console.log("[sw.js] Install event.");
    event.waitUntil(
        caches.open(CACHE_NAME)
        .then(cache => cache.addAll(CACHE_FILES))
        .then(self.skipWaiting())
        .catch(err => console.error("[sw.js] Error trying to pre-fetch cache files:", err))
    );
});

self.addEventListener('activate', event => {
    console.log("[sw.js] Activate event.");
    event.waitUntil(
        self.clients.claim()
    );
});

self.addEventListener('fetch', event => {
    if (!event.request.url.startsWith(self.location.origin)) return;
    console.log("[sw.js] Fetch event on", event.request.url);
    event.respondWith(
        caches.match(event.request).then(response => {
            console.info("[sw.js] Responded to ", event.request.url, "with", response ? "cache hit." : "fetch.");
            return response || fetch(event.request);
        }).catch(err => {
            console.error("[sw.js] Error with match or fetch:", err);
        })
    );
});