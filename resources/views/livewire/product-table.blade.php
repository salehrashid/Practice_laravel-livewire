<div xmlns:wire="http://www.w3.org/1999/xhtml">
    <div>
        <input type="text" class="mb-3 form-control" placeholder="Cari" wire:model="search">
    </div>
    <table>
        <thead>
        <tr>
            <th>No</th>
            <th>Product</th>
            <th>Price</th>
            <th>Country</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $item)
            <tr>
                <td>{{$item -> id}}</td>
                <td>{{$item -> name}}</td>
                <td>{{$item -> price}}</td>
                <td>{{$item -> country}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$products->links()}}
</div>
