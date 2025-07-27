@if ($product->count() > 0)
    @foreach ($product as $item)
        <div class="col-md-6 col-lg-6 col-xl-4">
            <div class="rounded position-relative fruite-item">
                <div class="fruite-img">
                    <img src="{{ asset($item->image) }}" class="img-fluid w-100 rounded-top" alt="{{ $item->name }}"
                        style="height: 200px">
                </div>
                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">
                    Fruits
                </div>
                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                    <h4>{{ $item->name }}</h4>
                    <p>{{ $item->description }}</p>
                    <div class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0">₹{{ $item->discount_price }}</p>
                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                            cart</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    @php
        $perPage = 9;
        $currentPage = request()->get('page', 1);
        $offset = ($currentPage - 1) * $perPage;
        $productOnPage = array_slice($all_product->toArray(), $offset, $perPage);
    @endphp
    <div class="col-12">
        <div class="pagination d-flex justify-content-center mt-5">
            @if ($currentPage > 1)
                <a href="?page={{ $currentPage - 1 }}" class="rounded">&laquo;</a>
            @else
                <a href="#" class="rounded">&laquo;</a>
            @endif
            @for ($i = 1; $i <= ceil(count($all_product) / $perPage); $i++)
                <a href="?page={{ $i }}"
                    class="rounded {{ $i == $currentPage ? 'active' : '' }} ">{{ $i }}</a>
            @endfor
            @if ($currentPage < ceil(count($all_product) / $perPage))
                <a href="?page={{ $currentPage + 1 }}" class="rounded">&raquo;</a>
            @else
                <a href="#" class="rounded">&raquo;</a>
            @endif
        </div>
    </div>
@else
    <img src="https://img.freepik.com/premium-vector/no-data-concept-illustration_86047-488.jpg" alt="no data"
        class="img-fluid">
@endif
