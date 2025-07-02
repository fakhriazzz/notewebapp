<div class="modal fade" id="taskmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Tambah Tugas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea rows="3" class="form-control" id="deskripsi"></textarea>
                </div>
                <div class="row">
                    <div class="col-8 text-end">
                        <label for="list" class="visually-hidden">Tambah List</label>
                        <input type="text" class="form-control" id="list" placeholder="Tambah List">
                    </div>
                    <div class="col-4 text-end">
                        <button type="button" class="btn btn-success">Tambah List</button>
                    </div>
                </div>
                <br/>
                <ul class="list-group" id="list-check">
                    <li class="list-group-item bg-dark text-white">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label" for="checkDefault">
                                        Belakang rumah
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4 text-end">
                                <a href="#" class="text-decoration-none text-danger">
                                    <i class="fa-solid fa-minus text-danger"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
                <br/>
                <div class="text-end">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Tambah</button>
                </div>
            </div>
        </div>
    </div>
</div>
