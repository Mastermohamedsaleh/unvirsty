<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Smart Academy</title>
    <link rel="website icon" type="png" href="assets/images/logo2.png" >

    <link rel="stylesheet" href="{{ URL::asset('Styles/bootstrap.min.css') }}  " />
    <!-- <link rel="stylesheet" href="{{ URL::asset('Styles/style.css') }} " /> -->
    <link rel="stylesheet" href="{{ URL::asset('Styles/home.css') }} " />

    <script defer src="{{URL::asset('Script/bootstrap.bundle.min.js')}}"></script>
    <script defer src="{{URL::asset('Script/index.js')}} "></script>
  </head>

  <body>
    <!-- navbar -->



    <nav
      class="navbar navbar-expand-lg bg-body-tertiary position-sticky top-0 z-1"
    >
      <div class="container-fluid">
        <a class="navbar-brand ms-4" href="#"
          ><img
            src="Assets/images/logo.png"
            alt="Smart Academy logo"
            class="w-75 h-75"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0 fs-5">
            <li class="nav-item">
              <a
                class="nav-link active"
                aria-current="page"
                style="color: #00d084"
                href="{{url('/')}}"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active"  aria-current="page" href="{{url('about')}}"
                >About</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{url('fields')}}"
                >Fields</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{url('event')}}"
                >Events</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link active"
                aria-current="page"
                href="{{url('contactus')}}"
                >Contact us</a
              >
            </li>
            <li class="nav-item">
              <button
                class="border-0 p-1"
                style="background-color: inherit"
                id="srch-btn"
              >
                <img
                  id="srch-img"
                  style="height: 30px; width: 30px"
                  src="Assets/images/51.png"
                  alt=""
                />
              </button>
            </li>
          </ul>

          <a href="{{url('login')}}">
            <button class="button fs-5 mx-5 px-5 py-1" type="submit">
              Sign in
            </button></a
          >
        </div>
      </div>


      <div
        id="srch-toggler"
        class="position-absolute d-flex justify-content-center bg-body- collapse d-none"
        style="height: 50px; width: 100%; top: 76px; background-color: inherit"
      >
        <div class="">
          <input
            type="text"
            id="srch-field"
            class="form-control me-5"
            style="width: 420px"
            placeholder="Search"
            aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-default"
          />
        </div>
      </div>






    </nav>
    <!-- carousel -->
    <div
      id="carouselExampleAutoPlaying"
      class="carousel slide"
      data-bs-ride="carousel"
    >
      <div class="carousel-inner h-100">
        <div
          class="carousel-item c-item active"
          style="
            background: linear-gradient(
                to right,
                rgba(25, 47, 89, 0.9),
                rgba(0, 0, 0, 0)
              ),
              url(Assets/images/0.jpg) no-repeat center;
            background-size: cover;
          "
        >
          <div class="container h-100">
            <div class="h-100 w-50 d-flex flex-column justify-content-center">
              <h1 class="text-white fw-bold" style="font-size: 56px">
                University and College Education
              </h1>
              <p class="fs-3 txt-green">
                Empower Your Future at Smart Academy: Where Knowledge Meets
                Innovation
              </p>
              <a href="{{url('about')}}" style="width: fit-content"
                ><button class="button2 h-100 w-100 mt-4 px-4 fw-semibold fs-5">
                  Learn More
                </button></a
              >
            </div>
          </div>
        </div>
        <div
          class="carousel-item c-item"
          style="
            background: linear-gradient(
                to right,
                rgba(25, 47, 89, 0.9),
                rgba(0, 0, 0, 0)
              ),
              url(Assets/images/2.jpg) no-repeat center;
            background-size: cover;
          "
        >
          <div class="container h-100">
            <div class="h-100 w-50 d-flex flex-column justify-content-center">
              <h1 class="text-white fw-bold" style="font-size: 56px">
                A community that helps you learn
              </h1>
              <p class="fs-3 txt-green">
                Teaching Staff that helps you learn with ease and with high
                quality
              </p>
              <a href="{{url('about')}}" style="width: fit-content"
                ><button class="button2 h-100 w-100 mt-4 px-4 fw-semibold fs-5">
                  Learn More
                </button></a
              >
            </div>
          </div>
        </div>
        <div
          class="carousel-item c-item"
          style="
            background: linear-gradient(
                to right,
                rgba(25, 47, 89, 0.9),
                rgba(0, 0, 0, 0)
              ),
              url(Assets/images/1.jpg) no-repeat center;
            background-size: cover;
          "
        >
          <div class="container h-100">
            <div class="h-100 w-50 d-flex flex-column justify-content-center">
              <h1 class="text-white fw-bold" style="font-size: 56px">
                Huge library and more books
              </h1>
              <p class="fs-3 txt-green">
                Books on all fields to increase students' information
              </p>
              <a href="about.html" style="width: fit-content"
                ><button class="button2 h-100 w-100 mt-4 px-4 fw-semibold fs-5">
                  Learn More
                </button></a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Wide card -->
    <div
      class="container w-75 position-relative"
      style="
        box-shadow: 0px 5px 7px 0px #192f5912, 5px 0px 7px 0px #192f5912,
          -5px 0px 7px 0px #192f5912;
        top: -15px;
      "
    >
      <div class="row bg-white py-3 rounded-top-3">
        <div class="col-lg-3 col-md-6 col-sm-12 p-0">
          <div class="p-3 d-flex flex-row">
            <div class="h-100 w-auto d-flex mx-auto">
              <!-- img -->
              <div class="h-75 my-auto">
                <div
                  class="mx-3"
                  style="
                    height: 40px;
                    width: 40px;
                    background-image: url(Assets/images/3.png);
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center;
                  "
                ></div>
              </div>
              <!-- info -->
              <div class="d-flex flex-column">
                <span class="fw-bold">University Life</span>
                <span class="txt-gray">Over in Here</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 p-0">
          <div class="p-3 d-flex flex-row">
            <div class="h-100 w-auto d-flex mx-auto">
              <!-- img -->
              <div class="h-75 my-auto">
                <div
                  class="mx-3"
                  style="
                    height: 40px;
                    width: 40px;
                    background-image: url(Assets/images/4.png);
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center;
                  "
                ></div>
              </div>
              <!-- info -->
              <div class="d-flex flex-column">
                <span class="fw-bold">Athletics</span>
                <span class="txt-gray">Sports Club</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 p-0">
          <div class="p-3 d-flex flex-row">
            <div class="h-100 w-auto d-flex mx-auto">
              <!-- img -->
              <div class="h-75 my-auto">
                <div
                  class="mx-3"
                  style="
                    height: 40px;
                    width: 40px;
                    background-image: url(Assets/images/5.png);
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center;
                  "
                ></div>
              </div>
              <!-- info -->
              <div class="d-flex flex-column">
                <span class="fw-bold">Social</span>
                <span class="txt-gray">Overall in here</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 p-0">
          <div class="p-3 d-flex flex-row">
            <div class="h-100 w-auto d-flex mx-auto">
              <!-- img -->
              <div class="h-75 my-auto">
                <div
                  class="mx-3"
                  style="
                    height: 40px;
                    width: 40px;
                    background-image: url(Assets/images/6.png);
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center;
                  "
                ></div>
              </div>
              <!-- info -->
              <div class="d-flex flex-column">
                <span class="fw-bold">Graduation</span>
                <span class="txt-gray">Getting Diploma</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- what we offer cards -->
    <div class="container">
      <div class="row fs-1 fw-bold txt-darkblue my-4 mx-auto">
        <div class="fs-1 fw-bold txt-darkblue text-center">What We Offer</div>
      </div>
      <div class="row">
        <div class="col-lg-6 p-0">
          <img class="w-100" src="Assets/images/7.png" alt="" />
        </div>
        <div class="col-lg-6 p-0">
          <div
            class="card-body dark-layer h-100"
            style="
              background-image: url(Assets/images/9.png);
              background-size: cover;
            "
          >
            <div class="w-75 position-relative start-0 ps-5 pt-5">
              <h1 class="text-white">Safety First & Regular Classes</h1>
              <p class="fs-5 fw-semibold txt-gray">
                "Ensuring the safety and well-being of our university community
                is our top priority. Through a commitment to a 'Safety First'
                ethos, we aim to create an environment that fosters learning,
                innovation, and personal growth, while safeguarding the health
                and security of every student
              </p>
              <a href="{{url('about')}}"
                ><button class="button2 fw-semibold">Learn More</button></a
              >
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 p-0">
          <div
            class="card-body dark-layer h-100"
            style="
              background-image: url(Assets/images/10.png);
              background-size: cover;
            "
          >
            <div class="w-75 position-relative start-0 ps-5 pt-5">
              <h1 class="text-white">
                Certified Teachers & Sufficient Classrooms
              </h1>
              <p class="fs-5 fw-semibold txt-gray">
                Ensuring a conducive and enriching learning environment is our
                top priority. We proudly affirm that all our educators are
                certified professionals, bringing a wealth of expertise to the
                classroom. Additionally, we are committed to providing
                sufficient and well-equipped classrooms
              </p>
              <a href="{{url('about')}}"
                ><button class="button2 fw-semibold mb-2">Learn More</button></a
              >
            </div>
          </div>
        </div>

        <div class="col-lg-6 p-0">
          <img class="w-100 h-100" src="Assets/images/18.jpg" alt="" />
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 p-0">
          <img class="w-100" src="Assets/images/19.jpg" alt="" />
        </div>
        <div class="col-lg-6 p-0">
          <div
            class="card-body dark-layer h-100"
            style="
              background-image: url(Assets/images/9.png);
              background-size: cover;
            "
          >
            <div class="w-75 position-relative start-0 ps-5 pt-5">
              <h1 class="text-white">Creative Lessons & Sports Facilities</h1>
              <p class="fs-5 fw-semibold txt-gray">
                "Enriching the University Experience: Unleashing Creativity
                through Innovative Lessons and Fostering Physical Well-being
                with State-of-the-Art Sports Facilities.
              </p>
              <a href="{{url('about')}}"
                ><button class="button2 fw-semibold">Learn More</button></a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About university -->
    <div class="about-university py-3">
      <div class="container z-2">
        <div class="row my-5 py-5">
          <div class="col-sm-5">
            <div class="d-flex flex-column my-4">
              <div class="heading fs-1 fw-semibold txt-green mb-5">
                About Our University
              </div>
              <img class="w-50" src="Assets/images/logo2.png" alt="" />
            </div>
          </div>
          <div class="col-sm-7">
            <div>
              <div class="heading text-white">
                <p class="fs-1 fw-semibold my-2">
                  Smart Academy: Empowering Minds, Shaping Futures
                </p>

                <p class="fs-4 my-5 txt-gray">
                  At Smart Academy, we believe in the transformative power of
                  education to unlock the full potential of individuals and
                  drive positive change in the world. Our university is
                  dedicated to fostering a dynamic learning environment that
                  blends academic excellence with real-world applications,
                  equipping students with the skills and knowledge needed to
                  thrive in a rapidly evolving global landscape.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row my-4">
          <div class="col-sm-3">
            <div class="m-3 p-2 text-center">
              <div class="card border-0 bg-transparent">
                <div class="span fs-1 fw-semibold txt-green" id="num">{{App\Models\Doctor::count()}}</div>
                <div class="span fs-3 text-white">Certified Professors</div>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="m-3 p-2 text-center">
              <div class="card border-0 bg-transparent">
                <div class="span fs-1 fw-semibold txt-green" id="num">{{App\Models\Student::count()}}</div>
                <div class="span fs-3 text-white">Students</div>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="m-3 p-2 text-center">
              <div class="card border-0 bg-transparent">
                <div class="span fs-1 fw-semibold txt-green" id="num">{{App\Models\College::count()}}</div>
                <div class="span fs-3 text-white">Education Fields</div>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="m-3 p-2 text-center">
              <div class="card border-0 bg-transparent">
                <div class="span fs-1 fw-semibold txt-green" id="num">40</div>
                <div class="span fs-3 text-white">Awards Won</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- our fields -->
    <div class="container">
      <div class="row">
        <span class="fs-1 fw-semibold txt-darkblue text-center py-5"
          >Our Fields</span
        >
      </div>
      <div class="row">
        <div class="col-lg-6 col-sm-12 p-0">
          <div
            class="hover1 card rounded-0"
            style="
              background-image: url(./Assets/images/12.png);
              background-size: cover;
              height: 500px;
            "
          >
            <div
              class="card2 card-body my-3 mx-3 px-2 py-5"
              style="display: none"
            >
              <span class="span1 fs-1 txt-darkblue fw-semibold">
                Electric Engineering
              </span>
              <p class="mt-4 fs-4 w-75 fw-semibold text-white">
                Electrical engineers are responsible for creating innovative
                solutions in areas such as power generation, distribution,
                communication, control systems, and electronic circuits.
              </p>
              <a href="{{url('fields')}}">
                <button
                  class="button1 mb-3 fw-semibold position-absolute bottom-25"
                >
                  Read More
                </button></a
              >
            </div>

            <div class="card1 card-body position-absolute bottom-0">
              <span class="px-2 my-3 fs-1 text-white fw-semibold"
                >Electric Engineering</span
              >
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-sm-12 p-0">
          <div
            class="hover1 hover2 card rounded-0"
            style="
              background-image: url(./Assets/images/13.png);
              background-size: cover;
              height: 500px;
            "
          >
            <div
              class="card2 card-body my-3 mx-3 px-2 py-5"
              style="display: none"
            >
              <span class="span1 fs-1 txt-green fw-semibold">
                Computer Science
              </span>
              <p class="mt-4 fs-4 w-75 fw-semibold text-white">
                Computer Science is a field that encompasses the study of
                computation, algorithms, data structures.
              </p>

              <a href="{{url('fields')}}">
                <button
                  class="button1 mb-3 fw-semibold position-absolute bottom-25"
                >
                  Read More
                </button></a
              >
            </div>

            <div class="card1 card-body position-absolute bottom-0">
              <span class="px-2 my-3 fs-1 text-white fw-semibold"
                >Computer Science</span
              >
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-sm-12 p-0">
          <div
            class="hover1 hover2 card rounded-0"
            style="
              background-image: url(./Assets/images/14.png);
              background-size: cover;
              height: 500px;
            "
          >
            <div
              class="card2 card-body my-3 mx-3 px-2 py-5"
              style="display: none"
            >
              <span class="span1 fs-1 txt-green fw-semibold">
                Architectural engineering
              </span>
              <p class="mt-4 fs-4 w-75 fw-semibold text-white">
                Architectural engineering is a multidisciplinary field that
                integrates principles from architecture and engineering to
                design and create buildings and other structures.
              </p>
              <a href="{{url('fields')}}">
                <button
                  class="button1 mb-3 fw-semibold position-absolute bottom-25"
                >
                  Read More
                </button></a
              >
            </div>

            <div class="card1 card-body position-absolute bottom-0">
              <span class="px-2 my-3 fs-1 text-white fw-semibold"
                >Architectural engineering</span
              >
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-sm-12 p-0">
          <div
            class="hover1 card rounded-0"
            style="
              background-image: url(./Assets/images/15.png);
              background-size: cover;
              height: 500px;
            "
          >
            <div
              class="card2 card-body my-3 mx-3 px-2 py-5"
              style="display: none"
            >
              <span class="span1 fs-1 txt-darkblue fw-semibold">
                Business Administration
              </span>
              <p class="mt-4 fs-4 w-75 fw-semibold text-white">
                Business Administration is a broad field of study and practice
                that encompasses various principles, strategies, and activities
                related to the management and operation of organizations.
              </p>
              <a href="{{url('fields')}}">
                <button
                  class="button1 mb-3 fw-semibold position-absolute bottom-25"
                >
                  Read More
                </button></a
              >
            </div>

            <div class="card1 card-body position-absolute bottom-0">
              <span class="px-2 my-3 fs-1 text-white fw-semibold"
                >Business Administration</span
              >
            </div>
          </div>
        </div>
      </div>
    </div>




    <!-- certified professors -->
    <div class="container">
      <div class="row">
        <span class="fw-semibold fs-1 txt-darkblue text-center py-4"
          >Certified Professors</span
        >
      </div>
      <div class="row py-4">

      <?php $doctors = App\Models\Doctor::take(3)->get(); ?>


@foreach($doctors as $doctor)

@if( $doctor->image_name == 'default.jpg')
<?php $image="assets/images/default.jpg"; ?>
@else
<?php  $image = '/image/'.$doctor->image_name ;?>         
@endif

        <div class="col-lg-4 col-md-6 col-sm-12 py-3">
          <div
            class="hover2 hover0 card-body rounded-4 position-relative"
            style="
              background-image: url({{$image}});
              background-size: cover;
              background-repeat: no-repeat;
              background-position: bottom 75% right 0px;
              height: 370px;
            "
          >
            <div class="position-absolute bottom-0 p-3">
              <span class="fs-3 fw-semibold text-white"> {{$doctor->name}} </span>
              <p class="hover2e fs-5 fw-normal txt-green">
             @php $course = \App\Models\Course::Where('doctor_id',$doctor->id)->first(); @endphp
             Professor of {{$course->college->name}}
              </p>
            </div>
          </div>
        </div>

@endforeach
            </div>

            </div>

    <!-- our events -->
    <div
      class="dark-layer py-2"
      style="
        background-image: url(Assets/images/23.jpg);
        background-size: cover;
      "
    >
      <div class="container py-3">
        <div class="row pb-4 text-center">
          <h1 class="fw-semibold text-white">Our Events</h1>
          <p class="txt-gray fs-4 fw-semibold py-2 px-5">
            We are excited to announce a series of upcoming events at
            <span class="txt-green">Smart Academy</span> , aimed at fostering a
            vibrant and engaging campus community. These events are designed to
            cater to the diverse interests and passions of our students,
            faculty, and staff. Please find below the details for each event:
          </p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12 my-4">
            <!-- image -->
            <div
              class="rounded-4 position-relative w-100 my-4"
              style="
                width: 410px;
                height: 410px;
                background-image: url(Assets/images/24.jpg);
                background-position: center;
                background-size: cover;
              "
            >
              <div
                class="text-white text-center fs-4 px-2 py-4 position-absolute bottom-0"
                style="
                  background-color: #00d084;
                  width: fit-content;
                  height: fit-content;
                  border-bottom-left-radius: inherit;
                "
              >
                13 <br />
                JUN <br />
                2023
              </div>
            </div>
            <!-- info -->
            <div class="">
              <span class="fs-2 text-white"> Technology Event</span>
              <p class="fs-5 fw-bold txt-gray w-100">
                Lectures on technology, its development and its impact on modern
                society, and talk about the development of artificial
                intelligence
              </p>
              <a href="{{url('event')}}"
                ><button class="button2 fw-semibold">Learn More</button></a
              >
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 my-4">
            <!-- image -->
            <div
              class="rounded-4 position-relative w-100 my-4"
              style="
                width: 410px;
                height: 410px;
                background-image: url(Assets/images/25.jpg);
                background-position: center;
                background-size: cover;
              "
            >
              <div
                class="text-white text-center fs-4 px-2 py-4 position-absolute bottom-0"
                style="
                  background-color: #00d084;
                  width: fit-content;
                  height: fit-content;
                  border-bottom-left-radius: inherit;
                "
              >
                23 <br />
                JUN <br />
                2023
              </div>
            </div>
            <!-- info -->
            <div class="">
              <span class="fs-2 text-white"> Free Palestine</span>
              <p class="fs-5 fw-bold txt-gray w-100">
                Gatherings to stop what is happening in Palestine and support
                the Palestinian cause
                <br />
                <span class="txt-gray">
                  #Palestine will remain a free Arab state</span
                >
              </p>
              <a href="{{url('event')}}"
                ><button class="button2 fw-semibold">Learn More</button></a
              >
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 my-4">
            <!-- image -->
            <div
              class="rounded-4 position-relative w-100 my-4"
              style="
                width: 410px;
                height: 410px;
                background-image: url(Assets/images/26.jpg);
                background-position: center;
                background-size: cover;
              "
            >
              <div
                class="text-white text-center fs-4 px-2 py-4 position-absolute bottom-0"
                style="
                  background-color: #00d084;
                  width: fit-content;
                  height: fit-content;
                  border-bottom-left-radius: inherit;
                "
              >
                30 <br />
                JUN <br />
                2023
              </div>
            </div>
            <!-- info -->
            <div class="">
              <span class="fs-2 text-white"> Musical party</span>
              <p class="fs-5 fw-bold txt-gray w-100">
                A music party to entertain students and enjoy some great music
                with your friends at the university With various musical bands
              </p>
              <a href="{{url('event')}}"
                ><button class="button2 fw-semibold">Learn More</button></a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Students says about Us -->
    <div class="container py-3">
      <div class="row">
        <h1 class="fw-semibold txt-darkblue text-center">
          Students Say About Us
        </h1>
      </div>
      <div class="row w-100">
        <div class="col-lg-12 col-sm-12">
          <div
            id=" carouselExampleAutoPlaying"
            class="carousel slide carousel-dark mx-auto"
            data-bs-ride="carousel"
          >
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div
                  class="d-flex flex-wrap align-items-center justify-content-center"
                >
                  <div class="d-flex align-items-center py-4 w-50">
                    <div>
                      <img
                        class="mx-2"
                        style="border-radius: 50%; height: 117px; width: 117px"
                        src="Assets/images/27.jpg"
                      />
                    </div>
                    <div class="w-auto d-flex flex-column">
                      <p>
                        The academic challenges are intense but rewarding The
                        professors are approachable and genuinely care about
                        your success.
                      </p>
                      <span class="fs-5">Henry Dee</span>
                      <span class="txt-green">Student</span>
                    </div>
                  </div>
                </div>

                <!--  -->
              </div>
              <div class="carousel-item active">
                <div
                  class="d-flex flex-wrap align-items-center justify-content-center"
                >
                  <div class="d-flex align-items-center py-4 w-50">
                    <div>
                      <img
                        class="mx-2"
                        style="border-radius: 50%; height: 117px; width: 117px"
                        src="Assets/images/27.jpg"
                      />
                    </div>
                    <div class="w-auto d-flex flex-column">
                      <p>
                        The academic challenges are intense but rewarding The
                        professors are approachable and genuinely care about
                        your success.
                      </p>
                      <span class="fs-5">Henry Dee</span>
                      <span class="txt-green">Student</span>
                    </div>
                  </div>
                </div>

                <!--  -->
              </div>
              <!-- indicators -->
            </div>
            <div class="carousel-indicators carousel-custom-indicators">
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
            </div>
          </div>
        </div>
      </div>
    </div>





    <?php   $setting = App\Models\Setting::all();     ?>


    <!-- Footer -->
    @foreach($setting as $s)

    <footer
      class="w-100"
      style="
        background-image: url(Assets/images/Vector.png);
        background-color: #181818;
        box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.7);
      "
    >
      <div class="container py-2">
        <div class="row">
          <div class="col-lg-3">
            <div class="container">
              <a class="navbar-brand" href="#"
                ><img
                  src="assets/images/logo3.png"
                  alt="Smart Academy logo"
                  class="w-100 h-100 py-2"
              /></a>
              <!-- google maps location -->
              <div class="card my-2 border">
                <iframe
                  class=""
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3455.468998018955!2d31.432870312056416!3d29.99468687484426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145840c63ce95b0d%3A0x7db37f52d34a4d19!2sThe%20Higher%20Institute%20For%20Applied%20Arts%20-%205th%20Compound!5e0!3m2!1sen!2seg!4v1713969931046!5m2!1sen!2seg"
                  style="border: 3px solid #00d084; border-radius: 5px"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
              </div>
              <div class="fs-5 color text-white py-1">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="22"
                  height="22"
                  fill="currentColor"
                  class="bi bi-envelope-at-fill mb-1"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671"
                  />
                  <path
                    d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791"
                  />
                </svg>
                <a
                  class="text-decoration-none"
                  style="color: #fdfdfd"
                  href="mailto:info@cis.edu.eg"
                  target="_blank"
                  >{{$s->email}}</a
                >
              </div>
              <div class="fs-5 color fw-bold py-1" style="color: #fdfdfd">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="22"
                  height="22"
                  fill="currentColor"
                  class="bi bi-telephone-fill mb-1"
                  viewBox="0 0 16 16"
                >
                  <path
                    fill-rule="evenodd"
                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"
                  ></path>
                </svg>
                {{$s->phone}}
              </div>
            </div>
          </div>
          <div class="col-lg-3 py-5">
            <div class="container">
              <div class="fs-6 fw-bold py-2 px-1 text-white">About</div>
              <div style="border-top: 3px solid #00d084"></div>
              <ol
                class="txt-gray fw-normal px-1 py-2"
                style="list-style-type: none"
              >
                <li>Safety First</li>
                <li>Regular Classes</li>
                <li>Certified Teachers</li>
                <li>Sufficient Classrooms</li>
                <li>Sports facilities</li>
              </ol>
            </div>
          </div>
          <div class="col-lg-3 py-5">
            <div class="container">
              <div class="fs-6 fw-bold py-2 px-1 text-white">Fields</div>
              <div style="border-top: 3px solid #00d084"></div>
              <ol
                class="txt-gray fw-normal px-1 py-2"
                style="list-style-type: none"
              >
                <li>Electric Engineering</li>
                <li>Computer Science</li>
                <li>Archetictural Engineering</li>
                <li>Business Adminstration</li>
              </ol>
            </div>
          </div>
          <div class="col-lg-3 py-5">
            <div class="container">
              <div class="fs-6 fw-bold py-2 px-1 text-white">Contact us</div>
              <div style="border-top: 3px solid #00d084"></div>
              <ol
                class="txt-gray fw-normal px-1 py-2"
                style="list-style-type: none"
              >
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="18"
                    height="18"
                    fill="currentColor"
                    class="bi bi-envelope-at-fill mb-1"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671"
                    />
                    <path
                      d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791"
                    />
                  </svg>
                  <a
                    class="text-decoration-none txt-gray"
                    href="mailto:info@cis.edu.eg"
                    target="_blank"
                    >{{$s->email}}</a
                  >
                </li>
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="18"
                    height="18"
                    fill="currentColor"
                    class="bi bi-telephone-fill mb-1"
                    viewBox="0 0 16 16"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"
                    ></path>
                  </svg>
                  {{$s->phone}}
                </li>
                <li>FAQs</li>
                <li>Prvacy Policy</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div
        class="row w-100 text-white m-0 py-3 px-2"
        style="background-color: #272727"
      >
        <div class="container d-flex flex-row justify-content-between">
          <p class="m-0 mx-3 fs-5">Copyright &#169;2024 All rights reserved</p>
          <div class="">
            <a
              class="text-decoration-none txt-green"
              style="text-decoration: none"
              target="_blank"
              href="{{$s->link_facebook}}"
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                width="30"
                height="30"
                fill="currentColor"
                class="bi bi-facebook mx-2"
                viewBox="0 0 16 16"
              >
                <path
                  d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"
                /></svg
            ></a>
            <a
              class="text-decoration-none txt-green"
              target="_blank"
              href="{{$s->link_linked_in}}"
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                width="30"
                height="30"
                fill="currentColor"
                class="bi bi-linkedin mx-2"
                viewBox="0 0 16 16"
              >
                <path
                  d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"
                /></svg
            ></a>
            <a
              href="https://www.youtube.com/channel/UCoRUJ2St0Bx7WjKdbTqOvkQ"
              class="text-decoration-none txt-green"
              target="_blank"
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                width="30"
                height="30"
                fill="currentColor"
                class="bi bi-youtube mx-2"
                viewBox="0 0 16 16"
              >
                <path
                  d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"
                /></svg
            ></a>
          </div>
        </div>
      </div>
    </footer>
    @endforeach
  </body>
</html>








