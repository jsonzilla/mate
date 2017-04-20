<?php get_header(); ?>
<div class="container">
<?php if (have_posts()) :?>
	<?php $postCount=0; ?>
	<?php while (have_posts()) : the_post();?>
	<?php $postCount++;?>
	<div class="section">
    <div class="row">
      <div class="col s12 m12">
        <div class="icon-block">
          <h2 class="center">
            <a href="<?php the_permalink() ?>" rel="bookmark"
              title="Link Permanente para <?php the_title(); ?>"><?php the_title(); ?></a>
          </h2>
          <p class="light"><?php the_content('Leia o restante deste artigo &raquo;'); ?></p>
          <div class="entrymeta">
            <div class="postinfo">
					<?php edit_post_link('Editar',' ','','','waves-effect waves-light btn'); ?>
				</div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endwhile; ?>
	<div class="navigation">
    <div class="alignleft"><?php next_posts_link('&laquo; Anterior',' ','','waves-effect waves-light btn') ?></div>
    <div class="alignright"><?php previous_posts_link('P&oacute;ximo &raquo;',' ','','waves-effect waves-light btn') ?></div>
  </div>
<?php else : ?>
	<h2>N&atilde;o Encontrado</h2>
  <div class="entrybody">O que voc&ecirc; est&aacute; procurando
    n&atilde;o est&aacute; aqui! Felizmente h&aacute; ferramentas na
    barra ao lado para buscar o que voc&ecirc; necessita</div>
<?php endif; ?>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
