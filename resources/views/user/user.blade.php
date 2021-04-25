@extends('layout.navbar')
@extends('user.modalAdd')
@section('content')

<!-- button add staff -->
@if($hakAksesUser === "Admin")
<div class="float-right mt-4 mb-3">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addUserModal">Add User</button>
</div>
@endif

@section('modalAddUser')
<div class="form-group">
    <label for="addUserNikUser">NIK</label>
    <input type="text" class="form-control" id="addUserInputNikUser" name="nikUser">
</div>
<div class="form-group">
    <label for="addUserHakAkses">Hak Akses</label>
    <input type="text" class="form-control" id="addUserHakAKses" name="hakAkses">
</div>
<div class="form-group">
    <label for="addUserStatusAkun">Status Akun</label>
    <input type="text" class="form-control" id="addUserStatusAkun" aria-describedby="statusAkun" name="statusAkun">
    
</div>

@endsection

<!-- table -->
<table class="table mt-4">
    <thead>
        <tr>
            <th scope="col">NIK</th>
            <th scope="col">Hak Akses</th>
            <th scope="col">Status Akun</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($user as $user_el)
        <tr>
            <th scope="row">{{$user_el->nikUser}}</th>
            <td>{{$user_el->hakAkses}}</td>
            <td>{{$user_el->statusAkun}}</td>
            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#UserUpdateModal{{$loop->index}}">Update</button></td>
            <td><a class="btn btn-danger" href="/deleteuser/{{$user_el->id}}" role="button">Delete</a></td>

            <!-- Modal Update -->
            <div class="modal fade" id="userUpdateModal{{$loop->index}}" tabindex="-1" aria-labelledby="userUpdateModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Input Data User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <!-- form update -->
                            <form method="post" action="/updateuser/{{$user_el->id}}">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="userUpdateNik{{$loop->index}}">NIK</label>
                                    <input type="text" class="form-control" id="userUpdateNik{{$loop->index}}" name="nikUser">
                                </div>
                                <div class="form-group">
                                    <label for="userUpdateHA{{$loop->index}}">Hak Akses</label>
                                    <input type="text" class="form-control" id="userUpdateHA{{$loop->index}}" name="hakAkses">
                                </div>
                                <div class="form-group">
                                    <label for="userUpdateSA{{$loop->index}}">Status Akun</label>
                                    <input type="text" class="form-control" id="userUpdateSA{{$loop->index}}" aria-describedby="emailHelp" name="statusAkun">
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                        <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div> -->
                    </div>
                </div>
            </div>

        </tr>
        @endforeach
    </tbody>
</table>

@endsection