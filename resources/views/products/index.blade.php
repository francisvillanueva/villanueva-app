<!DOCTYPE html>
<body>
    <p>Products: </p>
    <table>
        <thead><tr>@foreach (['Id', 'Name', 'Category'] as $column)
        @endforeach</tr>

        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product['id'] }}</td>
                    <td>{{ $product['name'] }}</td>
                    <td>{{ $product['category'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </thead>
    </table>

    <p>Tasks: </p>
    <ul>
        @foreach ($tasks as $task)
        <li>{{ $task }}</li>
        @endforeach
    </ul>

    <p>Global Variables: </p>
    <p>{{ $sharedVariables }}</p>

    <p>Product Key: {{ $productKey }}</p>
</body>
</html>