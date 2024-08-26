<!DOCTYPE html>
<html>
<head>
    <title>Visitors</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Visitors</h1>
    <a href="{{ route('visitors.create') }}" class="btn btn-primary mb-3">Add Visitor</a>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Apartment ID</th>
                <th>Floor ID</th>
                <th>Whom to Meet</th>
                <th>Reason</th>
                <th>Entry Date</th>
                <th>Entry Time</th>
                <th>Exit Date</th>
                <th>Exit Time</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($visitors as $visitor)
                <tr>
                    <td>{{ $visitor->vis_id }}</td>
                    <td>{{ $visitor->vis_name }}</td>
                    <td>{{ $visitor->vis_mobile }}</td>
                    <td>{{ $visitor->vis_email }}</td>
                    <td>{{ $visitor->ap_id }}</td>
                    <td>{{ $visitor->floor_id }}</td>
                    <td>{{ $visitor->vis_whom_to_meet }}</td>
                    <td>{{ $visitor->vis_reason }}</td>
                    <td>{{ $visitor->vis_entry_date }}</td>
                    <td>{{ $visitor->vis_entry_time }}</td>
                    <td>{{ $visitor->vis_exit_date }}</td>
                    <td>{{ $visitor->vis_exit_time }}</td>
                    <td>
                        <a href="{{ route('visitors.edit', $visitor->vis_id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('visitors.destroy', $visitor->vis_id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
