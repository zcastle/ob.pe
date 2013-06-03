<div id="body">
	<?php
		require_once 'protected/dbapdo.class.php';
		require_once 'protected/globals.class.php';
		$conn = new dbapdo();
		$global = new globals();
		$query = "SELECT id, no_categoria, no_imagen FROM categorias WHERE fl_activo = 1 ORDER BY nu_orden, no_categoria;";
		$stmt = $conn->prepare($query);
	    $stmt->execute();
	    $result = $stmt->fetchAll();
	?>
	<? foreach ($result as $row): ?>
		<div class="categoria">
			<a href="?mod=productos&cat=<? echo $row['id'] ?>">
				<? if ($row['no_imagen']): ?>
					<div class="imagen border-round"><img src="resources/images/categorias/<? echo $row['no_imagen'] ?>"></div>
				<? else: ?>
					<div class="imagen border-round"><img src="http://placehold.it/300x200/fff&text=No+Disponible"></div>
				<? endif; ?>
				<div class="titulo"><? echo $row['no_categoria'] ?></div>
			</a>
		</div>
	<? endforeach; ?>
</div>