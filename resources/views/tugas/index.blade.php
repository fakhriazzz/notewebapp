@extends('layouts.layouts')

@push('css')
    <style>
        body {
            background-color: burlywood;
        }

        .card:hover {
            cursor: pointer;
            background-color: rgb(255, 238, 217)
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
        <form method="POST" action="{{ route('tugas.search') }}">
            @csrf
            <div class="row my-1 g-2">
                <div class="col-md-9">
                    <input type="text" class="form-control" id="title" name="title" placeholder="Cari Tugas">
                </div>
                <div class="col-md-3">
                    <button class="btn btn-success w-100" type="submit">Cari</button>
                </div>
            </div>
        </form>
    </div>
    <button class="btn btn-primary mb-2" type="button" id="button-tambah" data-bs-toggle="modal"
        data-bs-target="#exampleModal">Tambah</button>
    @includeIf('tugas.modal')
    @includeIf('tugas.detail-tugas')
    <div class="list" id="container-list">
        @foreach ($tugas as $t)
            <div class="card mb-2">
                <div class="card-body">
                    <div class="row align">
                        <div class="col-md-6">
                            <h6 class="fw-bold fs-3">{{ $t->judul }}</h6>
                        </div>
                        <div class="col-md-6 text-end">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-success btn-sm"><i
                                        class="fa-solid fa-check"></i></button>
                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#taskmodal"><i class="fa-solid fa-pen-to-square"></i></button>
                                <form action="{{ route('tugas.destroy', $t->id_tugas) }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Yakin ingin menghapus tugas ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{ $t->deskripsi }}
                </div>
            </div>
        @endforeach
    </div>
@endsection
{{-- @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif --}}

{{-- @push('js')
    <script>
        dataTugas();

        function dataTugas() {
            $.ajax({
                type: "GET",
                url: "{{ route('tugas.data') }}",
                dataType: "json",
                success: function(response) {
                    $.each(response, function(key, item) {
                        let s = item.status == 1 ? 'bg-secondary text-white' : '';
                        $('#container-list').append(`
                        <div class="card ${s}">
                            <div class="card-body">
                                <div class="row align">
                                    <div class="col-md-6">
                                        <h6 class="fw-bold fs-3">${item.judul}</h6>
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
                                ${item.deskripsi}
                            </div>
                        </div>`);
                    });
                }
            });
        }
    </script>
@endpush --}}
