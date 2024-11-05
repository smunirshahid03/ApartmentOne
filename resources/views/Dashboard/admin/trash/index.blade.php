@extends('Dashboard.Layouts.master_dashboard')

<style>
    .dashboard-main .left-panel .left-panel-menu ul li a.trash {
        background-color: white;
        color: #414141;
    }

    .dashboard-main .left-panel .left-panel-menu ul li a.trash svg path {
        fill: #414141 !important;
    }

    table.table.table-striped {
        width: 100%;
    }

    table.table.table-striped th,
    table.table.table-striped td {
        width: 30% !important;
        text-align: left;
    }
</style>

@section('content')
    <div class="profile-page user-page">
        <div class="row">

            <div class="col-lg-12">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="profile-basic-info-form">
                    <h3>Users</h3>
                </div>
                <div class="table-responsive">
                <table class="table table-striped ">
                    <tr>

                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>City</th>
                        <th>Country</th>
                        <th>State</th>
                        <th>Postal Code</th>
                        <th>Address</th>
                        <th>Profile Image</th>

                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                    @foreach ($users as $user)

                        <tr>
                            <td>{{ $user->name ?? '' }}</td>
                            <td>{{ $user->email ?? '' }}</td>
                            <td>{{ $user->phone ?? '' }}</td>
                            <td>{{ $user->city ?? '' }}</td>
                            <td>{{ $user->country ?? '' }}</td>
                            <td>{{ $user->state ?? '' }}</td>
                            <td>{{ $user->postal_code ?? '' }}</td>
                            <td>{{ $user->address ?? '' }}</td>
                            <td>
                                @if($user->profile_img)
                                    {{-- <img src="{{ asset('storage/'.$user->profile_img) }}" alt="Profile Image" width="50" height="50"> --}}
                                    <img src="{{ Storage::url($user->profile_img ?? '') }}" alt="Profile Image" width="50" height="50">

                                    {{-- <img src="{{ asset('storage/' . $user->profiles) }}" alt="Profile Image" width="50" height="50"> --}}

                                @else
                                    No Image
                                @endif
                            </td>
                            <td>
                                @if ($user->hasRole('land_lord'))
                                    Landlord
                                @elseif ($user->hasRole('tenant'))
                                    Tenant
                                @elseif ($user->hasRole('admin'))
                                    Admin
                                @else
                                    Null
                                @endif
                            </td>

                            <td>
                                <form id="deleteForm{{ $user->id }}" action="{{route('admin.trash.undo',$user->id) }}" method="post" style="display:inline-block;">
                                    @csrf
                                    @method('POST')
                                    <button type="button" class="btn btn-sm btn-warning" onclick="undo({{ $user->id }})">Undo</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            </div>
        </div>
    </div>
@endsection

<script>
    function undo(userId) {
    console.log(userId);
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert User!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, revert User!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('deleteForm' + userId).submit();
            }
        })
    }
</script>
