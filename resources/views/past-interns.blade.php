@extends('layouts.core')
@section('title', 'Past Interns')
@section('content')
@section('nav')
@parent
      <div class="container intern-body">

              <!-- Header -->
              <header class="head">

                  <h3>Our Past Interns</h3>

              </header>

              <!-- Logo Slider  -->
              <div >
              <div class="wrapper">
              <ul class="carousel" data-target="carousel">
                <li class="card" data-target="card">
                      <a href="https://www.hotels.ng">
                          <img src="{{ asset('img/interns/freeme.png')}}" alt="hotels.ng logo" target="_blank" >
                      </a>
                </li>
                <li class="card" data-target="card">
                      <a href="https://hotels.ng">
                          <img src="{{ asset('img/interns/andela.png')}}" alt="andela logo" target="_blank" >
                      </a>
                </li>
                <li class="card" data-target="card">
                      <a href="https://hotels.ng">
                          <img src="{{ asset('img/interns/freeme.png')}}" alt="freeme logo" target="_blank" >
                      </a>
                </li>
                <li class="card" data-target="card">
                      <a href="https://hotels.ng">
                          <img src="{{ asset('img/interns/kodehauz-logo.png')}}" alt="kodehauz-logo" target="_blank" >
                      </a>
                </li>
                <li class="card" data-target="card">
                      <a href="https://hotels.ng">
                          <img src="{{ asset('img/interns/sprinble.png')}}" alt="sprinble logo" target="_blank" >
                      </a>
                </li>
                <li class="card" data-target="card">
                      <a href="https://hotels.ng">
                          <img src="{{ asset('img/interns/Tizeti.png')}}" alt="Tizeti logo" target="_blank" >
                      </a>
                </li>
                <li class="card" data-target="card">
                      <a href="https://www.hotels.ng">
                          <img src="{{ asset('img/interns/hotels.ng.png')}}" alt="hotels.ng logo" target="_blank" >
                      </a>
                </li>
                <li class="card" data-target="card">
                      <a href="https://hotels.ng">
                          <img src="{{ asset('img/interns/andela.png')}}" alt="andela logo" target="_blank" >
                      </a>
                </li>
                <li class="card" data-target="card">
                      <a href="https://hotels.ng">
                          <img src="{{ asset('img/interns/freeme.png')}}" alt="freeme logo" target="_blank" >
                      </a>
                </li>
                <li class="card" data-target="card">
                      <a href="https://hotels.ng">
                          <img src="{{ asset('img/interns/kodehauz-logo.png')}}" alt="kodehauz-logo" target="_blank" >
                      </a>
                </li>
                <li class="card" data-target="card">
                      <a href="https://hotels.ng">
                          <img src="{{ asset('img/interns/sprinble.png')}}" alt="sprinble logo" target="_blank" >
                      </a>
                </li>
                <li class="card" data-target="card">
                      <a href="https://hotels.ng">
                          <img src="{{ asset('img/interns/Tizeti.png')}}" alt="Tizeti logo" target="_blank" >
                      </a>
                </li>
                <li class="card" data-target="card">
                    <a href="https://hotels.ng">
                      <img src="{{ asset('img/interns/hotels.ng.png')}}" alt="hotels.ng logo" target="_blank" >
                    </a>
                </li>
                <li class="card" data-target="card">
                    <a href="https://hotels.ng">
                      <img src="{{ asset('img/interns/hotels.ng.png')}}" alt="hotels.ng logo" target="_blank" >
                    </a>
                </li>
                <li class="card" data-target="card">
                    <a href="https://hotels.ng">
                      <img src="{{ asset('img/interns/freeme.png')}}" alt="hotels.ng logo" target="_blank" >
                    </a>
                </li>
              </ul>
              <div class="button-wrapper">
                <button data-action="slideLeft">&lt;</button>
                <button data-action="slideRight">&gt;</button>
              </div>
            </div>
          </div>

              <!-- Filters -->
              <!-- <div class="row filters">
                  <select class="select-css">
                      <option>Company</option>
                      <option>Andela</option>
                      <option>Hotels.ng</option>
                      <option>Gloopro</option>
                      <option>Tizeti</option>
                      <option>Sprinble</option>
                      <option>Oranges</option>
                      <option>Oranges</option>
                      <option>Oranges</option>
                  </select>
                  <select class="select-css">
                      <option>Stack</option>
                      <option>Frontend</option>
                      <option>Backend</option>
                      <option>Fullstack</option>
                      <option>Designer</option>
                  </select>
                  <select class="select-css">
                      <option>Internship</option>
                      <option>Internship 1</option>
                      <option>Internship 2</option>
                      <option>Internship 3</option>
                      <option>Internship 4</option>
                      <option>Internship 4</option>
                  </select>


              </div> -->

              <div class="row cards interns">

      <?php

        $data = file_get_contents(storage_path('/storage/data.json'));
        $interns = json_decode($data);

        foreach($interns as $intern){

          echo "<div class='intern'><img class='card-img-top' style='object-fit: cover' src='".$intern->picture."' alt='Card image cap'><p class='name'>".$intern->name."</p>
          <p class='stack'>".$intern->stack."<br />".$intern->role." @<a style='font-size: 12px' href='".$intern->company_url."'>".$intern->company."</a></p></div>";

        }
      ?>



              </div>


      	</div>



@endsection


<script>
// Select the carousel you'll need to manipulate and the buttons you'll add events to
const carousel = document.querySelector("[data-target='carousel']");
const card = carousel.querySelector("[data-target='card']");
const leftButton = document.querySelector("[data-action='slideLeft']");
const rightButton = document.querySelector("[data-action='slideRight']");

// Prepare to limit the direction in which the carousel can slide,
// and to control how much the carousel advances by each time.
// In order to slide the carousel so that only three cards are perfectly visible each time,
// you need to know the carousel width, and the margin placed on a given card in the carousel
const carouselWidth = carousel.offsetWidth;
const cardStyle = card.currentStyle || window.getComputedStyle(card)
const cardMarginRight = Number(cardStyle.marginRight.match(/\d+/g)[0]);

// Count the number of total cards you have
const cardCount = carousel.querySelectorAll("[data-target='card']").length;

// Define an offset property to dynamically update by clicking the button controls
// as well as a maxX property so the carousel knows when to stop at the upper limit
let offset = 0;
const maxX = -((cardCount / 5) * carouselWidth +
(cardMarginRight * (cardCount / 5)) -
carouselWidth - cardMarginRight);


// Add the click events
leftButton.addEventListener("click", function() {
  if (offset !== 0) {
    offset += carouselWidth + cardMarginRight;
    carousel.style.transform = `translateX(${offset}px)`;
  }
})

rightButton.addEventListener("click", function() {
  if (offset !== maxX) {
    offset -= carouselWidth + cardMarginRight;
    carousel.style.transform = `translateX(${offset}px)`;
  }
})
</script>
@endsection
