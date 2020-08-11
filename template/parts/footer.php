        <footer>
            <div class="logo">
                <a>Blog.</a>

            </div>

            <div class="contact">
                <a href="#">Home</a>
                <a href="#">Articles</a>
                <a href="#">Contact</a>
            </div>
            <div class="stats">

            </div>


            <div class="copyright">Copyright © 2002 - <?php echo date('Y') ?> Patrik Krivulčík | All rights reserved</div>
        </footer>
   

        <script src="<?php echo ROOT_URL ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo ROOT_URL ?>assets/js/main.js"></script>

        <!--
                DYNAMICSCRIPT INCLUDE BY PAGE
        -->
        <?php
        $scriptUrl = ROOT_URL . 'assets/js/' . PAGE . '.js';
        if (file_exists($scriptUrl)) {
            echo ' <script src="' . $scriptUrl . '"></script>';
        }
        ?>
        </body>

        </html>