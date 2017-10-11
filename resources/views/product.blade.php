@extends('layouts.master')

@section('title')
    ServiceKomputer.Com
@endsection

@section('styles')
<style type="text/css">
    .carousel-caption {
      position: relative;
      left: 0%;
      right: 0%;
      bottom: 0px;
      z-index: 10;
      padding-top: 0px;
      padding-bottom: 0px;
      color: #000;
      text-shadow: none;
      & .btn {
        text-shadow: none; // No shadow for button elements in carousel-caption
      }
    }

    .carousel {
        position: relative;
    }

    .controllers {
        position: absolute;
        top: 0px;
    }

    .carousel-control.left, 
    .carousel-control.right {
        background-image: none;
    }
    /*search*/
    .dropdown.dropdown-lg .dropdown-menu {
    margin-top: -1px;
    padding: 6px 20px;
}
.input-group-btn .btn-group {
    display: flex !important;
}
.btn-group .btn {
    border-radius: 0;
    margin-left: -1px;
}
.btn-group .btn:last-child {
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
}
.btn-group .form-horizontal .btn[type="submit"] {
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px;
}
.form-horizontal .form-group {
    margin-left: 0;
    margin-right: 0;
}
.form-group .form-control:last-child {
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
}

@media screen and (min-width: 768px) {
    #adv-search {
        width: 500px;
        margin: 0 auto;
    }
    .dropdown.dropdown-lg {
        position: static !important;
    }
    .dropdown.dropdown-lg .dropdown-menu {
        min-width: 500px;
    }
}
</style>        
@endsection

@section('carts')
    <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="glyphicon glyphicon-shopping-cart"></span> 7 - Items<span class="caret"></span></a>
              <ul class="dropdown-menu dropdown-cart" role="menu">
                  <li>
                      <span class="item">
                        <span class="item-left">
                            <img src="http://lorempixel.com/50/50/" alt="" />
                            <span class="item-info">
                                <span>Item name</span>
                                <span>23$</span>
                            </span>
                        </span>
                        <span class="item-right">
                            <button class="btn btn-xs btn-danger pull-right">x</button>
                        </span>
                    </span>
                  </li>
                  <li>
                      <span class="item">
                        <span class="item-left">
                            <img src="http://lorempixel.com/50/50/" alt="" />
                            <span class="item-info">
                                <span>Item name</span>
                                <span>23$</span>
                            </span>
                        </span>
                        <span class="item-right">
                            <button class="btn btn-xs btn-danger pull-right">x</button>
                        </span>
                    </span>
                  </li>
                  <li>
                      <span class="item">
                        <span class="item-left">
                            <img src="http://lorempixel.com/50/50/" alt="" />
                            <span class="item-info">
                                <span>Item name</span>
                                <span>23$</span>
                            </span>
                        </span>
                        <span class="item-right">
                            <button class="btn btn-xs btn-danger pull-right">x</button>
                        </span>
                    </span>
                  </li>
                  <li>
                      <span class="item">
                        <span class="item-left">
                            <img src="http://lorempixel.com/50/50/" alt="" />
                            <span class="item-info">
                                <span>Item name</span>
                                <span>23$</span>
                            </span>
                        </span>
                        <span class="item-right">
                            <button class="btn btn-xs btn-danger pull-right">x</button>
                        </span>
                    </span>
                  </li>
                  <li class="divider"></li>
                  <li><a class="text-center" href="">View Cart</a></li>
              </ul>
            </li>
    </ul>
@endsection

@section('content')
<div class="row">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
<!-- Wrapper for slides -->
    <div class="carousel-inner">
    <div class="item active">
      <div class="holder col-sm-8">
        <img class="img-responsive" src="http://placehold.it/1000x400" alt="...">
      </div>
      <div class="col-sm-4">
        <div class="carousel-caption">
            <h2>Slide 1</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>
            <button type="button" class="btn btn-default">Default</button>    
        </div>
      </div>
    </div>
    <div class="item">
      <div class="holder col-sm-8">
        <img class="img-responsive" src="http://placehold.it/1000x400" alt="...">
      </div>
      <div class="col-sm-4">
        <div class="carousel-caption">
            <h2>Slide 2</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>
            <button type="button" class="btn btn-default">Default</button>    
        </div>
      </div>
    </div>
    <div class="item">
      <div class="holder col-sm-8">
        <img class="img-responsive" src="http://placehold.it/1000x400" alt="...">
      </div>
      <div class="col-sm-4">
        <div class="carousel-caption">
            <h2>Slide 3</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>
            <button type="button" class="btn btn-default">Default</button>    
        </div>
      </div>
    </div>
</div>
<div class="controllers col-sm-8 col-xs-12">
<!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol> 
</div>
</div>
</div>

    <div class="row">
        <div class="col-md-12">
            <div class="input-group" id="adv-search">
                <input type="text" class="form-control" placeholder="Search for snippets" />
                <div class="input-group-btn">
                    <div class="btn-group" role="group">
                        <div class="dropdown dropdown-lg">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                <form class="form-horizontal" role="form">
                                  <div class="form-group">
                                    <label for="filter">Filter by</label>
                                    <select class="form-control">
                                        <option value="0" selected>All Snippets</option>
                                        <option value="1">Featured</option>
                                        <option value="2">Most popular</option>
                                        <option value="3">Top rated</option>
                                        <option value="4">Most commented</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="contain">Author</label>
                                    <input class="form-control" type="text" />
                                  </div>
                                  <div class="form-group">
                                    <label for="contain">Contains the words</label>
                                    <input class="form-control" type="text" />
                                  </div>
                                  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                </form>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </div>
                </div>
            </div>
          </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="product-item">
              <div class="pi-img-wrapper">
                <img src="http://keenthemes.com/assets/bootsnipp/k1.jpg" class="img-responsive" alt="Berry Lace Dress">
                <div>
                  <a href="#" class="btn">Zoom</a>
                  <a href="#" class="btn">View</a>
                </div>
              </div>
              <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
              <div class="pi-price">$29.00</div>
              <a href="{{URL::route('detailproduct',['slug' => 'asdf'])}}" class="btn add2cart">Add to cart</a>
              <div class="sticker sticker-new"></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="product-item">
              <div class="pi-img-wrapper">
                <img src="http://keenthemes.com/assets/bootsnipp/k2.jpg" class="img-responsive" alt="Berry Lace Dress">
                <div>
                  <a href="#" class="btn">Zoom</a>
                  <a href="#" class="btn">View</a>
                </div>
              </div>
              <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
              <div class="pi-price">$29.00</div>
              <a href="{{URL::route('detailproduct',['slug' => 'asdf'])}}" class="btn add2cart">Add to cart</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="product-item">
              <div class="pi-img-wrapper">
                <img src="http://keenthemes.com/assets/bootsnipp/k3.jpg" class="img-responsive" alt="Berry Lace Dress">
                <div>
                  <a href="#" class="btn">Zoom</a>
                  <a href="#" class="btn">View</a>
                </div>
              </div>
              <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
              <div class="pi-price">$29.00</div>
              <a href="{{URL::route('detailproduct',['slug' => 'asdf'])}}" class="btn add2cart">Add to cart</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="product-item">
              <div class="pi-img-wrapper">
                <img src="http://keenthemes.com/assets/bootsnipp/k1.jpg" class="img-responsive" alt="Berry Lace Dress">
                <div>
                  <a href="#" class="btn">Zoom</a>
                  <a href="#" class="btn">View</a>
                </div>
              </div>
              <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
              <div class="pi-price">$29.00</div>
              <a href="{{URL::route('detailproduct',['slug' => 'asdf'])}}" class="btn add2cart">Add to cart</a>
              <div class="sticker sticker-new"></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="product-item">
              <div class="pi-img-wrapper">
                <img src="http://keenthemes.com/assets/bootsnipp/k2.jpg" class="img-responsive" alt="Berry Lace Dress">
                <div>
                  <a href="#" class="btn">Zoom</a>
                  <a href="#" class="btn">View</a>
                </div>
              </div>
              <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
              <div class="pi-price">$29.00</div>
              <a href="{{URL::route('detailproduct',['slug' => 'asdf'])}}" class="btn add2cart">Add to cart</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="product-item">
              <div class="pi-img-wrapper">
                <img src="http://keenthemes.com/assets/bootsnipp/k3.jpg" class="img-responsive" alt="Berry Lace Dress">
                <div>
                  <a href="#" class="btn">Zoom</a>
                  <a href="#" class="btn">View</a>
                </div>
              </div>
              <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
              <div class="pi-price">$29.00</div>
              <a href="{{URL::route('detailproduct',['slug' => 'asdf'])}}" class="btn add2cart">Add to cart</a>
            </div>
        </div>
    </div>

<div class="row">
    <ul class="pagination">
              <li class="disabled"><a href="#">«</a></li>
              <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">»</a></li>
    </ul>
</div>

@endsection

@section('scripts')
<script type="text/javascript">
    $(window).bind("load resize slid.bs.carousel", function() {
    var imageHeight = $(".active .holder").height();
    $(".controllers").height( imageHeight );
    console.log("Slid");
});
</script>
@endsection