<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    include("./components/head.php");
  ?>
</head>

<body>
    <div class="container-fluid bg-white p-0">
       
        <div class="container-fluid position-relative p-0">

        <?php
                include("./components/header.php");
                include("./components/hero.php");
                ?>

        </div>

       
        <?php
        include("./components/aboutus.php");
        include("./components/fact.php");
        include("./components/servicearea.php");
        include("./components/people.php");
        include("./components/newsletter.php");
        include("./components/footer.php");
        ?>

    </div>
    
    <?php
        include("./components/script.php");
    ?>
   
</body>

</html>