<?php get_header(); ?>
<div class="container">
  <div class="section">
    <div class="row">
      <div class="col s12 center">
        <h3>
          <i class="mdi-content-send brown-text"></i>
        </h3>
        <h4>Contact Us</h4>
        <p class="left-align light">Lorem ipsum dolor sit amet,
          consectetur adipiscing elit. Nullam scelerisque id nunc nec
          volutpat. Etiam pellentesque tristique arcu, non consequat
          magna fermentum ac. Cras ut ultricies eros. Maecenas eros
          justo, ullamcorper a sapien id, viverra ultrices eros. Morbi
          sem neque, posuere et pretium eget, bibendum sollicitudin
          lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl
          maximus sed. Nulla imperdiet semper molestie. Morbi massa
          odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam
          eget dignissim mauris, non tristique erat. Vestibulum ante
          ipsum primis in faucibus orci luctus et ultrices posuere
          cubilia Curae;</p>
      </div>
    </div>
  </div>
</div>
<?php dynamic_sidebar( 'sidebar-index-1' ); ?>
<!--posts -->
<div class="container">
  <div class="section">
    <div class="row">
      <div class="col s12 m12">
<?php
if (have_posts ()) :
	$postCount = 0;
	query_posts ( 'posts_per_page=3' );
	while ( have_posts () ) :
		the_post ();
		$postCount ++;
		?>
		<div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center">
              <a href="<?php the_permalink() ?>" rel="bookmark"
                title="Link Permanente para <?php the_title(); ?>"><?php the_title(); ?></a>
            </h2>
            <p class="light center"><?php the_content('Leia o restante deste artigo &raquo;'); ?></p>
            <!-- <div class="entrymeta">
              <div class="postinfo">
                <span class="postedby chip">Postado por <?php the_author() ?></span>
                <span class="filedto chip">Arquivado em <?php the_category(', ') ?></span>
					<?php edit_post_link('Editar',' ','','waves-effect waves-light btn'); ?>
				</div>
            </div>-->
          </div>
        </div>
        <div class="commentsblock">
	<?php comments_template(); ?>
	</div>
<?php endwhile; ?>
	<div class="navigation">
          <div class="alignleft"><?php next_posts_link('&laquo; Anterior',' ','','waves-effect waves-light btn') ?></div>
          <div class="alignright"><?php previous_posts_link('P&oacute;ximo &raquo;',' ','','waves-effect waves-light btn') ?></div>
        </div>
<?php else : ?>
	<h2>N&atilde;o Encontrado</h2>
        <div class="entrybody">O que voc&ecirc; est&aacute; procurando
          n&atilde;o est&aacute; aqui! Felizmente h&aacute; ferramentas
          na barra ao lado para buscar o que voc&ecirc; necessita</div>
<?php endif; ?>
</div>
    </div>
  </div>
</div>
<?php dynamic_sidebar( 'sidebar-index-2' ); ?>
<?php get_footer(); ?>