
<div class="products-feature section">
    <div class="section-heading">
        <h1>{{ $heading }}</h1>
    </div>

    <div class="feature-contents">
        <div class="feature-inner">
            <div class="features-slider">

                <div class="slideset">
                    @foreach($products as $product)
                    <div class="feature">
                        <div class="inner">
                            <a class="mansory-container" href="{{ url('/product/'.$product->slug) }}">
                                <div class="feature-box-teaser row">
                                    <div class="thumbnail">
                                        <img src="{{ asset('/storage/'.$product->image) }}">
                                    </div>
                                </div>

                                <div class="feature-box-text row">
                                    <h3>
                                        {{ $product->title }}
                                    </h3>
                                    <p>{{ $product->category->name }}</p>
                                </div>

                                <div class="feature-box-footer row">
                                    <p>
                                        <button onclick="loadUrl({{ url('/product/'.$product->slug) }}, '_blank')" class="more">More</button>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
                
            </div>
        </div>
    </div>
</div>
