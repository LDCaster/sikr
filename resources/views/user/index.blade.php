@extends('layout.main')

@section('content')
    <!-- Static Table Start -->

    <div class="sparkline13-graph">
        <div class="datatable-dashv1-list custom-datatable-overright">

            {{-- START MODAL Tambah --}}
            <div id="PrimaryModalhdbgcl" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header header-color-modal bg-color-1">
                            <h4 class="modal-title">Tambah Data User</h4>
                            <div class="modal-close-area modal-close-df">
                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                            </div>
                        </div>
                        <form method="post" action="/user" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama User</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="img" class="form-label">Gambar</label>
                                    <input type="file" class="form-control " name="img" id="img">
                                </div>
                                <div class="mb-3">
                                    <label for="role_id" class="form-label">Role</label>
                                    <select class="form-control custom-select-value" name="role_id">
                                        <option value="">-- Pilih Role ---</option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">
                                                {{ $role->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" id="password">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" class="btn btn-cusom-four btn-primary">Cancel</button>
                                <button type="submit" class="btn btn-cusom-four btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- END MODAL TAMBAH --}}

            {{-- START MODAL EDIT --}}
            <div id="ModalEdit" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header header-color-modal bg-color-1">
                            <h4 class="modal-title">Ubah Data User</h4>
                            <div class="modal-close-area modal-close-df">
                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                            </div>
                        </div>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                @csrf
                                @method('put')
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama User</label>
                                    <input type="text" class="form-control" name="name" id="name">
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Gambar</label>
                                    <input type="file" name="image" class="form-control" placeholder="image">
                                    @foreach ($users as $user)
                                        <img src="{{ url('/assets/img/profile') . '/' . $user->img }}" width="300px">
                                    @endforeach
                                </div>
                                <div class="mb-3">
                                    <label for="role" class="form-label">Role</label>
                                    <select class="form-control custom-select-value" name="role" id="role">
                                        <option value=""> --- Pilih Roles ---</option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" name="email" id="email">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" class="btn btn-cusom-four btn-primary">Cancel</button>
                                <button type="submit" class="btn btn-cusom-four btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- END MODAL EDIT --}}

            <div class="data-table-area mg-b-15" style="margin-top: 55px">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="sparkline13-list">
                                <h3 style="margin-left: 15px; font-family: 'Roboto Condensed', sans-serif;">
                                    Data User</h3>
                                <hr>
                                @if (session()->has('success'))
                                    <div class="alert alert-success alert-success-style1 alert-success-stylenone">
                                        <button type="button" class="close sucess-op" data-dismiss="alert"
                                            aria-label="Close">
                                            <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                                        </button>
                                        <i class="fa fa-check edu-checked-pro admin-check-sucess admin-check-pro-none"
                                            aria-hidden="true"></i>
                                        <p>{{ session('success') }}</p>
                                    </div>
                                @endif
                                <section class="menu-menu">
                                    <div class="col-sm-1">
                                        <a href="#" data-toggle="modal" data-target="#PrimaryModalhdbgcl"
                                            class="btn btn-cusom-four btn-primary"><i class="fa fa-plus edu-informatio"
                                                aria-hidden="true"></i> Tambah</a>
                                    </div>
                                </section>
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true"
                                    data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true"
                                    data-key-events="true" data-show-toggle="false" data-resizable="true"
                                    data-cookie="true" data-cookie-id-table="saveId" data-show-export="true"
                                    data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>
                                        <tr>
                                            <th data-field="action" class="aksi">Aksi</th>
                                            <th data-field="no">No</th>
                                            <th>Gambar</th>
                                            <th data-field="nama_satuan" data-editable="true">Nama</th>
                                            <th data-field="role" data-editable="true">Role</th>
                                            <th data-field="email" data-editable="true">Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button class="btn btn-warning btn-sm edit"
                                                        value="{{ $user->id }}" data-toggle="modal"
                                                        data-target="#ModalEdit">
                                                        <i class="fa-regular fa-pen-to-square"></i>
                                                    </button>
                                                    <form class="d-inline" style="display: inline"
                                                        action="{{ url('/user', $user->id) }}" method="POST">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Apakah anda yakin untuk hapus data Rab?')">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    @if ($user->img)
                                                        <img style="max-width:50px; max-height:50px"
                                                            src="{{ url('/assets/img/profile') . '/' . $user->img }}">
                                                    @endif
                                                </td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->role->name }}</td>
                                                <td>{{ $user->email }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Static Table End -->

    {{-- START IMAGE PRV SC --}}

    {{-- END IMAGE PRV SC --}}


    <script>
        $(document).ready(function() {

            $('.edit').click(function() {
                const id = $(this).val()
                $.ajax({
                    url: `{{ url('/user/${id}/edit') }}`,
                    method: "get",
                    success: function(data) {
                        $('#name').val(data.name)
                        $('#image').val(data.img)
                        $('#role').val(data.role_id)
                        $('#email').val(data.email)
                        $('#ModalEdit form').attr('action',
                            `{{ url('user/${id}') }}`)
                    }
                })
            })
        })
    </script>
@endsection
