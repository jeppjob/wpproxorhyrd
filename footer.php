<footer>
        <nav class="navbar navbar-expand-lg mx-lg-5">
			
            <ul id="footer" class="nav navbar-nav my-auto w-100 justify-content-start <?php echo get_theme_mod('footer_display','hidden'); ?>">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_theme_mod('footer_link_1','#');?>"><?php echo get_theme_mod('footer_text_1','About Us');?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_theme_mod('footer_link_2','#')?>"><?php echo get_theme_mod('footer_text_2','Contact Us');?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_theme_mod('footer_link_2','#')?>"><?php echo get_theme_mod('footer_text_3','Privacy Statement');?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_theme_mod('footer_link_2','#')?>"><?php echo get_theme_mod('footer_text_4','Terms and Conditions');?></a>
                </li>
            </ul>
            <p class="justify-content-end my-auto w-100 text-right"> 2019 PROXOR HYRD All Rights Reserved</p>
        </nav>
    </footer>
    <script>
    jQuery(function($) {
    $('.carousel').carousel()
});
    </script>
<?php wp_footer() ?>


</body>
</html>