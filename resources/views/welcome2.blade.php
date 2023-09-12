<!DOCTYPE html>
<html>
  <head>
    <!-- Meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- External CSS files -->
    <link rel="stylesheet" href="{{ asset('css/customer-page/global.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/customer-page/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/media-queries.css') }}" />
    <!-- Google Fonts -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
    />
    <!-- Remix Icon CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <!-- Title -->
    <title>Home</title>
  </head>

  <body>
    <main>
      <header>
        <!-- Brand logo Text -->
        <a href="../html/index.html" class="logo">BrandName</a>
        <!-- Navigation bar -->
        <ul class="navbar">
          {{-- redirects to the home --}}
            <li><a href="" class="active">Home</a></li>
            {{-- redirects to the products --}}
            <li><a href="">Products</a></li>
            <li><a href="">Application</a></li>
            {{-- redirects to the about --}}
            <li><a href="">About</a></li>
            {{-- redirects to the contact --}}
            <li><a href="">Contact Us</a></li>
      </ul>
        <!-- User registration and menu icon -->
        <div class="main">
          <a href="../html/login.html" class="user" id="loginLink"
            >Log In<i class="ri-account-circle-fill"></i
          ></a>
          <div class="ri-menu-line" id="menu-icon"></div>
        </div>
      </header>

      <section id="Content1">
        <div>


           <!-- Heading Image -->
          <img src="{{ env('APP_URL') . 'images/home_page_heading_image.jpg' }}" alt="section1-image-bg" />
          <div class="tagline-text">
            <h2>Unleash Wild, Drive with us</h2>
            <div class="buttons">
              <button class="explore-button" onclick="toggleProductSection()">
                Explore
              </button>
              <button class="register-button" onclick="toggleRegisterForm()">
                Register
              </button>
            </div>
          </div>
        </div>
      </section>

      <section id="Content2">
        <div class="content-inner">
          <div class="register-form" id="registerForm">
            <span class="icon-close" onclick="closeForm()"
              ><i class="ri-close-line"></i
            ></span>
            <div class="ca-title">
              <h2>Create A New Account</h2>
              <p>Start Your Journey with Us Today.</p>
            </div>
            {{-- Registration Form --}}
            <form action="" method="POST">
                @csrf
              <div class="form-group">
                <label for="first-name">First Name:</label>
                <input
                  type="text"
                  id="first_name"
                  name="first_name"
                  placeholder="eg. Juan"
                  required=""
                />
              </div>
              <div class="form-group">
                <label for="middle-initial">Middle Name:</label>
                <input
                  type="text"
                  id="middle_name"
                  name="middle_name"
                  placeholder="eg. D"
                  required=""
                />
              </div>
              <div class="form-group">
                <label for="last-name">Last Name:</label>
                <input
                  type="text"
                  id="last_name"
                  name="last_name"
                  placeholder="e.g Dela Cruz"
                  required=""
                />
              </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input
                  type="email"
                  id="email"
                  name="email"
                  placeholder="e.g juandelacruz123@mail.com"
                  required=""
                />
              <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input
                  type="text"
                  id="phone"
                  name="phone"
                  placeholder="e.g 09151234567"
                  required=""
                />
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                <input
                  type="password"
                  id="password"
                  name="password"
                  placeholder=""
                  required=""
                />
                <i
                  class="eye-icon ri-eye-close-line"
                  data-toggle="password"
                ></i>
              </div>
              <input type="submit" value="Create Account" />
            </form>
            <div class="have-account">
              <p>
                Already have an account?
                <a href="#" onclick="showLoginForm()"><span>Log in.</span></a>
              </p>
            </div>
            <div class="tac-pp">
              <p>
                By clicking the Sign up button you agree to our<a
                  href="../html/Terms-and-condition.html"
                  ><span>Terms &amp Condition</span></a
                >and<a href="../html/privacy-policy.html"
                  ><span>Privacy Policy.</span></a
                >
              </p>
            </div>
          </div>
          <div class="login-form" id="loginForm">
            <span class="icon-close" onclick="closeForm()"
              ><i class="ri-close-line"></i
            ></span>
            <div class="ca-title">
              <h2>Welcome Back!</h2>
              <p>Please log in to continue.</p>
            </div>
            <form action="#">
              <div class="form-group">
                <label for="id-number">Account Number:</label>
                <input
                  type="text"
                  id="id-number"
                  placeholder="eg. 10001234567"
                  required=""
                />
              </div>
              <div class="form-group">
                <label for="login-password">Password:</label>
                <input
                  type="password"
                  id="login-password"
                  placeholder=""
                  required=""
                />
                <i
                  class="eye-icon ri-eye-close-line"
                  data-toggle="password"
                ></i>
              </div>
              <input type="submit" value="Log in" />
            </form>
            <div class="dont-have-account">
              <p>
                Don't have an account?
                <a href="#" onclick="showRegistrationForm()"
                  ><span>Create new account.</span></a
                >
              </p>
            </div>
          </div>
        </div>
      </section>

      <section id="Content3">
        <!--features-->
        <div class="heading">
          <h1 class="Title">
            Introducing the Latest Arrival to Our Motorcycle Lineup!
          </h1>
        </div>
        <div class="home-product-row">
          <div class="home-product-col">
            <img src="../images/motor 1.png" alt="" />
            <h2 class="testi-name">DIO</h2>
            <div class="c3-buttons">
              <a href="../html/products.html">View Full Specs</a>
            </div>
          </div>
          <div class="home-product-col">
            <img src="../images/motor 2.png" alt="" />
            <h2 class="testi-name">BeAT Street (STD)</h2>
            <div class="c3-buttons">
              <a href="../html/products.html">View Full Specs</a>
            </div>
          </div>
          <div class="home-product-col">
            <img src="../images/motor 3.png" alt="" />
            <h2 class="testi-name">BeAT Fashion Sport (STD)</h2>
            <div class="c3-buttons">
              <a href="../html/products.html">View Full Specs</a>
            </div>
          </div>
        </div>
        <div class="c3-buttons">
          <a href="../html/products.html">See More</a>
        </div>
      </section>

      <section id="Content4">
        <!--requirements-->
        <div class="heading">
          <h1 class="Title">REQUIREMENTS:</h1>
          <p class="content">
            Gear up with the essentials - the road to success begins here, armed
            with all the requirements you need.
          </p>
        </div>
        <div class="container">
          <div class="specs-content">
            <div class="specs-title">Requirements 1</div>
          </div>
          <div class="specs-content">
            <div class="specs-title">Requirements 2</div>
          </div>
          <div class="specs-content">
            <div class="specs-title">Requirements 3</div>
          </div>
          <div class="specs-content">
            <div class="specs-title">Requirements 4</div>
          </div>
          <div class="specs-content">
            <div class="specs-title">Requirements 5</div>
          </div>
          <div class="specs-content">
            <div class="specs-title">BRequirements 6</div>
          </div>
          <div class="specs-content">
            <div class="specs-title">Requirements 7</div>
          </div>
        </div>
        <div class="c4-buttons">
          <a href="../html/application.html">Application</a>
        </div>
      </section>

      <section id="Content5">
        <!--advantages-->
        <h1>Why Choose Us?</h1>
        <p>Elevate Your Experience: Discover the Advantages of Choosing Us</p>
      </section>

      <section id="Content6">
        <!--ratings-->
        <h1>What Our Customer Says</h1>
        <p>
          Echoes of Satisfaction: Unveiling the Stories and Smiles Shared by Our
          Valued Customers
        </p>

        <div class="testimonial-row">
          <div class="testimonial-col">
            <img src="../images/profile-image.jpg" alt="" />
            <p>
              <span>"</span>Lorem ipsum dolor sit amet consectetur, adipisicing
              elit. Facilis odit nihil vel, repellat maiores consectetur ut,
              minus debitis nisi blanditiis soluta harum odio quo nobis ducimus!
              Aperiam praesentium quidem modi.<span>"</span>
            </p>
            <h2 class="testi-name">John Doe</h2>
            <div class="stars-rate">
              <i class="ri-star-s-fill"></i>
              <i class="ri-star-s-fill"></i>
              <i class="ri-star-s-fill"></i>
              <i class="ri-star-s-fill"></i>
              <i class="ri-star-s-fill"></i>
            </div>
          </div>
          <div class="testimonial-col">
            <img src="../images/profile-image 3.jpg" alt="" />
            <p>
              <span>"</span>Lorem ipsum dolor sit amet consectetur adipisicing
              elit. Molestias tempore, vel eveniet eum vero inventore sed
              consequatur provident doloremque magnam quasi voluptatibus magni
              minus ea explicabo commodi, ratione porro! Nam?<span>"</span>
            </p>
            <h2 class="testi-name">Michael Johnson</h2>
            <div class="stars-rate">
              <i class="ri-star-s-fill"></i>
              <i class="ri-star-s-fill"></i>
              <i class="ri-star-s-fill"></i>
              <i class="ri-star-s-fill"></i>
              <i class="ri-star-half-s-fill"></i>
            </div>
          </div>
          <div class="testimonial-col">
            <img src="../images/profile-image 2.jpg" alt="" />
            <p>
              <span>"</span>Lorem ipsum dolor sit amet consectetur adipisicing
              elit. Rem laboriosam qui accusantium tempora quae expedita
              consequatur voluptate voluptates deserunt asperiores sapiente
              minima obcaecati fuga vitae fugit dolores, laborum, veniam
              assumenda!<span>"</span>
            </p>
            <h2 class="testi-name">Jessica Miller</h2>
            <div class="stars-rate">
              <i class="ri-star-s-fill"></i>
              <i class="ri-star-s-fill"></i>
              <i class="ri-star-s-fill"></i>
              <i class="ri-star-s-fill"></i>
              <i class="ri-star-s-fill"></i>
            </div>
          </div>
        </div>
        <div class="back-to-top">
          <button class="btt-button" onclick="toggleTopSection()">
            Back to top <i class="ri-arrow-up-s-line"></i>
          </button>
        </div>
      </section>
    </main>

    <!--Footer Design-->
    <footer>
      <div class="content">
        <div class="row1 box">
          <div class="upper">
            <div class="topic">BrandName</div>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet,
              deleniti enim eum itaque voluptas saepe provident atque voluptate
              tempore deserunt at exercitationem soluta.
            </p>
          </div>
        </div>

        <div class="row2 box">
          <li><a href="../html/index.html">Home</a></li>
          <li><a href="../html/products.html">Products</a></li>
          <li><a href="../html/application.html">Application</a></li>
          <br />
          <li><a href="../html/privacy-policy.html">Privacy Policy</a></li>
          <li>
            <a href="../html/Terms-and-condition.html">Terms &amp Condition</a>
          </li>
          <li><a href="../html/contact.html">FAQs</a></li>
        </div>

        <div class="row3 box">
          <div class="topic">Contact us</div>
          <div class="phone">
            <a href="#"><i class="ri-phone-fill"></i>+6391234567</a>
          </div>
          <div class="email">
            <a href="#"><i class="ri-mail-fill"></i>group5@email.com</a>
          </div>
          <div class="address">
            <a href="#"><i class="ri-navigation-fill"></i>Lian, Batangas</a>
          </div>
        </div>

        <div class="row4 box">
          <div class="topic">Sign up to our Newsletter</div>
          <form action="#">
            <input type="text" placeholder="Enter email address" required="" />
            <input type="submit" name="" value="Send" />
            <div class="media-icons">
              <a href="http://facebook.com" target="_blank"
                ><i class="ri-facebook-fill ri-1x"></i
              ></a>
              <a href="http://instagram.com" target="_blank"
                ><i class="ri-instagram-fill ri-1x"></i
              ></a>
              <a href="http://twitter.com" target="_blank"
                ><i class="ri-twitter-fill ri-1x"></i
              ></a>
              <a href="http://messenger.com" target="_blank"
                ><i class="ri-messenger-fill ri-1x"></i
              ></a>
            </div>
          </form>
        </div>
      </div>
      <div class="bottom">
        <p>Copyright © 2023 <span>BrandName</span> Made by Group5</p>
      </div>
    </footer>

    <!--JS Link-->
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
  </body>
</html>
