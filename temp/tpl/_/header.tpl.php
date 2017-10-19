<!DOCTYPE html>
<html <?php language_attributes();?> > 
	<head>
	<?
		$this->tpl('_/head', array());
		wp_head();
		$body_class = '';

		if(is_front_page()) {
			$body_class = $body_class . ' is--index-page ';
		}

		?>
	</head>
	<body <?php body_class($body_class); ?>
		data-azbn7='{"php_process_session":"","path":{"root":""}}'
		data-azbn7__mdl__api='{"request_method":"POST","access_as":"profile","key":""}'
		>
		<?
			$this->tpl('_/navbar');
		?>
		<div class="site-wrap">

		<?/*
		$posts = $this->getItems(array(
			'post_type' => 'page',
			'posts_per_page' => -1,
			'orderby' => array(
				'menu_order' => 'ASC',
				'date' => 'DESC',
				'ID' => 'DESC',
				'name' => 'ASC',
			),
			
			
			'post_parent' => 0,
			
			'tax_query' => array(array(
				'taxonomy' => 'page-category',
				'field' => 'slug',
				'terms' => array('default'),
			)),
			
			'meta_query' => array(
				'relation' => 'AND',
				'by_color' => array(
					'key' => 'color',
					'value' => 'blue',
				),
				'by_price' => array(
					'key' => 'price',
					'value' => 20,
				),
			),
			'orderby' => 'by_color',
			'order' => 'DESC',
			
		));
		foreach($posts as $p) {
			echo "<a href=\"" . l($p->ID) . "\" >{$p->post_title}</a>";
		}*/
		?>