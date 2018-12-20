<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
    @foreach($subscribes as $subscribe)
        <tr>
            <td>{{ $subscribe->name }}</td>
            <td>{{ $subscribe->email }}</td>
        </tr>
    @endforeach
    </tbody>
</table>