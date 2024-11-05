@extends('Dashboard.Layouts.master_dashboard')


<style>
    .dashboard-main .left-panel .left-panel-menu ul li a.pet {
        background-color: white;
        color: #414141;
    }

    .dashboard-main .left-panel .left-panel-menu ul li a.pet svg path {
        fill: #414141 !important;
    }

    table.table.table-striped {
        width: 100%;
    }

    table.table.table-striped tabel {
        width: 100% !important;
    }

    table.table.table-striped th,
    table.table.table-striped td {
        width: 30% !important;
        text-align: left;
    }
</style>

@section('content')
    <div class="profile-page rooms-features-page">
        <div class="row">
            <div class="col-lg-12">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="profile-basic-info-form">


                    <h3>Category</h3>
                    <a class="t-btn t-btn-blue" href="#">Add New</a>
                    {{-- <a class="t-btn t-btn-blue" href="{{ route('admin.pets.create') }}">Add New</a> --}}
                </div>
                <table class="table table-striped">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>

                    @foreach ($categorys as $category)
                        <tr>
                            <td>{{ $category->id ?? '' }}</td>
                            <td>{{ $category->name ?? '' }}</td>
                            <td>
                                <a class="btn btn-sm btn-success"
                                    href="{{ route('admin.pets.edit', $category->id) }}">Edit</a>
                                <form id="deleteForm" action="{{ route('admin.pets.destroy', $category->id) }}"
                                    method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-sm btn-danger"
                                        onclick="confirmDelete()">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
<script>
    function confirmDelete() {
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
                document.getElementById('deleteForm').submit();
            }
        })
    }
    $(document).ready(function() {
        // Handle form submission inside the modal
        $('#categoryForm').on('submit', function(event) {
            event.preventDefault(); // Prevent the form from submitting normally

            var newCategory = $('#new-category').val();
            if (newCategory) {
                $.ajax({
                    // url: "{{ route('landlord.category.store') }}", // Update to your route
                    method: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        name: newCategory
                    },
                    success: function(response) {
                        if (response.success) {
                            // Add the new category to the select dropdown
                            $('#cars').append(
                                `<option value="${response.category.id}" selected>${response.category.name}</option>`
                            );

                            // Clear the input field and close the modal
                            $('#new-category').val('');
                            $('#categoryModal').modal('hide'); // Hide the modal
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function(error) {
                        alert('Error creating category');
                    }
                });
            } else {
                alert('Please enter a category name');
            }
        });
    });
</script>
