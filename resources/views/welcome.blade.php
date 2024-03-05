<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UI Design</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .card {
      margin-bottom: 20px;
    }
    img, svg{
        display: none;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
   <div class="row">
    <div class="col d-flex justify-content-center pb-4">
        <div class="d-flex flex-row">
            <h5>start time: 1.59</h5>
            <h5 class="mx-4">end time: 2.22</h5>
        </div>
    </div>
</div>

    <div class="row">
      <div class="col-md-3">
        <h2>Hi there! My name is Choton Chandra Bhowmik</h2>
        <p>
          I am currently working as a Junior Software Engineer at Shuttle. In my role as a Junior Software Engineer at Shuttle, I have been dedicated to front-end development, specializing in the creation of dynamic user interfaces through the proficient use of Vue.js. My expertise extends to the skillful implementation of Tailwind CSS, Bootstrap frameworks, HTML, and CSS, all with the aim of enhancing design aesthetics and maintaining impeccable structuring and formatting of web content. My contributions have consistently aligned with Shuttle's commitment to delivering top-tier software solutions, reflecting a strong dedication to both technical excellence and the seamless user experience.
        </p>
      </div>
      <div class="col-md-9">
        <div class="row">
          @foreach ($posts as $post)
          <div class="col-md-4">
            <div class="card">
              <img src="{{ $post->image }}" class="card-img-top" alt="Blog Image">
              <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->description }}</p>
              </div>
            </div>
          </div>
          @endforeach

          {{ $posts->links() }}

          <h5 class="mt-5">repo link: https://github.com/chotonbhowmik/laravel-test</h5>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
