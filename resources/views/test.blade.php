<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f8f9fa;
            color: #495057;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        .scroll-container {
            margin-top: 50px;
            white-space: nowrap;
            overflow: hidden;
            position: relative;
            width: 100%;
            height: 400px;
        }

        .scroll-content {
            display: flex;
            animation: scroll-animation 50s linear infinite;
            animation-delay: 2s;
        }

        .scroll-content img {
            height: 250px;
            width: 400px;
            display: inline-block;
            vertical-align: top;
            margin-right: 15px;
            margin-left: 15px;
            border-radius: 15px;
        }

        @keyframes scroll-animation {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(calc(-365px * 8));
            }
        }

        .bg-grey {
            background-color: #f9f9fa;
        }

        .testimonial-section {
            text-align: center;
            padding: 100px 0;
        }

        .testimonial-quote {
            font-size: 1.5rem;
            color: #007bff;
            margin-bottom: 30px;
        }

        .testimonial-author {
            font-size: 1.25rem;
            font-weight: bold;
        }

        .testimonial-carousel .carousel-indicators {
            position: static;
            margin-top: 20px;
        }

        .testimonial-carousel .carousel-indicators li {
            background-color: #007bff;
            width: 10px;
            height: 10px;
            border-radius: 100%;
            display: inline-block;
        }

        .testimonial-carousel .carousel-indicators .active {
            background-color: #495057;
        }

        .testimonial-carousel .carousel-item {
            padding: 0;
        }

        .testimonial-carousel .carousel-item img {
            border-radius: 50%;
            width: 80px;
            height: 80px;
            object-fit: cover;
            display: inline-block;
            margin: 0 10px;
        }

        .testimonial-section {
            text-align: center;
            padding: 100px 0;
        }

        .testimonial-carousel .carousel-inner {
            display: flex;
            flex-wrap: nowrap;
            /* Display items in a single row */
            overflow-x: auto;
            /* Enable horizontal scrolling */
            justify-content: center;
        }

        .testimonial-carousel .carousel-item {
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-right: 10px;
            /* Add some right margin for spacing */
        }

        /* Add margin to the last item to avoid overflow */
        .testimonial-carousel .carousel-item:last-child {
            margin-right: 0;
        }

        .testimonial-carousel .carousel-item img {
            border-radius: 50%;
            width: 80px;
            height: 80px;
            object-fit: cover;
            margin: 0 10px;
        }

        .testimonial-carousel .carousel-item img.main-image {
            width: 100px;
            height: 100px;
        }

        .testimonial-quote,
        .testimonial-author {
            display: none;
        }

        .review {
            margin-top: 50px;
        }

        .review_message h3 {
            margin: 0;
        }

        .reviewer_name h5 {
            margin: 10px 0;
        }

        .testimonial-carousel .carousel-indicators {
            position: static;
            margin-top: 20px;
            visibility: hidden;
        }

        .testimonial-carousel .carousel-indicators li {
            background-color: #007bff;
            width: 10px;
            height: 10px;
            border-radius: 100%;
            display: inline-block;
        }

        .testimonial-carousel .carousel-indicators .active {
            background-color: #495057;
        }
    </style>
</head>

<body>
    <div class="scroll-container">
        <div class="scroll-content" id="imageLoop">
            <script>
                function createImageSet() {
                    for (let i = 1; i <= 4; i++) {
                        if (i % 2 == 0) {
                            document.write(`<img src="https://placehold.co/400x300.png?text=${i}" alt="Image ${i}" style="margin-top:40px">`);
                        } else {
                            document.write(`<img src="https://placehold.co/400x300.png?text=${i}" alt="Image ${i}" style="margin-bottom:40px">`);
                        }
                    }
                }

                for (let j = 0; j < 100; j++) {
                    createImageSet();
                }
            </script>
        </div>
    </div>
    <section id="media-banner" class="">
        <div class="">
            <div class="container-fluid">
                <div class="row">
                    <div class="px-3 offset-md-1 col-md-2">
                        <img alt="BBC" title="BBC" data-src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/bbc.png!d=9gOhO" data-srcset="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/bbc.png!d=9gOhO 1x, https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/bbc.png!d=dZYfdp 2x" class="lazy loaded" srcset="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/bbc.png!d=9gOhO 1x, https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/bbc.png!d=dZYfdp 2x" src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/bbc.png!d=9gOhO" data-was-processed="true">
                    </div>
                    <div class="px-3 col-md-2">
                        <img alt="Daily Mail" title="Daily Mail" data-src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/daily-mail.png!d=D6ZU1" data-srcset="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/daily-mail.png!d=D6ZU1 1x, https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/daily-mail.png!d=n0mf4k 2x" class="lazy loaded" srcset="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/daily-mail.png!d=D6ZU1 1x, https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/daily-mail.png!d=n0mf4k 2x" src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/daily-mail.png!d=D6ZU1" data-was-processed="true">
                    </div>
                    <div class="px-3 col-md-2">
                        <img alt="The Guardian" title="The Guardian" data-src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/the-guardian.png!d=yKyi0" data-srcset="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/the-guardian.png!d=yKyi0 1x, https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/the-guardian.png!d=lBXSzR 2x" class="lazy loaded" srcset="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/the-guardian.png!d=yKyi0 1x, https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/the-guardian.png!d=lBXSzR 2x" src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/the-guardian.png!d=yKyi0" data-was-processed="true">
                    </div>
                    <div class="px-3 col-md-2">
                        <img alt="Harpers Bazaar" title="Harpers Bazaar" data-src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/harpers-bazaar.png!d=o8Yf3" data-srcset="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/harpers-bazaar.png!d=o8Yf3 1x, https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/harpers-bazaar.png!d=2PAf2y 2x" class="lazy loaded" srcset="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/harpers-bazaar.png!d=o8Yf3 1x, https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/harpers-bazaar.png!d=2PAf2y 2x" src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/harpers-bazaar.png!d=o8Yf3" data-was-processed="true">
                    </div>
                    <div class="px-3 col-md-2">
                        <img alt="Cosmopolitan" title="Cosmopolitan" data-src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/cosmopolitan.png!d=bebTX" data-srcset="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/cosmopolitan.png!d=bebTX 1x, https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/cosmopolitan.png!d=dMwUdN 2x" class="lazy loaded" srcset="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/cosmopolitan.png!d=bebTX 1x, https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/cosmopolitan.png!d=dMwUdN 2x" src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/cosmopolitan.png!d=bebTX" data-was-processed="true">
                    </div>
                    <div class="offset-md-1"></div>
                </div>
            </div>
        </div>
    </section>

    <div class="testimonial-section">
        <div id="testimonialCarousel" class="carousel slide testimonial-carousel" data-bs-ride="carousel" data-bs-interval="2000">
            <div class="carousel-inner">
                <!-- Testimonial 1 -->
                <div class="carousel-item" id="testimonial-1">
                    <img src="https://placehold.co/80x80?text=1" class="img-fluid" alt="Profile picture 1" />
                    <input type="hidden" class="testimonial-data" data-quote="I have used Bark twice now for two completely different services and I’ve had a fantastic experience both times!" data-author="Jayne">
                </div>
                <!-- Testimonial 2 -->
                <div class="carousel-item" id="testimonial-2">
                    <img src="https://placehold.co/80x80?text=2" class="img-fluid" alt="Profile picture 2" />
                    <input type="hidden" class="testimonial-data" data-quote="One of the most honest experiences I've had on the web, ever! I recommend Bark for searching for business professionals." data-author="Barend">
                </div>
                <!-- Testimonial 3 -->
                <div class="carousel-item" id="testimonial-3">
                    <img src="https://placehold.co/80x80?text=3" class="img-fluid" alt="Profile picture 3" />
                    <input type="hidden" class="testimonial-data" data-quote="Excellent service. They responded much faster than I had anticipated and I was left with a wide range of offers. Brilliant work, Bark!" data-author="Sunny">
                </div>
                <!-- Placeholder for the middle item, initially hidden -->
                <div class="carousel-item middle-image active" id="testimonial-placeholder">
                    <img src="https://placehold.co/100x100" class="img-fluid main-image" alt="Profile picture placeholder" />
                    <input type="hidden" class="testimonial-data" data-quote="" data-author="">
                </div>
                <!-- Testimonial 4 -->
                <div class="carousel-item" id="testimonial-4">
                    <img src="https://placehold.co/80x80?text=4" class="img-fluid" alt="Profile picture 4" />
                    <input type="hidden" class="testimonial-data" data-quote="Both companies that I responded to have been interactive and tended to my concerns and needs, and both were friendly and professional." data-author="Susan">
                </div>
                <!-- Testimonial 5 -->
                <div class="carousel-item" id="testimonial-5">
                    <img src="https://placehold.co/80x80?text=5" class="img-fluid" alt="Profile picture 5" />
                    <input type="hidden" class="testimonial-data" data-quote="Very quickly, had 4 replies. The guy from SJ driveways and landscapes was very efficient and friendly and the work was completed in a short time." data-author="Mr C Heaps">
                </div>
                <!-- Testimonial 6 -->
                <div class="carousel-item" id="testimonial-6">
                    <img src="https://placehold.co/80x80?text=6" class="img-fluid" alt="Profile picture 6" />
                    <input type="hidden" class="testimonial-data" data-quote="I found using Bark amazing. Posted a request and had 5 contacts within 30 minutes. Excellent service." data-author="Aidan">
                </div>
            </div>
            <div class="review row">
                <div class="review_message offset-md-2 col-md-8">
                    <h3></h3>
                </div>
                <div class="reviewer_name col-md-8 offset-md-2">
                    <h5></h5>
                </div>
            </div>
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
                <!-- The placeholder doesn't have an indicator -->
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carouselInner = document.querySelector('.testimonial-carousel .carousel-inner');
            const reviewMessage = document.querySelector('.review_message h3');
            const reviewerName = document.querySelector('.reviewer_name h5');
            const totalImages = document.querySelectorAll('.testimonial-carousel .carousel-item').length - 1;
            let middleIndex = Math.floor(totalImages / 2);

            function updateMiddleImage() {
                middleIndex = (middleIndex + 1) % totalImages;

                const middleImage = document.querySelector('.carousel-item.middle-image img');
                middleImage.src = `https://placehold.co/100x100?text=${middleIndex + 1}`;

                const testimonialData = document.getElementById(`testimonial-${middleIndex + 1}`);
                reviewMessage.innerText = testimonialData.querySelector('.testimonial-data').getAttribute('data-quote');
                reviewerName.innerText = testimonialData.querySelector('.testimonial-data').getAttribute('data-author');
            }

            // Set interval for automatic update
            setInterval(updateMiddleImage, 2000);

            // Call the function once on page load
            updateMiddleImage();
        });
    </script>
</body>

</html>