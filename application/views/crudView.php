<?php $this->load->view('includes/header');  ?>

  <div class="container">			
		<br>
		<br>

				<!-- Button trigger modal -->
		<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
			Salvar Citação
		</button>
		
		<td>
		<a href="<?php echo site_url('CrudController/scrap');?>"><button type="button" class="btn btn-danger">Scrap</button></a>
		</td>


		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form method="post" action="<?php echo site_url('CrudController/create')?>">
							<div class="form-group">
								<label for="exampleInputEmail1">Texto</label>
								<input type="text" class="form-control" name="texto" aria-describedby="emailHelp">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Autor</label>
								<input type="text" class="form-control" name="autor" aria-describedby="emailHelp">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Tags</label>
								<input type="text" class="form-control" name="tag" aria-describedby="emailHelp">
							</div>
							<br>
							<button type="submit" class="btn btn-primary" value="save">Salvar</button>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
					</div>
				</div>
			</div>
		</div>




		<table class="table">
			<thead>
				<tr>
					<th scope="col">Texto</th>
					<th scope="col">Autor</th>
					<th scope="col">Tags</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($result as $row) {?>
				<tr>
					<td><?php echo $row->texto; ?></td>
					<td><?php echo $row->autor; ?></td>
					<td><?php echo $row->tag; ?></td>

					<td><a href="<?php echo site_url('CrudController/edit');?>/<?php echo $row->id;?>"><button type="button" class="btn btn-warning">Editar</button></a>  
					<a href="<?php echo site_url('CrudController/delete');?>/<?php echo $row->id;?>"><button type="button" class="btn btn-danger">Excluir</button></a>
				</td>
				</tr>
				<?php }?>
			</tbody>
		</table>
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
