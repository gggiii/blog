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
                <?php
                global $app;
                $s = $app->stats->get();
                ?>
                <h2>Stats</h2>
                <table>
                    <tr>
                        <td>
                            Visits:
                        </td>
                        <td>
                            <?php echo $s['total'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Unique:
                        </td>
                        <td>
                            <?php echo $s['unique'] ?>
                        </td>
                    </tr>
                </table>
            </div>


            <div class="copyright">Copyright © 2002 - <?php echo date('Y') ?> Patrik Krivulčík | All rights reserved</div>
        </footer>


        <!--
                BOOTSTRAP
        -->
        <script src="<?php BASE_URL ?>assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php BASE_URL ?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!--
                CONDITIONAL HAMMER.JS INCLUDE
        -->
        <?php
        if (PAGE == 'x') :
        ?>
            <script src="<?php BASE_URL ?>assets/js/hammer.js"></script>
        <?php
        endif;
        ?>

        <!--
                CONDITIONAL FLICKITY INCLUDE
        -->
        <?php
        if (PAGE == 'x') :
        ?>
            <script src="<?php BASE_URL ?>assets/js/flickity.js"></script>
        <?php
        endif;
        ?>

        <script src="<?php BASE_URL ?>assets/js/main.js"></script>

        <!--
                DYNAMICSCRIPT INCLUDE BY PAGE
        -->
        <?php
        $scriptUrl = BASE_URL . 'assets/css/' . PAGE . '.js';
        if (file_get_contents($scriptUrl)) {
            echo ' <script src="' . $scriptUrl . '"></script>';
        }
        ?>
        </body>

        </html>