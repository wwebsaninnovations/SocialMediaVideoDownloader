<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Video Downloader</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <main>
        <div class="header">
            <div class="header-container">
                <div class="logo">
                    <img src="{{ asset('assets/site_logo.png')}}" alt="site_logo">
                </div>
                <div class="annoucment-panel">
                    <h4 class="text yt">Youtube Video Downloader</h4>
                    <h4 class="text fb">Facebook Video Downloader</h4>
                    <h4 class="text insta">Instagram Video Downloader</h4>
                </div>
            </div>
        </div>
        <div class="container">
            
            <div class="middle_content">
                <h2>Free Online Video Downloader - Download Video From Link</h2>
                <div class="social-logos">
                    <a href="/yTDl" class="social-icons-text yt_section">
                        <img src="{{ asset('assets/youtube_icon.png')}}" alt="youtube">
                        <h3>Video Downloader</h3>
                    </a>
                    <a href="/facebookuploader" class="social-icons-text fb_section">
                        <img src="{{ asset('assets/facebook_icon.png')}}" alt="facebook">
                        <h3>Video Downloader</h3>
                    </a>
                    <a href="/instagramuploader" class="social-icons-text insta_section">
                        <img src="{{ asset('assets/insta_logo_icon.png')}}" alt="instagram">
                        <h3>Video Downloader</h3>
                    </a>
                </div>
            </div>
           
        </div>
    </main> 
    <!-- jquery cdn  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- slick js  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/script.js')}}"></script>
</body>
</html>
