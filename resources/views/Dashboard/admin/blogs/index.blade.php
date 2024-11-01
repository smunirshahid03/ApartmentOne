@extends('Dashboard.Layouts.master_dashboard')


<style>
    .dashboard-main .left-panel .left-panel-menu ul li a.blog {
        background-color: white;
        color: #414141;
    }

    .dashboard-main .left-panel .left-panel-menu ul li a.blog svg path {
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
<div>
    <a href="{{ route('admin.blog.create') }}" type="submit" class="btn btn-primary">Add Blog</a>
</div>
<div>
    <table id="table_id" class="display">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Short Description</th>
                <th>Long Description</th>
                <th>Page Title</th>
                <th>Meta Tag</th>
                <th>Image</th>
                <th>Is Popular</th>
                <th>Is Trending</th>
                <th>Is Latest</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            <!-- Static Sample Data -->
            <tr>
                <td>1</td>
                <td>Sample Title 1</td>
                <td>sample-slug-1</td>
                <td>This is a short description.</td>
                <td>This is a long description for the sample data entry.</td>
                <td>Sample Page Title</td>
                <td>Sample Meta Tag</td>
                <td><img src="path/to/sample-image1.jpg" width="50"></td>
                <td>Yes</td>
                <td>No</td>
                <td>No</td>
                <td>2024-01-01 10:00:00</td>
                <td>2024-01-01 12:00:00</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Sample Title 2</td>
                <td>sample-slug-2</td>
                <td>This is another short description.</td>
                <td>This is another long description for the sample data entry.</td>
                <td>Another Page Title</td>
                <td>Another Meta Tag</td>
                <td><img src="path/to/sample-image2.jpg" width="50"></td>
                <td>No</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>2024-01-02 11:00:00</td>
                <td>2024-01-02 13:00:00</td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>



</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        $('#table_id').DataTable();
    });
</script>
@endsection
