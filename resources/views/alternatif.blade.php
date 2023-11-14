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
                                        <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                                            <div class="progress-bar bg-success" data-width="100%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <img alt="image" src="../assets/img/avatar/avatar-5.png" class="rounded-circle"
                                            width="35" data-toggle="tooltip" title="Wildan Ahdian">
                                    </td>
                                    <td>2018-01-20</td>
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
                                        <div class="progress" data-height="4" data-toggle="tooltip" title="0%">
                                            <div class="progress-bar" data-width="0"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle"
                                            width="35" data-toggle="tooltip" title="Nur Alpiana">
                                        <img alt="image" src="../assets/img/avatar/avatar-3.png" class="rounded-circle"
                                            width="35" data-toggle="tooltip" title="Hariono Yusup">
                                        <img alt="image" src="../assets/img/avatar/avatar-4.png" class="rounded-circle"
                                            width="35" data-toggle="tooltip" title="Bagus Dwi Cahya">
                                    </td>
                                    <td>2018-04-10</td>
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
                                        <div class="progress" data-height="4" data-toggle="tooltip" title="70%">
                                            <div class="progress-bar bg-warning" data-width="70%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle"
                                            width="35" data-toggle="tooltip" title="Rizal Fakhri">
                                        <img alt="image" src="../assets/img/avatar/avatar-2.png" class="rounded-circle"
                                            width="35" data-toggle="tooltip" title="Hasan Basri">
                                    </td>
                                    <td>2018-01-29</td>
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
                                        <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                                            <div class="progress-bar bg-success" data-width="100%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <img alt="image" src="../assets/img/avatar/avatar-2.png" class="rounded-circle"
                                            width="35" data-toggle="tooltip" title="Rizal Fakhri">
                                        <img alt="image" src="../assets/img/avatar/avatar-5.png" class="rounded-circle"
                                            width="35" data-toggle="tooltip" title="Isnap Kiswandi">
                                        <img alt="image" src="../assets/img/avatar/avatar-4.png" class="rounded-circle"
                                            width="35" data-toggle="tooltip" title="Yudi Nawawi">
                                        <img alt="image" src="../assets/img/avatar/avatar-1.png"
                                            class="rounded-circle" width="35" data-toggle="tooltip"
                                            title="Khaerul Anwar">
                                    </td>
                                    <td>2018-01-16</td>
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
