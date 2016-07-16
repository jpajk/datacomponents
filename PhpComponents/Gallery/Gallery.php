<div id="<?php print $collection->id; ?>}" class="<?php print $collection->class; ?>">
	<?php foreach ($collection as $key => $item): ?>
		<?php include(__DIR__ . './GalleryItem.php'); ?>
	<?php endforeach ?>				
</div>
		