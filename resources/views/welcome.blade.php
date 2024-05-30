<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry App</title>

    <!-- Tailwind Load and Config -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>

    <!-- Font Setup -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- JQUERY Setup -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Custom Styling -->
    <style>
        * {
            font-family: "Montserrat", Helvetica, sans-serif !important;
        }

        .carousel-container {
            position: relative;
            overflow: hidden;
            width: 100%;
            height: 100vh;
            z-index: 1;
        }

        .screen {
            position: absolute;
            width: 100%;
            height: 100%;
            left: 100%;
            /* Start off-screen to the right */
            display: none;
            /* Initially hidden */
        }

        .screen.active {
            display: block;
            /* Show the active screen */
            left: 0;
            /* Make sure it's in the viewport */
        }

        .dots-container {
            position: fixed;
            bottom: 100px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
            z-index: 2;
        }

        .dot {
            width: 10px;
            height: 10px;
            background-color: #ddd;
            border-radius: 50%;
            cursor: pointer;
        }

        .dot.active {
            background-color: #333;
        }

        .get-started-container {
            position: fixed;
            bottom: 8px;
            width: 100%;
            display: flex;
            justify-content: center;
            z-index: 2;
        }

        .get-started-button {
            width: 100%;
            max-width: 300px;
            background-color: #0ea5e9;
            /* bg-sky-500 */
            color: white;
            font-weight: bold;
            padding: 16px 32px;
            border-radius: 8px;
            text-align: center;
            text-decoration: none;
        }
    </style>
</head>
<!-- This Page use Tailwind utility classes -->

<body>
    <div class="get-started-container">
        <a href="/login" class="get-started-button">Get Started</a>
    </div>

    <!-- Screen 1 -->
    <div class="w-full h-screen flex flex-col justify-between items-center px-4 py-8" id="screen-1">
        <a href="" class="font-bold">
            by ADJ
        </a>
        <a href="">
            <img src="/image/Logo.png" alt="logo" />
        </a>
        <span>&nbsp;</span>
    </div>

    <!-- Carousel Screens -->
    <div class="carousel-container">
        <!-- Screen 2 -->
        <div class="screen w-full h-screen flex flex-col items-center px-8 py-12 z-10" id="screen-2">
            <img src="/image/mencuci.png" alt="wawasuh" class="mx-auto" />
            <h3 class="font-bold text-lg mb-3 text-center">No Need to Wash It Yourself</h3>
            <p class="leading-normal text-sm text-center">With All Fresh Laundry on your mobile, there is the best laundry that will wash your clothes.</p>
        </div>

        <!-- Screen 3 -->
        <div class="screen w-full h-screen flex flex-col items-center px-8 py-12 z-10" id="screen-3">
            <img src="/image/mencuci.png" alt="wawasuh" class="mx-auto" />
            <h3 class="font-bold text-lg mb-3 text-center">Your activities will be smoother</h3>
            <p class=" leading-normal text-sm text-center">Without having to think about laundry piling up. With All Fresh Laundry, all your laundry problems will be solved.</p>
        </div>

        <!-- Screen 4 -->
        <div class="screen w-full h-screen flex flex-col items-center px-8 py-12 z-10" id="screen-4">
            <img src="/image/mencuci.png" alt="wawasuh" class="mx-auto" />
            <h3 class="font-bold text-lg mb-3 text-center">Directly on your phone</h3>
            <p class="text-center leading-normal text-sm">With one click, you can wash your clothes cleanly, neatly and fragrantly.</p>
        </div>
    </div>

    <div class="dots-container">
        <div class="dot active" data-screen="#screen-2"></div>
        <div class="dot" data-screen="#screen-3"></div>
        <div class="dot" data-screen="#screen-4"></div>
    </div>

    <script>
        $(document).ready(() => {
            // Function to update dots
            function updateDots(currentIndex) {
                $('.dot').removeClass('active');
                $('.dot').eq(currentIndex).addClass('active');
            }

            // Function to show screen with slide effect
            function showScreen(currentScreen, nextScreen, duration, callback) {
                $(currentScreen).animate({
                    left: '-100%'
                }, duration, () => {
                    $(currentScreen).hide().removeClass('active');
                });
                $(nextScreen).css('left', '100%').show().animate({
                    left: '0'
                }, duration, () => {
                    $(nextScreen).addClass('active');
                    if (callback) callback();
                });
            }

            // Function to run the carousel
            function runCarousel() {
                const screens = ['#screen-2', '#screen-3', '#screen-4'];
                let currentIndex = 0;

                function showNextScreen() {
                    const currentScreen = screens[currentIndex];
                    const nextIndex = (currentIndex + 1) % screens.length;
                    const nextScreen = screens[nextIndex];

                    showScreen(currentScreen, nextScreen, 1000, () => {
                        currentIndex = nextIndex;
                        updateDots(currentIndex);
                        setTimeout(showNextScreen, 4000); // 4 seconds visible
                    });
                }

                setTimeout(showNextScreen, 4000); // 4 seconds visible
            }

            // Initial fade out of screen-1 and fade in of screen-2
            $('#screen-1').fadeOut(2000, () => {
                $('#screen-2').css('left', '0').addClass('active').fadeIn(2000, () => {
                    runCarousel(); // Start the carousel after the initial transition
                });
            });

            // Dot click event to navigate screens
            $('.dot').click(function() {
                const index = $('.dot').index(this);
                if (index !== currentIndex) {
                    const currentScreen = screens[currentIndex];
                    const nextScreen = screens[index];
                    showScreen(currentScreen, nextScreen, 1000, () => {
                        currentIndex = index;
                        updateDots(currentIndex);
                    });
                }
            });
        });
    </script>
</body>

</html>