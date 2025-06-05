<!DOCTYPE html>

<html data-theme="dark">
    <body>
        <div id="add-modal" class="modal">
            <div class="modal-background" x-data @click="closeModal($el, 0, 'form-add')"></div>
            <div class="modal-card">
                <header class="modal-card-head">
                    <p class="modal-card-title">
                        Tambah Data Mahasiswa
                    </p>
                    <button class="delete" aria-label="close" x-data @click="closeModal($el, 0, 'form-add')"></button>
                </header>
                <section class="modal-card-body" style="overflow: hidden;">
                    <div class="field">
                        <label class="label" for="nama">
                            Nama
                        </label>
                        <div class="control has-icons-left">
                            <span class="icon is-small is-left has-text-black">
                                <i class="fa-solid fa-user"></i>
                            </span>
                            <input aria-autocomplete="none" autocomplete="<?php uniqid() ?>" required class="input" id="nama" name="nama" type="text" form="form-add" placeholder="Cth. Sasha Arnaud" />
                        </div>
                    </div>
                    <div class="field">
                        <label class="label" for="nim">
                            NIM
                        </label>
                        <div class="control has-icons-left">
                            <span class="icon is-small is-left has-text-black">
                                <i class="fa-solid fa-hashtag"></i>
                            </span>
                            <input aria-autocomplete="none" autocomplete="<?php uniqid() ?>" required class="input" id="nim" name="nim" type="text" form="form-add" placeholder="Cth. 080321232313343" />
                        </div>
                    </div>
                    <div class="field">
                        <label class="label" for="fakultas">
                            Fakultas
                        </label>
                        <div class="control has-icons-left">
                            <span class="icon is-small is-left has-text-black">
                                <i class="fa-solid fa-building-columns"></i>
                            </span>
                            <input aria-autocomplete="none" autocomplete="<?php uniqid() ?>"  required class="input" id="fakultas" name="fakultas" type="text" form="form-add" placeholder="Cth. Ilmu Komputer" />
                        </div>
                    </div>
                    <label class="label" for="prodi">
                            Program Studi
                    </label>
                    <div class="field has-addons">
                        <div class="control has-icons-left">
                            <span class="icon is-small is-left has-text-black">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </span>
                            <div class="select">
                                <select required id="jenjang" name="jenjang" form="form-add">
                                    <option selected disabled hidden>
                                        -
                                    </option>
                                    <option>
                                        D3
                                    </option>
                                    <option>
                                        S1
                                    </option>
                                    <option>
                                        S2
                                    </option>
                                    <option>
                                        S3
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="control is-expanded">
                            <input aria-autocomplete="none" autocomplete="<?php uniqid() ?>" required class="input" id="prodi" name="program studi" type="text" form="form-add" placeholder="Cth. Teknik Komputer" />
                        </div>
                    </div>
                </section>
                <footer class="modal-card-foot">
                    <div class="buttons field is-grouped">
                        <form name="form-add" id="form-add" action="./entries/createEntry.php" method="post">
                            <div class="control">
                                <input type="submit" class="button is-primary" value="Tambah" />
                            </div>
                        </form>
                        <div class="control">
                            <button class="button" x-data @click="closeModal($el, 0, 'form-add')">Batal</button>
                        </div>
                    </div>
                </footer>
            </div>
       </div>
    </body>
</html>