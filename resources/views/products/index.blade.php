<x-layout.app>
    <h1 class="text-center">Products</h1>
    <div class="row">
        {{-- Display products here --}}
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">name</h5>
                        <p class="card-text">description</p>
                        <p class="card-text"><strong>Price:</strong> $price</p>
                    </div>
                </div>
            </div>
        {{-- end for each --}}
    </div>
</x-layout.app>
