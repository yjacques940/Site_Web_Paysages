<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a responsive photo gallery.">
    <title>Photos de paysages</title>
    
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
    
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-old-ie-min.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">
    <!--<![endif]-->
    
    
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="css/layouts/gallery-old-ie.css">
        <![endif]-->
        <!--[if gt IE 8]><!-->
            <link rel="stylesheet" href="css/layouts/gallery.css">
        <!--<![endif]-->
</head>
<body>
<div>
    <div class="header">
        <div class="pure-menu pure-menu-horizontal">
            <a class="pure-menu-heading" href="">Les plus populaires</a>

            <ul class="pure-menu-list">
                <li class="pure-menu-item pure-menu-selected"><a href="#" class="pure-menu-link">Se connecter</a></li>
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">S'inscrire</a></li>
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Toutes les images</a></li>
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Ajouter une image</a></li>
            </ul>
        </div>
    </div>

    <div class="pure-u-1 form-box">
        <div class="text-box pure-u-1 pure-u-md pure-u-lg">
            <div class="l-box">
                <div class="photo-box pure-u-1 pure-u-md-1-3 pure-u-lg-1-3">
                    <h1 class="text-box-head">Accueil</h1>
                    <p class="text-box-subhead">Voici les 10 images les plus populaires</p>
                </div>
            </div>
        </div>

        <!-- photo -->

        <div class="photo-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
            <a href="http://www.nilssonlee.se/">
                <img src="http://24.media.tumblr.com/23e3f4bb271b8bdc415275fb7061f204/tumblr_mve3rvxwaP1st5lhmo1_1280.jpg"
                     alt="City">
            </a>
            <aside class="photo-box-caption">
                <span>
                    by <a href="http://www.nilssonlee.se/">Jonas Nilsson Lee</a>
                </span>
            </aside>
        </div>
        <!-- photo -->

        <div class="photo-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
                <img class ="imageContainer"src="http://24.media.tumblr.com/ac840897b5f73fa6bc43f73996f02572/tumblr_mrraat0H431st5lhmo1_1280.jpg"
                     alt="Flowers">
            <aside class="photo-box-caption">
                <span>
                    by <a href="http://www.flickr.com/photos/rulasibai/">Rula Sibai</a>
                </span>
            </aside>
        </div>
        <!-- photo -->

        <div class="photo-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
            <a href="http://www.flickr.com/photos/charliefoster/">
                <img src="http://24.media.tumblr.com/e100564a3e73c9456acddb9f62f96c79/tumblr_mufs8mix841st5lhmo1_1280.jpg"
                     alt="Bridge">
            </a>
            <aside class="photo-box-caption">
                <span>
                    by <a href="http://www.flickr.com/photos/charliefoster/">Charlie Foster</a>
                </span>
            </aside>
        </div>
        <!-- photo -->

        <div class="photo-box photo-box-thin pure-u-1 pure-u-lg-1-3">
            <a href="https://www.flickr.com/photos/82955120@N05/12024271573/in/photolist-jjxx28-f2vns5-jjw3rg-phetyV-djcGV4-7TBwup-7DxDnn-d4c1eC-aYoN8H-dBd8UG-ayQR7Z-8yhyLk-4nTgvd-dGtHuM-6WHtpP-9Dz8tA-gtnVfQ-rkCwz9-aYCE1B-hnK3Xs-axv6P4-pFPBdL-9vFwzg-afJk9N-dd3EJJ-oF1Nc2-aYoMCx-xojot-4Ypyo9-6BxaC2-6ybPn5-HSvt5-asaoZL-dd3CtM-9RJXk3-HSuZp-fe9yXi-7irigF-pgqPwH-9QQ2SU-dd3C2T-ccB6t5-fhtH3c-odGZC3-a4ppMF-ohvnyp-uiUswa-uYhWFR-6Cb4M6-5GoD9y">
                <img src="https://c2.staticflickr.com/4/3676/12024271573_d266422362_h.jpg"
                     alt="Balloons">
            </a>
            <aside class="photo-box-caption">
                <span>
                    by <a href="https://www.flickr.com/photos/82955120@N05/12024271573/in/photolist-jjxx28-f2vns5-jjw3rg-phetyV-djcGV4-7TBwup-7DxDnn-d4c1eC-aYoN8H-dBd8UG-ayQR7Z-8yhyLk-4nTgvd-dGtHuM-6WHtpP-9Dz8tA-gtnVfQ-rkCwz9-aYCE1B-hnK3Xs-axv6P4-pFPBdL-9vFwzg-afJk9N-dd3EJJ-oF1Nc2-aYoMCx-xojot-4Ypyo9-6BxaC2-6ybPn5-HSvt5-asaoZL-dd3CtM-9RJXk3-HSuZp-fe9yXi-7irigF-pgqPwH-9QQ2SU-dd3C2T-ccB6t5-fhtH3c-odGZC3-a4ppMF-ohvnyp-uiUswa-uYhWFR-6Cb4M6-5GoD9y">Nicolas Raymond</a>
                </span>
            </aside>
        </div>
        <!-- photo -->

        <div class="photo-box photo-box-thin pure-u-1 pure-u-md-1-3">
            <a href="http://twitter.com/iBoZR">
                <img src="http://25.media.tumblr.com/95c842c76d60b7bc982d92c76216d037/tumblr_mx3tnm96k81st5lhmo1_1280.jpg"
                     alt="Rain Drops">
            </a>
            <aside class="photo-box-caption">
                <span>
                    by <a href="http://twitter.com/iBoZR">Thanun Buranapong</a>
                </span>
            </aside>
        </div>

        <!-- photo -->

        <div class="photo-box photo-box-thin pure-u-1 pure-u-md-1-3">
            <a href="http://twitter.com/iBoZR">
                <img src="http://25.media.tumblr.com/95c842c76d60b7bc982d92c76216d037/tumblr_mx3tnm96k81st5lhmo1_1280.jpg"
                     alt="Rain Drops">
            </a>
            <aside class="photo-box-caption">
                <span>
                    by <a href="http://twitter.com/iBoZR">Thanun Buranapong</a>
                </span>
            </aside>
        </div>

        <!-- photo -->

        <div class="photo-box photo-box-thin pure-u-1 pure-u-md-1-3">
            <a href="http://twitter.com/iBoZR">
                <img src="http://25.media.tumblr.com/95c842c76d60b7bc982d92c76216d037/tumblr_mx3tnm96k81st5lhmo1_1280.jpg"
                     alt="Rain Drops">
            </a>
            <aside class="photo-box-caption">
                <span>
                    by <a href="http://twitter.com/iBoZR">Thanun Buranapong</a>
                </span>
            </aside>
        </div>

        <!-- photo -->

        <div class="photo-box photo-box-thin pure-u-1 pure-u-md-1-3">
            <a href="http://twitter.com/iBoZR">
                <img src="http://25.media.tumblr.com/95c842c76d60b7bc982d92c76216d037/tumblr_mx3tnm96k81st5lhmo1_1280.jpg"
                     alt="Rain Drops">
            </a>
            <aside class="photo-box-caption">
                <span>
                    by <a href="http://twitter.com/iBoZR">Thanun Buranapong</a>
                </span>
            </aside>
        </div>

        <!-- photo -->

        <div class="photo-box photo-box-thin pure-u-1 pure-u-md-1-3">
            <a href="http://twitter.com/iBoZR">
                <img src="http://25.media.tumblr.com/95c842c76d60b7bc982d92c76216d037/tumblr_mx3tnm96k81st5lhmo1_1280.jpg"
                     alt="Rain Drops">
            </a>
            <aside class="photo-box-caption">
                <span>
                    by <a href="http://twitter.com/iBoZR">Thanun Buranapong</a>
                </span>
            </aside>
        </div>
        <!-- photo -->

        <div class="photo-box pure-u-1 pure-u-md-1-3">
            <a href="http://www.goodfreephotos.com/">
                <img src="http://25.media.tumblr.com/88b812f5f9c3d7b83560fd635435d538/tumblr_mx3tlblmY21st5lhmo1_1280.jpg"
                     alt="Port">
            </a>
            <aside class="photo-box-caption">
                <span>
                    by <a href="http://www.goodfreephotos.com/">Yinan Chen</a>
                </span>
            </aside>
        </div>
    </div>

        <!--<div class="pure-u-1 form-box">
            <div class="l-box">
                <h2>Envoyer une photo</h2>

                <form class="pure-form">
                    <input type="text" placeholder="Photo URL" required>
                    <button type="submit" class="pure-button">Envoyer</button>
                </form>
            </div>
        </div>-->

        <!--<div class="pure-u-1">
            <div class="l-box">
                <h2>Creating a Photo Gallery Layout</h2>

                <p>
                    This page shows how to make a photo gallery using <a href="">Pure Grids</a>. Using Pure, we can create interesting layouts such as this photo gallery. This layout is fully responsive. We've added a bit of custom media queries on top of the responsive grid provided by Pure.
                </p>

                <p>
                    We've also taken advantage of <a href="">Pure Forms</a> and <a href="">Pure Menus</a>. This example uses a form with the <code>pure-form</code> class name to create an inline form. We use <a href="">Pure Buttons</a> for the button styling.
                </p>
            </div>
        </div>-->

        <div class="footer">
            Copyright © 2018
        </div>
</div>




</body>
</html>
