<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Christine_Steiner
 */

?>

</div>
    <div class="footer">
        <p><a href="#">www.christinesteiner.ch</a> | <a href="mailto:info@christinesteiner.ch">info@christinesteiner.ch</a> | <a href="tel:0041787883508">+ 41 78 788 35 08</a></p>
    </div>

    <script type="text/javascript">

        document.querySelector('.burger').addEventListener('click', function(){
            document.querySelector('.burger').classList.toggle('open');
            document.querySelector('ul#primary-menu').classList.toggle('open');
        })

    </script>

</body>
</html>
