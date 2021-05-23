<div class="album py-5 bg-light">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($selectProducts as $product)
                <div class="col">
                    <div class="card shadow-sm">
                        <img class="pic category" src={{ asset('images/' . $product['image'] . '.png') }} alt="photo">
                        <div class="card-body">
                            <p class="card-text">{{ $product['name'] }}</p>
                            <p class="card-text">{{ $product['price'] }}&nbsp;руб.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a type="button" class="btn btn-sm btn-outline-secondary" href="#">заказать</a>
                                    <a type="button" class="btn btn-sm btn-outline-secondary"
                                        href="{{ route('product', ['id_category' => $product['product_category_id'], 'id_product' => $product['id']]) }}">подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<div class="pagination">
    {{ $selectProducts->links() }}
</div>
