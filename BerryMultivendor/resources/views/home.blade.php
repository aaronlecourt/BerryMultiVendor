@extends('index')
@section('title','Home')

@section('home-content')
    <div class="section-content">
        <div class="home-head home-left">
            <button><a href="/">Shop Now</a></button>
        </div> 
        <div class="home-head home-right">
            <button><a href="/">Shop Now</a></button>
        </div>       
    </div>  
    <div class="section-content2">
        <h2>Browse by Category</h2>
        <div class="scroll-cards">
            <ul>
                <li>
                    <a class="category-cards" href="/">
                    <div class="image">
                      <img src="{{asset('/images/item1.png')}}" alt="" height="100px" width="100px">
                    </div>
                    <h4 class="text">Fruits & Vegetables</h4>
                    </a>
                </li>
                <li>
                    <a class="category-cards" href="/">
                    <div class="image">
                      <img src="{{asset('/images/item2.png')}}" alt="" height="100px" width="100px">
                    </div>
                    <h4 class="text">Breads & Sweets</h4>
                    </a>
                </li>
                <li>
                    <a class="category-cards" href="/">
                    <div class="image">
                      <img src="{{asset('/images/item3.png')}}" alt="" height="100px" width="100px">
                    </div>
                    <h4 class="text">Frozen Seafood</h4>
                    </a>
                </li>
                <li>
                    <a class="category-cards" href="/">
                    <div class="image">
                      <img src="{{asset('/images/item4.png')}}" alt="" height="100px" width="100px">
                    </div>
                    <h4 class="text">Raw Meat</h4>
                    </a>
                </li>
                <li>
                    <a class="category-cards" href="/">
                    <div class="image">
                      <img src="{{asset('/images/item5.png')}}" alt="" height="100px" width="100px">
                    </div>
                    <h4 class="text">Drinks & Beverages</h4>
                    </a>
                </li>
                <li>
                    <a class="category-cards" href="/">
                    <div class="image">
                      <img src="{{asset('/images/item6.png')}}" alt="" height="100px" width="100px">
                    </div>
                    <h4 class="text">Dairy Products</h4>
                    </a>
                </li>
                <li>
                    <a class="category-cards" href="/">
                    <div class="image">
                      <img src="{{asset('/images/item7.png')}}" alt="" height="100px" width="100px">
                    </div>
                    <h4 class="text">Ready Meals</h4>
                    </a>
                </li>                
            </ul>
        </div>
    </div>
    
    <div class="section-content3">
        <div class="card-group">
            <div class="card">
              <div class="card-img-top content first"></div>
              <div class="card-body">
                <h5 class="card-title">Mango Juice</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam consectetur, tempore quam laudantium cumque velit ad? Ea animi vero nesciunt. Nostrum quae delectus ad similique alias, accusamus facere deleniti modi?</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
            <div class="card">
                <div class="card-img-top content second"></div>
              <div class="card-body">
                <h5 class="card-title">Olive Oil</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam consectetur, tempore quam laudantium cumque velit ad? Ea animi vero nesciunt. Nostrum quae delectus ad similique alias, accusamus facere deleniti modi?</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
            <div class="card">
              <div class="card-img-top content third"></div>
              <div class="card-body">
                <h5 class="card-title">Canned Pork Meat</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam consectetur, tempore quam laudantium cumque velit ad? Ea animi vero nesciunt. Nostrum quae delectus ad similique alias, accusamus facere deleniti modi?</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
    </div>

    <div class="section-content4" id="sectionFAQ">
        <div class="faq-head">
            <h2>FAQs</h2>
        </div>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="shipping-tab" data-bs-toggle="tab" data-bs-target="#shipping" type="button" role="tab" aria-controls="shipping" aria-selected="true">SHIPPING</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="payment-tab" data-bs-toggle="tab" data-bs-target="#payment" type="button" role="tab" aria-controls="payment" aria-selected="false">PAYMENT</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="order-tab" data-bs-toggle="tab" data-bs-target="#order" type="button" role="tab" aria-controls="order" aria-selected="false">ORDER & RETURNS</button>
          </li>
        </ul>
        
        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active" id="shipping" role="tabpanel" aria-labelledby="shipping-tab">
                <h3>What Shipping Methods Are Available?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla sapiente similique, maxime blanditiis cum et, recusandae cupiditate aspernatur ut nesciunt ipsa molestiae rerum repudiandae dolorem magni accusantium unde voluptates tempora!</p>
                <hr>
                <h3>How Long Will It Take To Get My Package?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla sapiente similique, maxime blanditiis cum et, recusandae cupiditate aspernatur ut nesciunt ipsa molestiae rerum repudiandae dolorem magni accusantium unde voluptates tempora!</p>
                <hr>
                <h3>Do You Ship Internationally?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla sapiente similique, maxime blanditiis cum et.</p>
          </div>
          <div class="tab-pane" id="payment" role="tabpanel" aria-labelledby="payment-tab">
                <h3>What Payment Methods Are Accepted?</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore delectus nesciunt, atque iusto esse dicta debitis, earum voluptatibus adipisci facilis quos soluta! In hic dignissimos, debitis nesciunt et nam voluptate?</p>
                <hr>
                <h3>Is Buying On-Line Safe?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, aliquid eveniet optio laborum praesentium, dolore non, asperiores eaque officia id dicta nobis eos. Nemo, officiis? Maiores, fugiat porro. Dolorum, consectetur.Placeat unde necessitatibus magni deserunt. Necessitatibus reprehenderit voluptatibus excepturi totam ad repellat eveniet perspiciatis accusantium mollitia repudiandae similique, voluptate ut natus alias, tempore quas voluptatem iusto, eum vero sequi quasi!</p>
            </div>
          <div class="tab-pane" id="order" role="tabpanel" aria-labelledby="order-tab">
                <h3>How Can I Cancel Or Change My Order?</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus, dolore nisi. Quam officia, delectus assumenda ipsa neque nesciunt quisquam, consectetur dolor soluta explicabo est sed commodi autem quo ipsum voluptate.</p>
                <hr>
                <h3>Do I need an account to place an order?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque quis dolore dolorem ab eligendi adipisci possimus officia! Tenetur eveniet doloribus temporibus aperiam quo soluta dolor? Excepturi quod accusantium maiores laborum.</p>
                <hr>
                <h3>How Do I Track My Order?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, magni aliquam! Ullam modi tempore officia maiores nobis doloremque a. Natus ducimus, inventore quae cupiditate explicabo excepturi at vitae delectus suscipit.Similique, voluptates adipisci! Tempora nesciunt natus eveniet dolor esse aliquam, illum vitae provident fugit laborum, magni, voluptates ut quos nobis iure! Saepe eveniet aliquid distinctio corrupti? Dignissimos sunt quis exercitationem.</p>
            </div>
        </div>

        
    </div>

    <script>
        function openCity(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
        }
        
        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
        </script>
    
@endsection