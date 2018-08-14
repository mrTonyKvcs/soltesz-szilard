<?xml version="1.0" encoding="UTF-8"?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

   <url>

      <loc>{{ route('pages.home') }}</loc>

      <lastmod>{{ $now }}</lastmod>

      <changefreq>monthly</changefreq>

      <priority>0.9</priority>

   </url>
   
   <url>

      <loc>{{ route('pages.about') }}</loc>

      <lastmod>{{ $now }}</lastmod>

      <changefreq>monthly</changefreq>

      <priority>0.9</priority>

   </url>
   
   <url>

      <loc>{{ route('pages.contact') }}</loc>

      <lastmod>{{ $now }}</lastmod>

      <changefreq>monthly</changefreq>

      <priority>0.9</priority>

   </url>
   
   <url>

      <loc>{{ route('pages.selfless-coaching') }}</loc>

      <lastmod>{{ $now }}</lastmod>

      <changefreq>monthly</changefreq>

      <priority>0.9</priority>

   </url>
   
   <url>

      <loc>{{ route('pages.organization') }}</loc>

      <lastmod>{{ $now }}</lastmod>

      <changefreq>monthly</changefreq>

      <priority>0.9</priority>

   </url>
   
   <url>

      <loc>{{ route('blog.index') }}</loc>

      <lastmod>{{ $now }}</lastmod>

      <changefreq>monthly</changefreq>

      <priority>0.9</priority>

   </url>

   @foreach ($blogs as $blog)
   <url>

   <loc>{{ route('blog.show', $blog->slug) }}</loc>

      <lastmod>{{ $now }}</lastmod>

      <changefreq>monthly</changefreq>

      <priority>0.9</priority>

   </url>
   @endforeach
   
   <url>

      <loc>{{ route('trainings.index') }}</loc>

      <lastmod>{{ $now }}</lastmod>

      <changefreq>monthly</changefreq>

      <priority>0.9</priority>

   </url>

   @foreach ($trainings as $training)
   <url>

   <loc>{{ route('trainings.show', $training->slug) }}</loc>

      <lastmod>{{ $now }}</lastmod>

      <changefreq>monthly</changefreq>

      <priority>0.9</priority>

   </url>
   @endforeach

</urlset> 
