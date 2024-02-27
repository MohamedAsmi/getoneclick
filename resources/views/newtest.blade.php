<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Carousel Slider</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #000;
        }

        .carousel-item {
            height: 100vh;
            min-height: 300px;
            position: relative;
        }

        .carousel-item video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .carousel-caption {
            position: absolute;
            bottom: 10%;
            left: 10%;
            z-index: 10;
            color: #fff;
            text-shadow: 2px 2px 4px #000000;
            width: 80%;
            /* Adjust the width as needed */
        }

        .carousel-caption h5,
        .carousel-caption p {
            margin: 0;
            padding: 0;
            font-size: 1.5vw;
        }

        .carousel-indicators {
            bottom: 10px;
        }

        .carousel-indicators li {
            background-color: #fff;
            border: 1px solid #fff;
        }

        .carousel-indicators .active {
            background-color: #000;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            filter: invert(100%);
        }
    </style>
</head>

<body>

    <div id="videoCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <video id="video1" autoplay muted>
                    <source src="{{asset('assets/videos/avatar_air_bender.mp4')}}" type="video/mp4">
                </video>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Avatar- The Last Airbender</h5>
                    <p>Official Teaser - Netflix</p>
                </div>
            </div>
            <div class="carousel-item">
                <video id="video2" autoplay muted>
                    <source src="{{asset('assets/videos/blade.mp4')}}" type="video/mp4">
                </video>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Marvel’s Blade</h5>
                    <p>Announcement Trailer - The Game Awards 2023</p>
                </div>
            </div>
            <div class="carousel-item">
                <video id="video3" autoplay muted>
                    <source src="{{asset('assets/videos/madame_web.mp4')}}" type="video/mp4">
                </video>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Madame Web</h5>
                    <p>Official Trailer</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#videoCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#videoCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        <ol class="carousel-indicators list-unstyled">
            <li data-bs-target="#videoCarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#videoCarousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#videoCarousel" data-bs-slide-to="2"></li>
        </ol>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var currentVideo;

        // Play the video when the slide is active
        $('#videoCarousel').on('slid.bs.carousel', function(e) {
            // Pause the current video
            if (currentVideo) {
                currentVideo.pause();
            }

            // Start the new video
            var video = $(e.relatedTarget).find('video')[0];
            if (video) {
                video.play();
                currentVideo = video;
            }
        });

        // When the video ends, go to the next slide
        $('#videoCarousel video').on('ended', function() {
            $('#videoCarousel').carousel('next');
        });

        // Stop the video when the slide is not active
        $('#videoCarousel').on('slide.bs.carousel', function(e) {
            var video = $(e.relatedTarget).find('video')[0];
            if (video) {
                video.pause();
            }
        });
    </script>
</body>

</html>
