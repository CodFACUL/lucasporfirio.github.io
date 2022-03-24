var CACHE_NAME = 'static-v1';

self.addEventListener('install', function (event) {
  event.waitUntil(
    caches.open(CACHE_NAME).then(function (cache) {
      return cache.addAll([
        '/lucasporfirio.github.io/SiteNasa',
        '/lucasporfirio.github.io/SiteNasa/index.html',
        '/lucasporfirio.github.io/SiteNasa/missoes.html',
        '/lucasporfirio.github.io/SiteNasa/naves.html',
        '/lucasporfirio.github.io/SiteNasa/manifest.json',
        '/lucasporfirio.github.io/SiteNasa/trabalhos_desenvolvidos.html',
        '/lucasporfirio.github.io/SiteNasa/imagens/nasa_144.png'
      ]);
    })
  )
});

self.addEventListener('activate', function activator(event) {
  event.waitUntil(
    caches.keys().then(function (keys) {
      return Promise.all(keys
        .filter(function (key) {
          return key.indexOf(CACHE_NAME) !== 0;
        })
        .map(function (key) {
          return caches.delete(key);
        })
      );
    })
  );
});

self.addEventListener('fetch', function (event) {
  event.respondWith(
    caches.match(event.request).then(function (cachedResponse) {
      return cachedResponse || fetch(event.request);
    })
  );
});