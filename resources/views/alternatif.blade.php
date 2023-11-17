@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Alternatif</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        No
                                    </th>
                                    <th>Nama</th>
                                    <th>Kolom 2</th>
                                    <th>Kolom 3</th>
                                    <th>Kolom 4</th>
                                    <th>Kolom 5</th>
                                    <th>Kolom 6</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>Tri</td>
                                    <td class="align-middle">
                                        <div>pilihan</div>
                                    </td>

                                    </td>
                                    <td>
                                        <div>satu</div>
                                    </td>
                                    <td>option</td>
                                    <td>
                                        <div class="badge badge-success">Completed</div>
                                    </td>
                                    <td><a href="#" class="btn btn-secondary">Detail</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        2
                                    </td>
                                    <td>Jagad</td>
                                    <td class="align-middle">
                                        <div>pilihan</div>
                                    </td>
                                    <td>
                                        <div>dua</div>
                                    </td>
                                    <td>option</td>
                                    <td>
                                        <div class="badge badge-info">Todo</div>
                                    </td>
                                    <td><a href="#" class="btn btn-secondary">Detail</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        3
                                    </td>
                                    <td>Ariyani</td>
                                    <td class="align-middle">
                                        <div>pilihan</div>
                                    </td>
                                    <td>
                                        <div>tiga</div>
                                    </td>
                                    <td>option</td>
                                    <td>
                                        <div class="badge badge-warning">In Progress</div>
                                    </td>
                                    <td><a href="#" class="btn btn-secondary">Detail</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        4
                                    </td>
                                    <td>Mira</td>
                                    <td class="align-middle">
                                        <div>pilihan</div>
                                    </td>
                                    <td>
                                        <div>empat</div>
                                    </td>
                                    <td>option</td>
                                    <td>
                                        <div class="badge badge-success">Completed</div>
                                    </td>
                                    <td><a href="#" class="btn btn-secondary">Detail</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
