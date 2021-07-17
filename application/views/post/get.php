<?php
echo "<h2>" . $post_data['judul'] . "</h2>";
echo $post_data['deskripsi'];
?>

  <p><a href="<?php echo site_url('post/update/' . $post_data['post_id']); ?>">Update Post</a></p>
  <p><a href="<?php echo site_url('post/delete/' . $post_data['post_id']); ?>">Delete Post</a></p>
