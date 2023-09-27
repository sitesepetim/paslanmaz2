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
            <loc>{{ route('index') }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{ route('hakkimizda') }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{ route('kaliteler') }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{ route('201')  }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{ route('202')  }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{ route('303')  }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{ route('304')  }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{ route('304-dd') }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{ route('304-l') }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{ route('309') }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{  route('309-s') }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{  route('310-s') }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{  route('316') }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{  route('316-l') }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{  route('316-ti') }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{  route('321') }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{  route('409') }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{  route('420') }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{  route('430') }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{  route('431') }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{  route('439') }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{route('440-m') }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{ route('4418') }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{ route('630') }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        <url>
            <loc>{{ route('oztentitik') }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
         <url>
            <loc>{{ route('martensitik')  }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
         <url>
            <loc>{{ route('ferritik') }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
         <url>
            <loc>{{ route('14507')}}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
         <url>
            <loc>{{ route('urunler')  }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
         <url>
            <loc>{{ route('paslanmaz_celik')}}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ route('paslanmaz-mil-cubuk') }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ route('paslanmaz-kare') }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ route('paslanmaz-kosebent') }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ route('paslanmaz-kupeste') }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ route('paslanmaz-lama') }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ route('paslanmaz-profil') }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ route('paslanmaz-rulo') }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ route('paslanmaz-sac') }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ route('paslanmaz-serit') }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ route('paslanmaz-tel') }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ route('paslanmaz-boru') }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ route('paslanmaz-fitting') }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ route('paslanmaz-cekme') }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/desenler' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/endustriyel-desenler' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/baklava-desen' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/gozyasi-desen' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/ceta-desen' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/satine-desen' }}</loc>
            <lastmod>2023-03-03T12:27:12+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
          <url>
            <loc>{{ url().'/nokta-desen' }}</loc>
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
            <loc>{{ url().'/hizmetlerimiz' }}</loc>
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
