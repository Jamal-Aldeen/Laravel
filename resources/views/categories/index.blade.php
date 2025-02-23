<x-layout.app>
    <div class="container">
        <h1 class="text-center my-4">Shop by Category</h1>
        <div class="row">
            @foreach($categories as $category)
                <div class="col-md-4 mb-4">
                    <a href="#" class="text-decoration-none">
                        <div class="card shadow-sm border-0">
{{--                            <img src="{{ $category->image }}" class="card-img-top" alt="{{ $category->name }}">--}}
                            <div class="card-body text-center">
                                <h5 class="card-title text-dark">{{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-layout.app>
