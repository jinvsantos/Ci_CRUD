<?php $this->load->view('includes/header');  ?>

	<div class="container">
		<br>
		<form method="post" action="<?php echo site_url('CrudController/update')?>/<?php echo $row->id; ?>">
			<div class="form-group">
					<label for="exampleInputEmail1">Texto</label>
					<input type="text" class="form-control" name="texto" value="<?php echo $row->texto ?>" aria-describedby="emailHelp">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Autor</label>
				<input type="text" class="form-control" name="autor" value="<?php echo $row->autor ?>" aria-describedby="emailHelp">
			</div>
			<div class="form-group">
					<label for="exampleInputEmail1">Tags</label>
					<input type="text" class="form-control" name="tag" value="<?php echo $row->tag ?>" aria-describedby="emailHelp">
			</div>
			<br>
			<button type="submit" class="btn btn-primary" value="save">Salvar</button>
			<a href="<?php echo site_url('CrudController/')?>"><button type="button" class="btn btn-danger">Voltar</button>
</a>
		</form>
	</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
