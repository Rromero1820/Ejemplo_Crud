<?php

include('db.php');

if (isset($_POST['save_task'])) {
  $title = $_POST['title'];
  $description = $_POST['description'];

  $query = "INSERT INTO tareas(titulo, descripcion) VALUES ('$title', '$description')";
  $resultado = mysqli_query($conn, $query);

  if (!$resultado) {
    die("Fallo la consulta");
  }

  $_SESSION['message']= 'Tarea guardada satisfactoriamente';
  $_SESSION['message_type']='success';

  header("location: index.php");
}

 ?>
