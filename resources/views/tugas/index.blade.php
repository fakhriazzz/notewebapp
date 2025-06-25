@extends('layouts.layouts')

@push('css')
    <style>
        body {
            background-color: burlywood;
        }

        .card:hover {
            cursor: pointer;
            background-color: rgb(180, 231, 255)
        }

        .done {
            background-color: blue;
        }

        .icon {
            background-color: orange;
        }
    </style>
@endpush
@section('content')
    <div class="input-group my-3">
        <input type="text" class="form-control" id="key" placeholder="Cari Tugas" aria-label="Cari Tugas"
            aria-describedby="button-addon2">
        <button class="btn btn-success" type="button" id="button-tambah" data-bs-toggle="modal"
            data-bs-target="#exampleModal">Tambah</button>
    </div>
    @includeIf('tugas.modal')
    @includeIf('tugas.detail-tugas')
    <div class="list" id="container-list">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="fw-bold fs-3">Tugas</h6>
                    </div>
                    <div class="col-md-6 text-end">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-success btn-sm"><i class="fa-solid fa-check"></i></button>
                            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#taskmodal"><i
                                    class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                        </div>
                    </div>
                </div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur dolor iste, odit, ab quo deleniti illo perspiciatis mollitia minima molestias officiis, autem error earum aliquid id exercitationem sed tempora maiores!
            </div>
        </div>
    </div>
@endsection
