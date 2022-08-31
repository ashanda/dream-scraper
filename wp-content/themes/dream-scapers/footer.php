<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dream-scapers
 */

?>
<div class="footer" style="background-image: url('<?php echo get_template_directory_uri(); ?>/inc/img/inner-banner.jpg');">
    <div class="row">
        <div class="col-sm-7">
            <div class="text-left">
                <img class="footer_logo" src="<?php echo get_template_directory_uri(); ?>/inc/img/logo.png" alt="">
                <span>Copyright @<script>document.write(new Date().getFullYear())</script> Dreamscaper Publishing</span>
            </div>
        </div>
        <div class="col-sm-5">
            <div class="text-right">
                <span>Developed by <a target="_blank" href="https://mozita.digital/">Mozita Digital</a></span>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/inc/js/script.js"></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->


<?php wp_footer(); ?>

</body>

</html>