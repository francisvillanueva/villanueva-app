<!DOCTYPE html>
<body>
    <div>
        Products: 

        <table>
        <thead>
            <td>Id</td>
            <td>Name</td>
            <td>Category</td>
        </thead>

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
    </div>
    
</body>
</html>