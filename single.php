<?php get_header(); ?>
<!--posts -->
<div class="container">
  <div class="section">
    <div class="row">
      <div class="col s12 m12">
<?php if (have_posts()) :?>
	<?php $postCount=0; ?>
	<?php while (have_posts()) : the_post();?>
	<?php $postCount++;?>
		<div class="col s12 m12">
          <div class="icon-block">
            <h2 class="center">
              <a href="<?php the_permalink() ?>" rel="bookmark"
                title="Link Permanente para <?php the_title(); ?>"><?php the_title(); ?></a>
            </h2>
             <?php edit_post_link('Editar',' ','','waves-effect waves-light btn'); ?>
            <p class="light"><?php the_content('Leia o restante deste artigo &raquo;'); ?></p>
            <div class="entrymeta">
              <div class="postinfo">
                <span class="postedby chip">Postado por <?php the_author() ?></span>
                <span class="filedto chip">Arquivado em <?php the_category(', ') ?> </span>
				<span class="btn-floating blue"><i class="large material-icons">comment</i><?php comments_popup_link('Sem Coment&aacute;rios &#187;', '1 Coment&aacute;rio &#187;', '% Coment&aacute;rios &#187;', 'commentslink'); ?></span>
				<br>
				</div>
            </div>
          </div>
        </div>
<?php comments_template(); ?>
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
 <?php get_sidebar(); ?>
 
</div>
<?php get_footer(); ?>