<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8>
        <title>Testmenu</title>
        <link rel="stylesheet" type="text/css" href="../css/forme.css">
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <script src="https://www.google.com/recaptcha/api.js"></script>
    </head>
    <body>

    <div class="loader">
        <span class="lettre">C</span>
        <span class="lettre">H</span>
        <span class="lettre">A</span>
        <span class="lettre">R</span>
        <span class="lettre">G</span>
        <span class="lettre">E</span>
        <span class="lettre">M</span>
        <span class="lettre">E</span>
        <span class="lettre">N</span>
        <span class="lettre">T</span>
    </div>

       <?php include("loading.php"); ?>
       <?php include("menup.php"); ?>
       <?php include("accueil.php"); ?>
       <?php include("apropos.php"); ?>
       <?php include("competences.php"); ?>
       <?php include("experiences.php"); ?>
       <?php include("formations.php"); ?>
       <?php include("contact.php"); ?>
       <?php include("message.php"); ?>
       

       <script>
   function onSubmit(token) {
     document.getElementById("demo-form").submit();
   }
 </script>

        <!--<script>
            let stars = document.getElementById('stars');
            let moon = document.getElementById('moon');
            let mountains_behind = document.getElementById('mountains_behind');
            let text = document.getElementById('text');
            let btn = document.getElementById('btn');
            let mountains_front = document.getElementById('mountains_front');
            let header = document.querySelector('header');

            window.addEventListener('scroll', function(){
                let value = window.scrollY;
                star.style.left = value * 0.25 + 'px';
                moon.style.top = value * 1.05 + 'px';
                mountains_behind.style.top = value * 0.5 + 'px';
                mountains_front.style.top = value * 0 + 'px';
                text.style.marginRight = value * 4 + 'px';
                text.style.marginTop = value * 1.5 + 'px';
                btn.style.marginRight = value * 1.5 + 'px';
                header.style.top = value * 0.5 + 'px';
            })
        </script>-->
    </body>
</html>