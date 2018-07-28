<div class="comment">
<ol>
  <?php
    //Comentários 
    $comments = get_comments(array(
      'post_id' => XXX,
      'status' => 'approve' //Tipo de Comentário
    ));
    //Display the list of comments
    wp_list_comments(array(
      'per_page' => 10, //Allow comment pagination
      'reverse_top_level' => false //Show the oldest comments at the top of the list
    ), $comments);
  ?>
</ol>

<?php
$comments_args = array(
         
        'label_submit'=>'Enviar',
        
        'title_reply'=>'Responder',
        
        'comment_notes_after' => '',
        
        'comment_field' => 
        '<p>
            <label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br />
            <textarea id="comment" name="comment" aria-required="true"></textarea>
        </p>',
);
comment_form($comments_args);
?>
</div>