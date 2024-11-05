@extends('Dashboard.Layouts.master_dashboard')

<style>
    .dashboard-main .left-panel .left-panel-menu ul li a.user {
        background-color: white;
        color: #414141;
    }

    .dashboard-main .left-panel .left-panel-menu ul li a.user svg path {
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
                    <a class="t-btn t-btn-blue" href="{{ route('admin.user.create') }}">Add New User</a>
                    {{-- <a class="t-btn t-btn-blue" href="#">Add New User</a> --}}
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
                                    <img src="{{ asset('storage/profiles/' . $user->profile_img) }}" alt="Profile Image" width="50" height="50">

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
                                <a class="btn btn-sm btn-success" href="{{ route('admin.user.edit', $user->id) }}">Edit</a>
                                <form id="deleteForm{{ $user->id }}" action="" method="" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-sm btn-danger" onclick="confirmDelete({{ $user->id }})">Delete</button>
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
    function confirmDelete(userId) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('deleteForm' + userId).submit();
            }
        })
    }
</script>
