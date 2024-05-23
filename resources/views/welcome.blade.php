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
            *{
                font-family: "Montserrat", Helvetica, sans-serif !important;
            }
        </style>
    </head>
    <!-- This Page use Tailwind utility classes -->
    <body>
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

        <!-- Screen 2 -->
        <div class="w-full h-screen opacity-0 flex flex-col items-center px-8 py-12 z-10" id="screen-2">
            <img src="/image/mencuci.png" alt="wawasuh" />
            <h3 class="font-bold text-lg mb-3">Tidak Perlu Mencuci Sendiri</h3>
            <p class="text-justify leading-normal text-sm"> Dengan All Fresh Laundry, yang ada di handphonemu, tersedia laundry terbaik yang akan mencuci pakaianmu.</p>
        </div>

        <div class="fixed bottom-8 flex w-screen justify-center items-center px-4">
            <a href="/login" class="w-full bg-sky-500 px-8 py-4 text-white font-bold rounded-md flex items-center justify-center">Get Started</a>
        </div>
        <script>
            $(document).ready(() => {
                $('#screen-1').animate({
                    opacity: "-=1"
                }, 2000, function() {
                    $('#screen-1').remove();
                });
                $('#screen-2').animate({
                    opacity: "+=1"
                }, 4000).delay(2000);
            })
        </script>
    </body>
</html>
