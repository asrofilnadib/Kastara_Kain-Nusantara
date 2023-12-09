<div class="p-t-65">
  <h4 class="mtext-112 cl2 p-b-33">
    Featured Products
  </h4>

  <ul>
    @foreach( $viewData['products'] as $products)
      <li class="flex-w flex-t p-b-30">
        <a href="/products/{{ $products->id }}" class="wrao-pic-w size-214 hov-ovelay1 m-r-20">
          <img src="/storage/{{ $products->image }}" alt="PRODUCT">
        </a>

        <div class="size-215 flex-col-t p-t-8">
          <a href="/produucts/{{ $products->id }}" class="stext-116 cl8 hov-cl1 trans-04">
            {{ $products->name }}
          </a>

          <span class="stext-116 cl6 p-t-20">
											{{ $products->price }}
										</span>
        </div>
      </li>
    @endforeach
  </ul>
</div>
