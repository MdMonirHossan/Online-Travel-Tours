const cacheName = 'v1';
const cacheAssets = [
  'index.php',
  'about.php',
  'css/style.css',
  'js/main.js'
];

// Call Install Event
self.addEventListener('install', e => {
  console.log('Service Worker: Installed');

  e.waitUntil(
    caches
      .open(cacheName)
      .then(cache => {
        console.log('Service Worker: Caching Files');
        cache.addAll(cacheAssets);
      })
      .then(() => self.skipWaiting())
  );
});

// // Call Activate Event
self.addEventListener('activate', e => {
  console.log('Service Worker: Activated');
  // Remove previous caches
  e.waitUntil(
    caches.keys().then(cacheNames => {
      return Promise.all(
        cacheNames.map(cache => {
          if (cache !== cacheName) {
            console.log('Service Worker: Clearing Old Cache');
            return caches.delete(cache);
          }
        })
      );
    })
  );
});

// // Call Fetch Event to cached defined file
self.addEventListener('fetch', e => {
  console.log('Service Worker: Fetching');
  e.respondWith(
      fetch(
          e.request).catch(() => caches.match(e.request)));
});