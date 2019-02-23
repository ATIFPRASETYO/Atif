<form action="<?php echo site_url("produk/submit"); ?>" method="POST">
  <div class="form-group">
      <label >Nama Produk</label>
      <input type="text" name="nama" class="form-control"  placeholder="Nama produk">
    </div>

    <div class="form-group">
      <label >harga</label>
      <input type="text" name="harga" class="form-control"  placeholder="harga">
    </div>

    <div class="form-group">
      <label >qty</label>
      <input type="number" name="qty" class="form-control"  placeholder="qty">
    </div> 

 <div class="form-group">
      <label for="exampleInputFile">pilih gambar</label>
      <input type="file" class="form-control-file" >
    </div>
    <div class="form-group">
      <label >deskripsi</label>
      <textarea name="deskripsi" class="form-control" ></textarea>
    </div>


    <button type="submit" class="btn btn-primary">Proses data</button>
</form>