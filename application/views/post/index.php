<?php foreach ($posts_data as $post_data) : ?>
  <h3><?php echo $post_data['judul']; ?></h3>
  <div class="main">
    <?php echo $post_data['deskripsi']; ?>
  </div>
  <p><a href="<?php echo site_url('post/get/' . $post_data['post_id']); ?>">Lihat Post</a></p>

<?php endforeach;
