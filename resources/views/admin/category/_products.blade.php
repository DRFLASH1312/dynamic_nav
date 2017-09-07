    {{--products--}}
    @if(isset($products))

    <h3>Products</h3>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Products</th>
            </tr>
        </thead>
        <tbody>
@forelse($products as $product)
    <tr><td>{{$product->name}}</td></tr>
        @empty
        <tr><td>no data</td></tr>
        @endforelse

        </tbody>
    </table>
    @endif
