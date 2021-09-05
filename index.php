<?php
/*require_once "header.php";
    require "header.php";
    include "/error.php";

    $arr = [9, 'p'];
    var_dump($arr);*/

require "header.php";
?>

<h1 class="main-title">Form-php</h1>
<main class="form-section">
    <?php
    require "my-form.php";
    phpinfo();

    print_r($_COOKIE)
    ?>
</main>
<section class="return">

</section>
<?php
require "footer.php";
?>
