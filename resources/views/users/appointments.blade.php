<x-layout>
    <h1 class="text-center display-1">
        Your Appointments
    </h1>
    <table class="table w-75 m-auto table-info table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>age</th>
                <th>contact</th>
                <th>disease</th>
                <th>time</th>
                <th>doctor name</th>
                <th>doctor email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($appointment as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->age }}</td>
                    <td>{{ $item->contact }}</td>
                    <td>{{ $item->disease }}</td>
                    <td>{{ $item->datetime }}</td>
                    <td>Dr.{{ $item->doctor->name }}</td>
                    <td>Dr.{{ $item->doctor->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
