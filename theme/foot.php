<footer>
         <p>footer data</p>
</footer>  

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/assets/js/lib/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="/assets/js/build/main.js"></script>
        <?php
        if(isset($pageJS) && $pageJS != ""){
            echo "<script href=\"assets/js/".$pageJS.".js\">";
        }
        ?>
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>