@extends('layout.navbar')
@extends('staff.modalAdd')

@section('content')
<!-- button add staff -->

<div class="float-right mt-4 mb-3">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Add Staff</button>
</div>

@section('modalAdd')
<div class="form-group">
    <label for="exampleInputPassword1">NIK</label>
    <input type="text" class="form-control" id="exampleInputNik" name="nik" maxlength="5">
</div>
<div class="form-group">
    <label for="exampleInputPassword1">Nama</label>
    <input type="ptext" class="form-control" id="exampleInputNama" name="nama" >
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>
<div class="form-group">
    <label for="exampleInputTelepon">Telepon</label>
    <input type="text" class="form-control" id="exampleInputTelepon" name="telepon">
</div>
<div class="form-group">
    <label for="exampleInputPassword">Password</label>
    <input type="password" class="form-control" id="exampleInputpassword" name="password">
</div>
@endsection

<!-- table -->
<table class="table mt-4">
    <thead>
        <tr>
            <th scope="col">NIK</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Telepon</th>
            <th scope="col">Update</th>
            @if($hakAksesUser === "Admin")
            <th scope="col">Delete</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach ($staff as $staff_el)
        <tr>
            <th scope="row">{{$staff_el->nik}}</th>
            <td>{{$staff_el->nama}}</td>
            <td>{{$staff_el->email}}</td>
            <td>{{$staff_el->telepon}}</td>
            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateModal{{$loop->index}}">Update</button></td>
            @if($hakAksesUser === "Admin")
            <td><a class="btn btn-danger" href="/deletestaff/{{$staff_el->id}}" role="button">Delete</a></td>
            @endif

            <!-- Modal Update -->
            <div class="modal fade" id="updateModal{{$loop->index}}" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Input Data Staff</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <!-- form update -->
                            <form method="post" action="/updatestaff/{{$staff_el->id}}">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="updateNik{{$loop->index}}">NIK</label>
                                    <input type="text" class="form-control" id="updateNik{{$loop->index}}" name="nik" maxlength="5">
                                </div>
                                <div class="form-group">
                                    <label for="updateNama{{$loop->index}}">Nama</label>
                                    <input type="ptext" class="form-control" id="updateNama{{$loop->index}}" name="nama">
                                </div>
                                <div class="form-group">
                                    <label for="updateEmail{{$loop->index}}">Email address</label>
                                    <input type="email" class="form-control" id="updateEmail{{$loop->index}}" aria-describedby="emailHelp" name="email">
                                    <small id="emailHelp{{$loop->index}}" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="udpateTelepon{{$loop->index}}">Telepon</label>
                                    <input type="text" class="form-control" id="updateTelepon{{$loop->index}}" name="telepon">
                                </div>
                                <div class="form-group">
                                    <label for="updatePassword{{$loop->index}}">Password</label>
                                    <input type="password" class="form-control" id="updatePassword{{$loop->index}}" name="password">
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </tr>
        @endforeach
    </tbody>
</table>

@endsection