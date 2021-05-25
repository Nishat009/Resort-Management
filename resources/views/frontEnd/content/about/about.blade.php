@extends('frontend.main')

@section('content')

<section class="container">
<div class="row pt-5 mt-5">
    <div class="col-md-6 slider" >
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
    
  </div>
  <div class="carousel-inner h-50">
    <div class="carousel-item active">
      <img style="height:400px " src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cmVzb3J0fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="d-block w-100 image" alt="...">
      <div class="carousel-caption d-md-block">
        <h3>A best place to enjoy your life</h3>
        <p>Some representative placeholder content for the first slide. Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis consectetur asperiores obcaecati. Eveniet ullam magnam tenetur rerum maiores eius, quisquam harum quam et itaque sapiente voluptatibus earum similique commodi at.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img style="height:400px  " src="https://images.unsplash.com/photo-1582719508461-905c673771fd?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8cmVzb3J0fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="d-block w-100 image" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>We provide Top Class Service</h3>
        <p>Some representative placeholder content for the second slide.Some representative placeholder content for the second slide.Some representative placeholder content for the second slide. Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img style="height:400px " src="https://images.unsplash.com/photo-1542568190-441f9553ca64?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzF8fHJlc29ydHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="d-block w-100 image" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>Our Room are best for staying</h3>
        <p>Some representative placeholder content for the third slide. Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis ex non repellendus voluptatum sunt, eius numquam deserunt qui veritatis magnam ea velit laboriosam possimus quaerat cum voluptatem. Inventore, reprehenderit nam!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img style="height:400px " src="https://images.unsplash.com/photo-1496417263034-38ec4f0b665a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=751&q=80" class="d-block w-100 image" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>Enjoy the Top class view</h3>
        <p>Some representative placeholder content for the third slide. Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, voluptatem! Corrupti soluta, laboriosam, exercitationem voluptate quas nam explicabo debitis facere, corporis dignissimos placeat perspiciatis non sunt. Rerum asperiores tempore dolorum!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img style="height:400px " src="https://images.unsplash.com/photo-1504754524776-8f4f37790ca0?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>Our Resort is our pride</h3>
        <p>Some representative placeholder content for the third slide. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, sapiente fuga natus molestias dicta optio enim asperiores nisi non libero ullam nam, obcaecati architecto veniam inventore aut pariatur minus eos!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img style="height:400px " src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="d-block w-100 image" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>Enjoy our special service</h3>
        <p>Some representative placeholder content for the third slide. Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure minima eos sapiente, ullam sit cupiditate beatae temporibus inventore dicta ab non sint animi autem commodi. Facere magni molestiae officiis voluptate!</p>
      </div>
    </div>
    
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
    <div class="col-md-6">
        <div class="card box">
          <div class="card-body">
            <h2 class="welcome">Welcome to</h2>
            <h1 class="logo-words"><ion-icon class="logo-icon" name="fast-food"></ion-icon>LastLine <ion-icon class="logo-icon" name="beer"></ion-icon></h1>
            <p class="slogan">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis omnis possimus necessitatibus, ipsum sed veritatis nobis inventore architecto nulla quos accusantium repudiandae. Blanditiis quam autem officiis ex, odio ipsa animi.</p>
          </div>
        </div>
      </div>
   
    </div>
</section>


<section class="container" id="about-section mt-5">

<h1 class="text-center about">About Us</h1>

<p class="about-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae provident perferendis pariatur optio eaque quia vero dicta ut nihil laudantium nulla tempora maiores, odit voluptatem ipsa officia assumenda porro veritatis sed fugiat corrupti? Hic voluptas accusantium officia voluptatem cumque ducimus molestias facilis quasi saepe magni, laudantium quam doloremque, exercitationem nesciunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae provident perferendis pariatur optio eaque quia vero dicta ut nihil laudantium nulla tempora maiores, odit voluptatem ipsa officia assumenda porro veritatis sed fugiat corrupti? Hic voluptas accusantium officia voluptatem cumque ducimus molestias facilis quasi saepe magni, laudantium quam doloremque, exercitationem nesciunt!</p>
</section>


@endsection