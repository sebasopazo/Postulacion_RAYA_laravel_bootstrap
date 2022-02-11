@extends('layout.master')
@section('title', 'Landing page')
    
@section('content')
    
  <!--Navbar-->
  <nav class="navbar navbar-expand-sm navbar-dark backgroundBlue fixed-top ">
    
  </nav>
  <nav class="navbar navbar-expand-sm navbar-dark backgroundBlanco fixed-top ">
   
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="img/logo.jpg" width="150">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon backgroundGris"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active text-black" href="#home">Home</a></li>
          <li class="nav-item"><a class="nav-link active text-black" href="#productos">Productos</a></li>
          <li class="nav-item"><a class="nav-link active text-black" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link active text-black" href="#servicios">Servicios</a></li>
          <li class="nav-item"><a class="nav-link active text-black" href="#big">Big</a></li>
          <li class="nav-item"><a class="nav-link active text-black" href="#blog">Blog</a></li>
          <li class="nav-item"><a class="nav-link active text-black" href="#contacto">Contacto</a></li>
          <li class="nav-item"><a class="nav-link active text-black" href="/inicioSesion">Admin dashboard</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!--Home-->
  <div id="home" class="backgroundGris2 padding75">
    <div class="container-xl p-5">
      <div class="row pt-5">
        
          <img src="img/welcometo.jpg">
        
        
          <p>Lorem ipsum is simply a dummy text of the printing and typesetting industry.</p>
        <div class="row buttons">
          <div class="col-sm action_btn">
            <a href="#" class="btn buttonRoundGold">Read More</a>
          </div>
          <div class="col-sm action_btn">
            <a href="#" class="btn buttonRound">Shop Now</a>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!--Producto carrusel-->
  <div class="backgroundGris ">
    <div id="productos" class="container-md p-5">
      <div class="row pt-5">
        <h3 class="text-center pb-5 pt-5 h1 textDeepBlue">Top Product</h3>

      </div>
    </div>
    <div class="container active justify-content-center d-flex">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner ">
          <!--Carrusel activo-->

          <div class="carousel-item active">
            <div class="row">
              <div class="col-sm">
                <div class="text-center card" style="width: 15rem;">
                  <img src="img/placeholder.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Item 1</h5>
                    <div class="justify-content-center d-flex"><img src="img/stars.jpg"></div>
                    <p style="color:#FF0000"> $1.75</p>
                      <img src="img/cart.jpg" width="42">
                    <a href="#" class="btn btn-warning">Add to card</a>
                  </div>
                </div>
              </div>
              <div class="col-sm">
                <div class="text-center card" style="width: 15rem;">
                  <img src="img/placeholder.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Item 2</h5>
                    <div class="justify-content-center d-flex"><img src="img/stars.jpg"></div>
                    <p style="color:#FF0000"> $1.25</p>
                      <img src="img/cart.jpg" width="42">
                    <a href="#" class="btn btn-warning">Add to card</a>
                  </div>
                </div>
              </div>
              <div class="col-sm">
                <div class="text-center card" style="width: 15rem;">
                  <img src="img/placeholder.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Item 3</h5>
                    <div class="justify-content-center d-flex"><img src="img/stars.jpg"></div>
                    <p style="color:#FF0000"> $3.75</p>
                      <img src="img/cart.jpg" width="42">
                    <a href="#" class="btn btn-warning">Add to card</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--Carrusel oculto -->
          <div class="carousel-item ">
            <div class="row">
              <div class="col-sm">
                <div class="text-center card" style="width: 15rem;">
                  <img src="img/placeholder.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Item 4</h5>
                    <div class="justify-content-center d-flex"><img src="img/stars.jpg"></div>
                    <p style="color:#FF0000"> $2.00</p>
                      <img src="img/cart.jpg" width="42">
                    <a href="#" class="btn btn-warning">Add to card</a>
                  </div>
                </div>
              </div>
              <div class="col-sm">
                <div class="text-center card" style="width: 15rem;">
                  <img src="img/placeholder.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Item 5</h5>
                    <div class="justify-content-center d-flex"><img src="img/stars.jpg"></div>
                    <p style="color:#FF0000"> $1.75</p>
                      <img src="img/cart.jpg" width="42">
                    <a href="#" class="btn btn-warning">Add to card</a>
                  </div>
                </div>
              </div>
              <div class="col-sm">
                <div class="text-center card" style="width: 15rem;">
                  <img src="img/placeholder.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Item 6</h5>
                    <div class="justify-content-center d-flex"><img src="img/stars.jpg"></div>
                    <p style="color:#FF0000"> $1.5</p>
                    <img src="img/cart.jpg" width="42">
                    <a href="#" class="btn btn-warning">Add to card</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Boton next carrusel-->
    <div class="container-md p-5 justify-content-center d-flex">
      <div class="row pt-5">
        <button class="buttonRound" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span> View More</span>
        </button>
      </div>
    </div>
  </div>

  <!--About-->
  <div class="backgroundBlanco">
    <div id="about" class="container-md p-5">
      <div class="row pt-5">
        <h3 class="text-center pb-5 pt-5 h1 textDeepBlue">About Fresh Meal</h3>
      </div>
    </div>
    <div class="container justify-content-center padding75">
      <div class="row">
        <div class="col-md-6"><img src="img/meal.jpg" class="card-img-top" alt="..."></div>
        <div class="col-md-6">
          <h2>Freshmeal is a long established fact that a reader will be distracted.</h2>

          <p>
            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
            classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
            professor at Hampden-Sydney College in Virginia

          </p>
          <p>
            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
          </p>
          <button class="buttonRound btn-holder" type="button"> Read More</button>
        </div>
      </div>
    </div>
  </div>

  <!--Servicio-->
  <div class="backgroundGris ">
    <div id="servicios" class="container-md p-5">
      <div class="row pt-5">
        <h3 class="text-center  h1 textDeepBlue">Our services</h3>
      </div>
    </div>
    <div class="container justify-content-center d-flex padding75">
      <div class="row ">
        <div class="col-sm">
          <div class="text-center card" style="width: 15rem;">
            <img src="img/truck.png" class="card-img-top" alt="...">
            
            <div class="card-body">
              <h6 class="card-title textDeepBlue">Free Home Delivery</h6>
              <p class="card-text">Lorem ipsum is simply a dummy text of the printing and typesetting industry.</p>
              <a href="#" class="btn buttonRound">Read more</a>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="text-center card" style="width: 15rem;">
            <img src="img/maleta.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h6 class="card-title textGold">30 Days Return Services</h6>
              <p class="card-text">Lorem ipsum is simply a dummy text of the printing and typesetting industry.</p>
              <a href="#" class="btn buttonRoundGold">Read more</a>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="text-center card" style="width: 15rem;">
            <img src="img/money.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h6 class="card-title textDeepBlue">Money Back Guaranted</h6>
              <p class="card-text">Lorem ipsum is simply a dummy text of the printing and typesetting industry.</p>
              <a href="#" class="btn buttonRound">Read more</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Big -->
    <div class="backgroundBlue padding75">
      <div id="big" class="container-md p-5">
        <div class="row pt-5">
          <h3 class="text-center pb-5 pt-5 h1 text-white">Big Deals Of The Week</h3>
        </div>
      </div>
      <div class="container justify-content-center ">
        <img src="img/Deals.jpg" class="card-img-top" alt="...">
      </div>
    </div>

    <!--Blog-->
    <div class="backgroundGris">
      <div id="blog" class="container-md p-5">
        <div class="row pt-5">
          <h3 class="text-center pb-5 pt-5 h1 textDeepBlue">Lastest News From Blog</h3>
        </div>
      </div>
      <div class="container justify-content-center d-flex">
        <div class="row ">
          <div class="col-sm">
            <div class="text-center card" style="width: 30rem;">
              <img src="img/news 1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text d-flex justify-content-between">July 03, 2017</p>
                <h4 class="card-title textDeepBlue">Lorem ipsum is simply a dummy text of the printing</h4>
                <p class="card-text ">Lorem ipsum is simply a dummy text of the printing and typesetting industry.</p>
              </div>
            </div>
          </div>
          <div class="col-sm">
            <div class="text-center card" style="width: 30rem;">
              <img src="img/news 2.jpg"  class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text d-flex justify-content-between">July 01, 2017</p>
                <h4 class="card-title textDeepBlue ">Lorem ipsum is simply a dummy text of the printing</h4>
                <p class="card-text">Lorem ipsum is simply a dummy text of the printing and typesetting industry.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-md p-5 justify-content-center d-flex">
        <div class="row ">
          <button class="buttonRound" type="button">
            <span> View All</span>
          </button>
        </div>
      </div>
    </div>

    <!--Contacto-->
    <div class="backgroundGold ">
      <div id="contacto" class="container-md p-5">
        <div class="row pt-5">
          <h5 class="text-center textDeepBlue">Contacto</h5>
          <p class="card-text text-center">Lorem ipsum is simply a dummy text of the printing and typesetting industry.
          </p>
        </div>
      </div>
      <div class="container">
        <form method="POST" action="{{route('panelContactos.store')}}" role="form">
         @csrf
          <div class="form-group">
              <br />
            <input type="text" class="form-control textFieldSpaced" id="nombre" placeholder="Nombre" name="nombre" required>
          </div>
          <div class="form-group textFieldSpaced">
            <input type="text" class="form-control" id="rut" placeholder="Rut (Ej: 19694436-2)" name="rut" oninput="checkRut(this)" required>
           
          </div>
          <div class="form-group textFieldSpaced">
            <input type="text" class="form-control" id="direccion" placeholder="Direccion" name="direccion" required>
          </div>
          <div class="form-group textFieldSpaced">
            <input type="text" class="form-control" id="telefono" placeholder="Telefono, Solo numeros (Ej: 5690000000)" name="telefono" 
            onkeypress="return onlyNumberKey(event)"  required>
          </div>
          <div class="container justify-content-center d-flex">
            <div class="row ">
              
              <a href="/gracias"> 
                <button id="btnvalida" class=" buttonRound" type="submit">
                <span> Enviar </span>
              </button></a>


            </div>
          </div>
        </form>
      </div>
    </div>

    <!--Bottom info-->
    <div class="backgroundBlanco">
      <div class="container">
        <div class="row">
          <div class="col-md-6 backgroundBlanco ">
            <h4 class="justify-content-center d-flex">Call Us</h4>
            <p class="justify-content-center d-flex"> (+84) 123 456 789 </p>
           
            <h4 class="justify-content-center d-flex">E-mail</h4>
            <p class="justify-content-center d-flex">support@freshmeal.com</p>
           
            <h4 class="justify-content-center d-flex">Working Hours</h4>
            <p class="justify-content-center d-flex">Mon-Sat (8:00 am - 12:00 am) </p>
          </div>
          <div class="col-md-6 backgroundGris">
  
          </div>
        </div>
      </div>
    </div>

@include('layout.scripts')
@endsection

