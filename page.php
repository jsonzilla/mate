<?php get_header(); ?>
<div id="content">
	<?php if (have_posts()) :?>
		<?php $postCount=0; ?>
		<?php while (have_posts()) : the_post();?>
			<?php $postCount++;?>
	<div class="entry entry-<?php echo $postCount ;?>">
		<div class="entrytitle">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Link Permanente para <?php the_title(); ?>"><?php the_title(); ?></a></h2> 
			<!-- Dont need date on pages
            <h3><?php the_time('F j, Y') ?></h3>
            -->
		</div>
		<div class="entrybody">
			<?php the_content('Leia o restante deste artigo &raquo;'); ?>
		</div>
		
		<!-- Remove this for page layout
        <div class="entrymeta">
		<div class="postinfo">
			<span class="postedby">Posted by <?php the_author() ?></span>
			<span class="filedto">Filed in <?php the_category(', ') ?> </span>
			<?php comments_popup_link('Sem Coment&aacute;rios &#187;', '1 Coment&aacute;rio &#187;', '% Coment&aacute;rios &#187;', 'commentslink'); ?>            
		</div>
		</div>
        -->
        
		<?php edit_post_link('Editar', ' | ', ''); ?>
	</div>
    
    <!-- Remove this for page layout
	<div class="commentsblock">
		<?php //comments_template(); ?>
	</div>
    -->
	
	<?php endwhile; ?>
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Anterior') ?></div>
			<div class="alignright"><?php previous_posts_link('P&oacute;ximo &raquo;') ?></div>
		</div>
		
	<?php else : ?>

		<h2>N&atilde;o Encontrado</h2>
		<div class="entrybody">O que voc&ecirc; est&aacute; procurando n&atilde;o est&aacute; aqui! Felizmente h&aacute; ferramentas na barra ao lado para buscar o que voc&ecirc; necessita</div>

	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>