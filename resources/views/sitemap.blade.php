<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($posts as $post)
        <url>
            <loc>{{ url() }}{{ $post->url }}</loc>
            <lastmod>{{ $post->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>

    @endforeach

        <url>
            <loc>{{ url() }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{ url().'/hakkimizda' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{ url().'/kaliteler' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{ url().'/kaliteler/201-paslanmaz-celik' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{ url().'/kaliteler/202-paslanmaz-celik' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{ url().'/kaliteler/303-paslanmaz-celik' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{ url().'/kaliteler/304-paslanmaz-celik' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{ url().'/kaliteler/304-ddq-paslanmaz-celik' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{ url().'/kaliteler/304-l-paslanmaz-celik' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{ url().'309-paslanmaz-celik' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{ url().'309-s-paslanmaz-celik' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{ url().'310-s-paslanmaz-celik' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{ url().'316-paslanmaz-celik' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{ url().'316-l-paslanmaz-celik' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{ url().'/kaliteler/316-ti-paslanmaz-celik' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{ url().'/kaliteler/321-paslanmaz-celik' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{ url().'/kaliteler/409-paslanmaz-celik' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{ url().'/kaliteler/420-paslanmaz-celik' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{ url().'/kaliteler/430-paslanmaz-celik' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{ url().'/kaliteler/431-paslanmaz-celik' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{ url().'/kaliteler/439-paslanmaz-celik' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{ url().'/kaliteler/440-m-paslanmaz-celik' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{ url().'/kaliteler/4418-paslanmaz-celik' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{ url().'/kaliteler/630-paslanmaz-celik' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{ url().'/kaliteler/ostenitik-paslanmaz-celik' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
         <url>
            <loc>{{ url().'/kaliteler/martensitik-paslanmaz-celik' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
         <url>
            <loc>{{ url().'/kaliteler/ferritik-paslanmaz-celik' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
         <url>
            <loc>{{ url().'/kaliteler/14507-paslanmaz-celik' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
         <url>
            <loc>{{ url().'/urunler }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
         <url>
            <loc>{{ url().'/urunler }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
         <url>
            <loc>{{ url().'/urunler/paslanmaz-celik }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/urunler/paslanmaz-mil-cubuk }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/urunler/paslanmaz-kare-profil }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/urunler/paslanmaz-tel }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/urunler/paslanmaz-lama }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/urunler/paslanmaz-fitting }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/urunler/paslanmaz-kupeste }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/urunler/paslanmaz-kosebent }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/urunler/paslanmaz-profil }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/urunler/paslanmaz-boru }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/urunler/paslanmaz-sac }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/urunler/paslanmaz-rulo }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/urunler/paslanmaz-serit }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/urunler/paslanmaz-cekme-boru }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/desenler }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/endustriyel-desenler }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/baklava-desen }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/gozyasi-desen }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/ceta-desen }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/satine-desen }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/nokta-desen }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/kare-desen' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url() }}hizmetlerimiz</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>

          <url>
            <loc>{{ url().'/hizmet/paslanmaz-celik-taslama' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/hizmet/paslanmaz-celik-dilme' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/hizmet/paslanmaz-celik-lazer-kesim' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/agirlik-hesaplama' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/paslanmaz-boru-agirlik-hesaplama' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/paslanmaz-cubuk-agirlik-hesaplama' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/paslanmaz-kosebent-agirlik-hesaplama' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/paslanmaz-lama-agirlik-hesaplama' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/paslanmaz-sac-agirlik-hesaplama' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/paslanmaz-kutu-profil-agirlik-hesaplama' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/paslanmaz-kare-profil-agirlik-hesaplama' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/fiyat-listesi' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/fiyat-listesi/304-sac-fiyat-listesi' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/fiyat-listesi/316-sac-fiyat-listesi' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/fiyat-listesi/430-sac-fiyat-listesi' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/fiyat-listesi/309-sac-fiyat-listesi' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/fiyat-listesi/310-sac-fiyat-listesi' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/fiyat-listesi/304-boru-fiyat-listesi' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/fiyat-listesi/304-dikdortgen-fiyat-listesi' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/fiyat-listesi/304-cubuk-fiyat-listesi' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/fiyat-listesi/316-cubuk-fiyat-listesi' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/fiyat-listesi/304-lama-fiyat-listesi' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/fiyat-listesi/304-kose-fiyat-listesi' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/iletisim' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
</urlset>
