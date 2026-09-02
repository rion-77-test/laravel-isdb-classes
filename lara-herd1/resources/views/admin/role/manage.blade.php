<h1>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
    Role manage page
</h1>

{{-- <pre>
    {{ print_r($roles) }}
</pre> --}}

<table class="table" border="1">
    <thead>
        <th>ID</th>
        <th>Name</th>
    </thead>
    <tbody>
        @foreach ($roles as $role)
            <tr>
                {{-- <td>{{$role['id']}}</td>
                <td>{{$role['name']}}</td> --}}
                <td>{{$role->id}}</td>
                <td>{{$role->name}}</td>
            </tr>
        @endforeach
    </tbody>
</table>