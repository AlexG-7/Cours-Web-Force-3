	</div><!-- /.container -->
	<footer>
		Amanda Thouvenin &ndash; Tous droits réservés &copy; <?= date('Y') ?>
	</footer>
	    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="<?= RACINE_SITE ?>js/bootstrap.min.js"></script>

    <?php
    if (!empty($javascripts)) :
      foreach ((array)$javascripts as $javascript) :
        echo '<script src="' . RACINE_JS . $javascript . '"></script>';
      endforeach;
    endif;
    ?>
    
  </body>
</html>