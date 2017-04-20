<div class="section">
<div class="row">
  <div class="col s12 m12">
    <div class="card blue-grey darken-1">
      <div class="card-content white-text">				
<?php
// Do not delete these lines
if ('comments.php' == basename ( $_SERVER ['SCRIPT_FILENAME'] )) {
	die ( 'Please do not load this page directly. Thanks!' );
}
if ((! empty ( $post->post_password )) && ($_COOKIE ['wp-postpass_' . COOKIEHASH] != $post->post_password)) {
	?>
  <p class="nocomments">Este artigo &eacute; protegido por senha. Insira
          a senha para ver coment&aacute;rios.</p>
  <?php
	
return;
}
$oddcomment = 'alt';
/* This variable is for alternating comment background */
?>
<?php if ($comments) : ?>
       <h3 id="comments"><?php comments_number('Sem Coment&aacute;rios', 'Um Coment&aacute;rio', '% Coment&aacute;rios' );?> to &#8220;<?php the_title(); ?>&#8221;</h3>
        <ol class="commentlist">

	<?php foreach ($comments as $comment) : ?>
    	
        <?php $comment_type = get_comment_type(); ?>
		<?php if($comment_type == 'comment') { ?>

		<li class="<?php echo $oddcomment; ?>"
            id="comment-<?php comment_ID() ?>"><cite><?php comment_author_link() ?></cite> Diz:
			<?php if ($comment->comment_approved == '0') : ?>
			<em>Seu coment&aacute;rio est&aacute; aguardando
              modera&ccedil;&atilde;o.</em>
			<?php endif; ?>
			<br /> <small class="commentmetadata"><a
              href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('F j, Y') ?> &agrave;s <?php comment_time() ?></a> <?php edit_comment_link('e','',''); ?></small>
			<?php comment_text() ?>
		</li>
	<?php
			/* Changes every other comment to a different class */
			if ('alt' == $oddcomment)
				$oddcomment = '';
			else
				$oddcomment = 'alt';
		} /* End of is_comment statement */
	endforeach
	; /* end for each comment */
	?>


	</ol>

        <h3>Trackbacks/Pingbacks</h3>
        <ol>
    <?php foreach ($comments as $comment) : ?>
    <?php $comment_type = get_comment_type(); ?>
    <?php if($comment_type != 'comment') { ?>
    <li><?php comment_author_link() ?></li>
    <?php } ?>
    <?php endforeach; ?>
    </ol>

 <?php else : // this is displayed if there are no comments so far ?>

  <?php if ('open' == $post->comment_status) : ?> 
		<!-- If comments are open, but there are no comments. -->
		
	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
        <p class="nocomments">Atulamente n&atilde;o &eacute; permitido
          realizar coment&aacute;rios.</p>
		
	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

<h3 id="respond">Deixe um Coment&aacute;rio</h3>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>
          Voc&ecirc; deve <a
            href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">fazer
            login</a> para publicar um coment&aacute;rio.
        </p>
<?php else : ?>
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php"
          method="post" id="commentform">
<?php if ( $user_ID ) : ?>
<p>
            Logado como
            <ahref="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>.
            <a
              href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout"
              title="Desautenticar este usu&aacute;rio">Logout &raquo;</a>
          
          </p>
<?php else : ?>
		        <div class="input-field col s6">
            <i class="material-icons prefix">account_circle</i> <input
              type="text" name="author" id="author"
              value="<?php echo $comment_author; ?>" size="22"
              tabindex="1" /> <label for="author"><small>Nome <?php if ($req) echo "(requerido)"; ?></small></label>
          </div>
          <div class="input-field col s6">
            <i class="material-icons prefix">phone</i> <input
              type="text" name="email" id="email"
              value="<?php echo $comment_author_email; ?>" size="22"
              tabindex="2" /> <label for="email"><small>Mail (n&atilde;o ser&aacute; publicado) <?php if ($req) echo "(requerido)"; ?></small></label>
          </div>
          <div class="input-field col s6">
            <input type="text" name="url" id="url"
              value="<?php echo $comment_author_url; ?>" size="22"
              tabindex="3" /> <label for="url"><small>Website</small></label>
          </div>

<?php endif; ?>
<!--<p><small><strong>XHTML:</strong> You can use these tags: <?php echo allowed_tags(); ?></small></p>-->
          <div class="input-field col s12">
            <label for="comment">Textarea</label>
            <textarea name="comment" id="comment"
              class="materialize-textarea"></textarea>
          </div>
          <div class="card-action">
            <p>
              <button class="btn waves-effect waves-light" type="submit"
                name="action">
                <input name="submit" type="submit" id="submit"
                  tabindex="5" value="Enviar Coment&aacute;rio" /> <input
                  type="hidden" name="comment_post_ID"
                  value="<?php echo $id; ?>" />
              </button>
            </p>
<?php do_action('comment_form', $post->ID); ?>
</div>
        </form>
        <small><strong>Aviso:</strong> "Todo e qualquer texto publicado
          na internet atrav&eacute;s deste sistema n&atilde;o reflete,
          necessariamente, a opini&atilde;o deste site ou de seu autor.
          Os coment&aacute;rios publicados atrav&eacute;s deste sistema
          s&atilde;o de exclusiva e integral responsabilidade e autoria
          dos leitores que dele fizerem uso. O autor deste site
          reserva-se, desde j&aacute;, o direito de excluir
          coment&aacute;rios e textos que julgar ofensivos,
          difamat&oacute;rios, caluniosos, preconceituosos ou de alguma
          forma prejudiciais a terceiros. Textos de car&aacute;ter
          promocional ou inseridos no sistema sem a devida
          identifica&ccedil;&atilde;o de seu autor (nome completo e
          endere&ccedil;o v&aacute;lido de e-mail) tamb&eacute;m
          poder&atilde;o ser exclu&iacute;dos".</small>
<?php endif;?>
<?php endif;?>
		</div>
    </div>
  </div>
</div>
</div>