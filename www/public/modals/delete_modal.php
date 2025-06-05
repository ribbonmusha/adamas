<!DOCTYPE html>

<html data-theme="light">
    <body>
        <div id="delete-modal" class="modal">
            <div class="modal-background" x-data @click="closeModal($el, 0, 'form-delete')"></div>
            <div class="modal-card">
                <header class="modal-card-head">
                    <p class="modal-card-title">
                        Hapus Data Mahasiswa
                    </p>
                    <button class="delete" aria-label="close" x-data @click="closeModal($el, 0, 'form-delete')"></button>
                </header>
                <section class="modal-card-body" style="overflow: hidden;">
                    <div class="content">
                        <div class="level">
                            <div class="level-item has-text-centered">
                                <span class="icon is-medium has-text-danger">
                                    <i class="fa-solid fa-2xl fa-triangle-exclamation fa-beat-fade"></i>
                                </span>
                            </div>
                        </div>
                        <h3 class="title has-text-centered">
                            PERINGATAN!
                        </h3>
                        <p>
                            Data mahasiswa pemilik NIM ini akan dihapus dan 
                            tak dapat dikembalikan. Pastikan anda mengisi kolom 
                            ini dengan benar.
                        </p>
                        <div class="field">
                            <div class="control is-expanded has-icons-left">
                                <span class="icon is-small is-left has-text-black">
                                    <i class="fa-solid fa-hashtag"></i>
                                </span>
                                <input aria-autocomplete="none" autocomplete="<?php uniqid() ?>" required class="input" id="nim-del" name="nim-del" type="text" form="form-delete" placeholder="Cth. 07031282025087"/>
                            </div>
                        </div>
                    </div>
                </section>
                <footer class="modal-card-foot">
                    <div class="buttons field is-grouped">
                        <form name="form-delete" id="form-delete" action="./entries/deleteEntry.php" method="post">
                            <div class="control">
                                <input type="submit" class="button is-danger is-inverted" value="Hapus" />
                            </div>
                        </form>
                        <div class="control">
                            <button class="button" x-data @click="closeModal($el, 0, 'form-delete')">Batal</button>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </body>
</html>