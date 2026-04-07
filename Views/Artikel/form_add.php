<?= $this->include('template/admin_header'); ?>

<div class="form-add">
    <h2>Tambah Artikel</h2>
    <form action="" method="post">
        <p>
            <input type="text" name="judul" placeholder="Judul Artikel" style="width: 100%; padding: 10px;">
        </p>
        <p>
            <textarea name="isi" cols="50" rows="10" placeholder="Isi Artikel" style="width: 100%; padding: 10px;"></textarea>
        </p>
        <p>
            <input type="submit" value="Simpan" class="btn btn-large" style="padding: 10px 20px; background-color: #007bff; color: white; border: none; cursor: pointer;">
        </p>
    </form>
</div>

<?= $this->include('template/admin_footer'); ?>