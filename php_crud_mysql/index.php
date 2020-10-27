<?php include ("db.php")?>
<?php include ("includes/header.php")?>
<?php include ("includes/footer.php") ?>

<div class="container p-4">
  <div class="row">
    <div class="col-md-4">

      <?php
        if (isset($_SESSION['message'])) { ?>
          <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
          <?= $_SESSION['message']?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <?php session_unset(); } ?>

      <div class="card card-body">
        <form action="save_task.php" method="post">
          <div class="form-group">
            <input type="text" name="titulo" class="form-control" placeholder="Task Title" autofocus>
          </div>
          <div class="form-group">
            <textarea name="descripcion" rows="2" class="form-control" placeholder="Task description"></textarea>
          </div>
          <input type="submit" class="btn btn-success btn-block" name="gurdar_tarea" value="Guardar">
        </form>

      </div>
    </div>

    <div class="col-md-8">

    </div>
  </div>
</div>
