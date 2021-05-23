<div class="product">
    <img class="pic" src={{ asset($imagePath) }} alt="photo">
    <div class="desc">
        <p class="card-text">{{ $product['name'] }}</p>
        <p class="card-text">{{ $product['description'] }}</p>
        <p class="card-text">{{ $product['price'] }}&nbsp;руб.</p>
        <a type="button" class="btn btn-sm btn-outline-secondary" href="#">заказать</a>
        <a type="button" class="btn btn-sm btn-outline-secondary" href="#">другие товары данной категории</a>
    </div>
</div>
