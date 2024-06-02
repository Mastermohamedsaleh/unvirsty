<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Smart Academy</title>

    <link rel="website icon" type="png" href="assets/images/logo2.png" >


<link rel="stylesheet" href="{{ URL::asset('Styles/bootstrap.min.css') }}  " />
<link rel="stylesheet" href="{{ URL::asset('Styles/home.css') }} " />
<script defer src="{{ URL::asset('Script/bootstrap.bundle.min.js') }}  "></script>
<script defer src="{{ URL::asset('Script/signin.js') }}"></script>
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
              <a class="nav-link active" aria-current="page" href="{{url('/')}}"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{url('about')}}"
                >About</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{url('fields')}}"
                >Fields</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{url('events')}}"
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
              <button type="button" class="btn">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-search"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"
                  ></path>
                </svg>
              </button>
            </li>
          </ul>

          <a
            class="button fs-5 mx-5 px-5 py-1"
            href="{{route('login')}}"
            type="submit"
            style=" text-decoration:none"
          >
            Sign in
</a>
        </div>
      </div>
    </nav>
    <!-- signin form -->
    <div class="container-fluid d-flex flex-column" style="min-height: 100vh">
      <div class="row flex-grow-1">
        <div class="col-lg-4 px-0 bg-table vh-100 d-flex flex-column">
          <div class="mx-auto pt-5 h-100" style="width: 85%">
            <div class="w-75">
              <div class="fw-bold fs-3 pb-3" style="color: #1e1e1e">
                Sign in
              </div>
              <!-- account type selector -->
              <div
                class="py-1 px-1 mt-3 rounded-pill d-flex"
                style="border: 3px solid #192f59"
              >
                <button
                  type="button"
                  id="mybtn1"
                  class="bg-green txt-darkblue w-50 py-1 px-2 fs-4 fw-semibold border-0 rounded-pill"
                  style="color: white"
                >
                  Student
                </button>
                <button
                  type="button"
                  id="mybtn2"
                  class="txt-darkblue w-50 py-1 fs-4 fw-semibold border-0 rounded-pill"
                  style="background-color: transparent"
                >
                  Staff
                </button>
              </div>
              <select
                id="frmSlct"
                onchange="accountTypeChanger()"
                class="form-select my-1 pb-3 px-0 pt-3 border-0 rounded-0 txt-gray fw-bold"
                style="
                  border-bottom: 1px solid black !important;
                  visibility: hidden;
                "
                aria-label="Default select example"
              >
                <option selected>type of account</option>
                <option value="doctor-form">Doctor</option>
                <option value="admin-form">Admin</option>
                <option value="accountant-form">Accountant</option>
              </select>
            </div>
            <!-- student (default) form -->
            <form action="{{route('student.login')}}"  method="post"  class="position-relative z-0 w-75 my-3" id="student-form">
                @csrf
              <!--form Data  -->
              <div
                class="form-floating mb-3"
                style="border-bottom: 1px solid black !important"
              >
                <input
                  type="email"
                  class="form-control border-0"
                  style="background-color: inherit"
                  id="floatingInput"
                  placeholder="name@example.com"
                  name="email"
                />
                <label class="fw-bold txt-gray" for="floatingInput"
                  >Email address</label
                >
              </div>
              <div
                class="form-floating mb-3"
                style="border-bottom: 1px solid black !important"
              >
                <input
                  type="password"
                  class="form-control border-0"
                  style="background-color: inherit"
                  id="floatingName"
                  placeholder="Namee"
                  name="password"
                />
                <label class="fw-bold txt-gray" for="floatingName"
                  >Password</label
                >
              </div>
              <!--  -->
              <button
                type="submit"
                class="bg-green text-white border-0 fw-bold fs-6 w-50 py-3 mt-lg-3 rounded-4"
              >
                Sign in
              </button>
            </form>
            <!-- Doctor form -->
            <form
            action="{{route('doctor.login')}}"  method="post"
              class="position-relative z-0 w-75 my-3"
              id="doctor-form"
              style="display: none"
            >
            @csrf
              <!--form Data  -->
              <div
                class="form-floating mb-3"
                style="border-bottom: 1px solid black !important"
              >
                <input
                  type="email"
                  class="form-control border-0"
                  style="background-color: inherit"
                  id="floatingInput"
                  placeholder="name@example.com"
                  name="email"
                />
                <label class="fw-bold txt-gray" for="floatingInput"
                  >Email address</label
                >
              </div>
              <div
                class="form-floating mb-3"
                style="border-bottom: 1px solid black !important"
              >
                <input
                  type="password"
                  class="form-control border-0"
                  style="background-color: inherit"
                  id="floatingName"
                  placeholder="Namee"
                  name="password"
                />
                <label class="fw-bold txt-gray" for="floatingName"
                  >Password</label
                >
              </div>
              <!--  -->
              <button
                type="submit"
                class="bg-green text-white border-0 fw-bold fs-6 w-50 py-3 mt-lg-3 rounded-4"
              >
                Sign in
              </button>
            </form>
            <!-- Admin form -->
            <form
            action="{{route('admin.login')}}"  method="post"
              class="position-relative z-0 w-75 my-3"
              id="admin-form"
              style="display: none"
            >
            @csrf
              <!--form Data  -->
              <div
                class="form-floating mb-3"
                style="border-bottom: 1px solid black !important"
              >
                <input
                  type="email"
                  class="form-control border-0"
                  style="background-color: inherit"
                  id="floatingInput"
                  placeholder="name@example.com"
                  name="email"
                />
                <label class="fw-bold txt-gray" for="floatingInput"
                  >Email address</label
                >
              </div>
              <div
                class="form-floating mb-3"
                style="border-bottom: 1px solid black !important"
              >
                <input
                  type="password"
                  class="form-control border-0"
                  style="background-color: inherit"
                  id="floatingName"
                  placeholder="Namee"
                  name="password"
                />
                <label class="fw-bold txt-gray" for="floatingName"
                  >Password</label
                >
              </div>
              <!--  -->
              <button
                type="submit"
                class="bg-green text-white border-0 fw-bold fs-6 w-50 py-3 mt-lg-3 rounded-4"
              >
                Sign in
              </button>
            </form>
            <!-- Accountant form -->
            <form
            action="{{route('accountant.login')}}"  method="post"
              class="position-relative z-0 w-75 my-3"
              id="accountant-form"
              style="display: none"
            >
            @csrf
              <!--form Data  -->
              <div
                class="form-floating mb-3"
                style="border-bottom: 1px solid black !important"
              >
                <input
                  type="email"
                  class="form-control border-0"
                  style="background-color: inherit"
                  id="floatingInput"
                  placeholder="name@example.com"
                  name="email"
                />
                <label class="fw-bold txt-gray" for="floatingInput"
                  >Email address</label
                >
              </div>
              <div
                class="form-floating mb-3"
                style="border-bottom: 1px solid black !important"
              >
                <input
                  type="password"
                  class="form-control border-0"
                  style="background-color: inherit"
                  id="floatingName"
                  placeholder="Namee"
                  name="password"
                />
                <label class="fw-bold txt-gray" for="floatingName"
                  >Password</label
                >
              </div>
              <!--  -->
              <button
                type="submit"
                class="bg-green text-white border-0 fw-bold fs-6 w-50 py-3 mt-lg-3 rounded-4"
              >
                Sign in
              </button>
            </form>
          </div>
          <!-- footer -->
          <div
            class=""
            style="
              background-image: url(Assets/images/Vector.png);
              background-color: #192f59;
            "
          >
            <div class="container">
              <div class="row">
                <!-- logo -->
                <div class="m-3 w-50 h-50">
                  <img
                    class="h-100 w-100"
                    src="Assets/images/logo2.png"
                    alt=""
                  />
                </div>
                <!-- copyright -->
                <div
                  class="container py-4 d-flex flex-row justify-content-between"
                >
                  <p class="m-0 mx-3 fs-6 text-white">
                    Copyright &#169;2024 All rights reserved
                  </p>
                  <!-- links -->
                  <div class="">
                    <a
                      class="text-decoration-none txt-green"
                      style="text-decoration: none"
                      target="_blank"
                      href="https://www.facebook.com/CIS.EDU1"
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
                      href="https://www.linkedin.com/school/new-cairo-academy-nca/"
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
            </div>
          </div>
        </div>

        <!-- carousel -->
        <div class="col-lg-8 px-0 h-100 d-flex flex-column">
          <div
            id="carouselExampleDark"
            class="carousel carousel-dark slide"
            data-bs-ride="carousel"
          >
            <!-- indicators -->
            <div class="carousel-indicators carousel-custom-indicators">
              <button
                type="button"
                data-bs-target="#carouselExampleDark"
                data-bs-slide-to="0"
                class="active"
                style="background-color: #00d084"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleDark"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleDark"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
            </div>
            <!-- items -->
            <div class="carousel-inner vh-100">
              <div
                class="carousel-item active h-100 w-100"
                data-bs-interval="4000"
              >
                <!-- img -->
                <div
                  class="h-100 w-100 position-relative"
                  style="
                    background-image: url(/Assets/images/33.jpg);
                    background-position: center;
                    background-size: cover;
                  "
                ></div>
                <!-- info -->
                <div
                  class="carousel-caption d-none d-md-block position-absolute p-5 m-3 text-start"
                  style="top: 0px; left: 0px"
                >
                  <h1
                    class="txt-darkblue fw-bold w-75"
                    style="font-size: 55.62px"
                  >
                    University, College and Education
                  </h1>
                  <p class="text-white fs-5 w-75">
                    a small river named duden flows by their place and supplies
                    it with the necessary regeliali
                  </p>
                </div>
              </div>
              <div class="carousel-item h-100 w-100" data-bs-interval="2000">
                <!-- img -->
                <div
                  class="h-100 w-100 position-relative"
                  style="
                    background-image: url(/Assets/images/34.jpg);
                    background-position: center;
                    background-size: cover;
                  "
                ></div>
                <!-- info -->
                <div
                  class="carousel-caption d-none d-md-block position-absolute p-5 m-3 text-start"
                  style="top: 0px; left: 0px"
                >
                  <h1
                    class="txt-darkblue fw-bold w-50"
                    style="font-size: 55.62px"
                  >
                    A community that helps you learn
                  </h1>
                  <p class="text-white fs-5 w-75">
                    Teaching Staff that helps you learn with ease and with high
                    quality
                  </p>
                </div>
              </div>
              <div class="carousel-item h-100 w-100" data-bs-interval="2000">
                <!-- img -->
                <div
                  class="h-100 w-100 position-relative"
                  style="
                    background-image: url(/Assets/images/35.jpg);
                    background-position: center;
                    background-size: cover;
                  "
                ></div>
                <!-- info -->
                <div
                  class="carousel-caption d-none d-md-block position-absolute p-5 m-3 text-start"
                  style="top: 0px; left: 0px"
                >
                  <h1
                    class="txt-darkblue fw-bold w-50"
                    style="font-size: 55.62px"
                  >
                    Huge library and more books
                  </h1>
                  <p class="text-white fs-5 w-75">
                    Books on all fields to increase students' information
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

