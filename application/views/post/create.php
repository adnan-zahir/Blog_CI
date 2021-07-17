<h3>Silahkan tuliskan post blog kamu!</h3>

<?php echo form_open('Post/create'); ?>
  <label for="judul">Judul</label>
  <input type="input" name="judul" />
  <br />
  <br />

  <label for="text">Deskripsi</label>
  <textarea name="deskripsi" cols="50" rows="4"></textarea><br />
  <br />
  <br />

  <input type="submit" name="submit" value="Simpan Blog" />

</form>
