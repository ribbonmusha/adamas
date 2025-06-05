<!DOCTYPE html>

<html data-theme="light">
    <body>
        <section class="section">
            <div class="buttons is-right">
                <button class="button is-link is-rounded" data-target="add-modal" x-data @click="openModal($el)">
                    <span class="icon is-small">
                        <i class="fa-solid fa-plus"></i>
                    </span>
                    <span>Tambah</span>
                </button>
                <button class="button is-danger is-rounded is-inverted" data-target="delete-modal" x-data @click="openModal($el)">
                    <span class="icon is-small">
                        <i class="fa-solid fa-user-slash"></i>
                    </span>
                    <span>Hapus</span>
                </button>
            </div>
       </section>
    </body>
</html>