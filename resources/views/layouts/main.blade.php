<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <!-- SEO Meta Tags -->
   <meta name="description" content="Tivo is a HTML landing page template built with Bootstrap to help you crate engaging presentations for SaaS apps and convert visitors into users.">
   <meta name="author" content="Inovatik">

   <!-- ICON -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

   <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
 <meta property="og:site_name" content="" /> <!-- website name -->
 <meta property="og:site" content="" /> <!-- website link -->
 <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
 <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
 <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
 <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
 <meta property="og:type" content="article" />

   <!-- Website Title -->
   <title>Tivo - SaaS App HTML Landing Page Template</title>
   
   <!-- Styles -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
   <link href="css/bootstrap.css" rel="stylesheet">
   <link href="css/fontawesome-all.css" rel="stylesheet">
   <link href="css/swiper.css" rel="stylesheet">
 <link href="css/magnific-popup.css" rel="stylesheet">
 <link href="css/styles.css" rel="stylesheet">
 
  </head>
  <body>
    @include('partials.navbar')
    <div class="container">
        @yield('container')
    </div>
    @include('partials.footer')
  </body>
</html>