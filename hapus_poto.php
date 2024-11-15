<!-- Modal Hapus untuk Card 1 -->
<div class="modal fade" id="hapus1" tabindex="-1" aria-labelledby="hapus1Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="hapus1Label">Hapus Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="hapus_foto.php" method="POST">
                    <input type="hidden" name="fotoid" value="1"> <!-- ID foto yang akan dihapus -->
                    Apakah anda yakin akan menghapus data <strong>Retro Car</strong>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" name="hapus" class="btn btn-danger">Hapus Data</button>
                </form>
            </div>
        </div>
    </div>
</div>
