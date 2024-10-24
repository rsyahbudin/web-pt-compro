<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PT Setia Primatama Semesta adalah distributor kimia terkemuka yang menyediakan bahan kimia berkualitas tinggi untuk industri makanan, farmasi, dan manufaktur.">

    <link rel="icon" href="/assets/logo/logos.png" type="image/png">
    <title>PT Setia Primatama Semesta - Distributor Kimia Terpercaya</title>

    @vite('resources/css/app.css')

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "PT Setia Primatama Semesta",
            "url": "https://setiaprimatamas.com",
            "logo": "https://setiaprimatamas.com/assets/logo/logos.png",
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity-fade@2/flickity-fade.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

</head>

<body class="font-poppins text-cp-black">
    @yield('content')

    @stack('before-scripts')

    <!-- AOS SCRIPT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        // Function to initialize AOS
        function initAOS() {
            AOS.init({
                duration: 600,
                offset: 200,
                once: false
            });

            // Check if the device is desktop
            if (window.innerWidth >= 768) { // Adjust the breakpoint as needed
                window.addEventListener('scroll', () => {
                    AOS.refresh();
                });
            }
        }

        // Initialize AOS on page load
        document.addEventListener('DOMContentLoaded', initAOS);

        // Re-initialize AOS on window resize to handle responsive behavior
        window.addEventListener('resize', initAOS);
    </script>

    @stack('after-scripts')
</body>

</html>