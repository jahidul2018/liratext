<div id="tab-latest" class="tab-content">
    <div class="box">
        <div id="latest-slidertab" class="row owl-carousel product-slider">
            
            <input type="hidden" id="h_quantity"  name="h_quantity" value="" >
                @foreach ($products as $product)
                        <div class="item">
                        <div class="product-thumb transition">
                            @php $i = 1; @endphp
                            @foreach ($product->product_images as $image)
                                @if ($i > 0)
                                    <div class="image product-imageblock"> <a href="{{ route('product.show',[$product->slug] ) }}"><img src="{{ asset('img/product/'.$image->link ) }}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                @endif

                                @php $i--; @endphp
                            @endforeach
                                    <div class="button-group">
                                            <button type="button" class="wishlist wishlist-btn" id="{{ $product->id }}" value="{{ $product->id }}" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                            {{-- <button type="button" class="addtocart-btn" id="{{ $product->id }}" value="{{ $product->id }}" >Add to Bag </button> --}}
                                            <button type="button" class="addtocart-btn" id="{{ $product->id }}" value="{{ $product->id }}" > Add to Bag
                                                
                                                
                                            </button>
                                            <button type="btn btn-info" class=" compare">
                                                <select name="quantity" id="product_quantity" class="product_quantity" style="background-color:orangered">
                                                    <option value="" selected> Reset </option>
                                                    @foreach ($product->product_variant as $option)
                                                    <option value="{{$option->size}}" id="{{$option->quantity}}" >{{$option->size}}</option> 
                                                    @endforeach
                                                </select>
                                            </button>
                                            {{-- <input type="hidden"  id="addtocarthidden"> --}}
                                            {{-- <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" > --}}
                                                
                                            </button>
                                        </div>
                                </div>
                            <div class="caption product-detail">
                                <h4 class="product-name"><a href="{{ route('product.show',[$product->slug] ) }}" class="ex2" title="iPod Classic">{{ $product->product_title }}</a></h4>
                                <p class="price product-price"> Taka {{ $product->offer_price }}<span class="price-tax">Ex Tax: $100.00 </span></p>
                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                            </div>
                        </div>
                    </div>
                   
                    
                @endforeach
               
            {{-- <div class="item ">
                <div class="product-thumb transition">
                    <div class="image product-imageblock"> <a href="product.html"><img src="{{ asset('frontend/image/product/product.jpg') }}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                        <div class="button-group">
                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                            <button type="button" class="addtocart-btn" >Add to fuck 2</button>
                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                        </div>
                    </div>
                    <div class="caption product-detail">
                        <h4 class="product-name"><a href="#" title="iPod Classic">iPod Classic</a></h4>
                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                    </div>
                    <div class="button-group">
                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                        <button type="button" class="addtocart-btn" >Add to Cart</button>
                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                    </div>
                </div>
            </div> --}}
           {{--  <div class="item ">
                <div class="product-thumb transition">
                    <div class="image product-imageblock"> <a href="product.html"><img src="{{ asset('frontend/image/product/product.jpg') }}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                        <div class="button-group">
                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                            <button type="button" class="addtocart-btn" >Add to Cart</button>
                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                        </div>
                    </div>
                    <div class="caption product-detail">
                        <h4 class="product-name"><a href="#" title="iPod Classic">iPod Classic</a></h4>
                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                    </div>
                    <div class="button-group">
                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                        <button type="button" class="addtocart-btn" >Add to Cart</button>
                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="product-thumb transition">
                    <div class="image product-imageblock"> <a href="product.html"><img src="{{ asset('frontend/image/product/product.jpg') }}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                        <div class="button-group">
                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                            <button type="button" class="addtocart-btn" >Add to Cart</button>
                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                        </div>
                    </div>
                    <div class="caption product-detail">
                        <h4 class="product-name"><a href="#" title="iPod Classic">iPod Classic</a></h4>
                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                    </div>
                    <div class="button-group">
                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                        <button type="button" class="addtocart-btn" >Add to Cart</button>
                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="product-thumb transition">
                    <div class="image product-imageblock"> <a href="product.html"><img src="{{ asset('frontend/image/product/product.jpg') }}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                        <div class="button-group">
                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                            <button type="button" class="addtocart-btn" >Add to Cart</button>
                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                        </div>
                    </div>
                    <div class="caption product-detail">
                        <h4 class="product-name"><a href="#" title="iPod Classic">iPod Classic</a></h4>
                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                    </div>
                    <div class="button-group">
                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                        <button type="button" class="addtocart-btn" >Add to Cart</button>
                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                    </div>
                </div>
            </div>  --}}
        
        </div>
    </div>
</div>