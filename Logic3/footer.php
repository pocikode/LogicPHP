<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#source" aria-expanded="false" aria-controls="source">
    Tampilkan Source
</button>
<br>
<br>
<div class="collapse" id="source">
	<div class="row">
		<div class="col">
			<h6>Source Code Functions</h6>
			<div class="card card-body">
				<?php show_source("../functions.php") ?>
			</div>
		</div>
		<div class="col">
			<h6>Source Code Logic</h6>
			<div class="card card-body">
				<?php show_source(basename($_SERVER['SCRIPT_FILENAME'], '?' . $_SERVER['QUERY_STRING'])) ?>
			</div>
		</div>
	</div>

</div>
</main>

<!-- JS -->
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>