<!-- File: /app/View/Posts/view.ctp -->

<h1><?php echo h($comment['News']['titulo']); ?></h1>
<h2><?php echo h($comment['User']['username']); ?></h2>

<p><small>Created: <?php echo $comment['Comment']['created']; ?></small></p>


<p><?php echo h($comment['Comment']['text']); ?></p>
