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
    <table width="100%">
        <tr>
            <td>
                <div class="text-left">
                    <img class="footer_logo" src="<?php echo get_template_directory_uri(); ?>/inc/img/logo.png" alt="">
                    <span>Copyright @<script>
                            document.write(new Date().getFullYear())
                        </script> Dreamscaper Publishing</span>
                </div>
            </td>
            <td style="display: none;">
                <div class="text-end">
                    <span>Developed by <a target="_blank" href="https://mozita.digital/">Mozita Digital</a></span>
                </div>
            </td>
        </tr>
    </table>


    <!-- Optional JavaScript; choose one of the two! -->
   

    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <?php /*
    <script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/inc/js/script.js"></script>
    */?>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->


    <?php wp_footer(); ?>
            <!--Start of Tawk.to Script-->
                <script type="text/javascript">
                var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
                (function(){
                var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                s1.async=true;
                s1.src='https://embed.tawk.to/63121e3154f06e12d892640d/1gbvcbt7r';
                s1.charset='UTF-8';
                s1.setAttribute('crossorigin','*');
                s0.parentNode.insertBefore(s1,s0);
                })();
                </script>
                <!--End of Tawk.to Script-->

    <script>
        window.addEventListener('load', () => { // wait to load the page
  setTimeout(() => {
    document.getElementById("preloader").style.display = 'none' // hide the loader after 3.5 seconds
     // hide the loader after 3.5 seconds 
  }, 3500)
    })
    </script>        
    </body>

    </html>
