	</div><!-- /.container -->
	<footer>
		GL. - Plan du site (c) 2018
	</footer>
	    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../jquery.min.js"></script>
    <script src="<?= RACINE_SITE ?>js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <?php
    if (!empty($javascripts)) :
        foreach ((array)$javascripts as $javascript) :
            echo '<script src="' . RACINE_JS . $javascript . '"></script>';
        endforeach;
    endif;
    ?>
  </body>
</html>