<div class="row">
	<div class="col-md-12">
		<h3 class="page-header"><?= $album->titulo; ?></h3>
		<p><?= $album->descricao; ?></p>
		<p><?= mdate('%d/%m/%Y', strtotime($album->created)); ?></p>
	</div>
</div>
<div class="row" style="margin-bottom: 10px;">
	<div class="col-md-12">
		<?= wpn_widget('addthisbuttons'); ?>      
	</div>
</div>
<div class="row">
	<?php
	$num_cols = 1;
	foreach($pictures as $row)
	{

		/*
		 * Faz um calculo simples para adequar o total
		 * de colunas à class do bootstrap.
		 */
		$col = 12 / $max_cols;

		?>
		<div class="col-md-<?= $col; ?>">
			<?php
			$conf_foto = array(
				'src' => base_url() . '/media/albuns/' . $album->id . '/' . $row->filename,
				'class' => 'img-responsive',
				'alt' => $row->descricao
			);
			echo anchor('foto/'.wpn_fakelink($album->titulo).'/'.$row->id, img($conf_foto));
			?>
			<h4><?= $row->descricao; ?></h4>
		</div>
		<?php
		// Cria uma nova linha de acordo com a quantidade de ítens por linha.
		if($num_cols == $max_cols){ $num_cols = 1; echo '</div><div class="row">'; } else { $num_cols = $num_cols +1; }
	}
	?>
</div>
<div class="row" style="margin-top: 20px;">
	<div class="col-md-12">
		<h3 class="page-header">Comentários</h3>
		<?= wpn_widget('facebookcomments', array('link' => site_url('album/'.$album->id))); ?>
	</div>
</div>

<div class="row wpn-ads">
    <div class="col-md-12">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-0286050943868335"
             data-ad-slot="6888761431"
             data-ad-format="auto"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
</div>