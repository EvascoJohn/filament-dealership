@aware(['page'])



<header>
  
    <!-- User registration and menu icon -->
    <div class="main">
      <a href="#" class="user"
        >Log In<i class="ri-account-circle-fill"></i
      ></a>
      <div class="ri-menu-line" id="menu-icon"></div>
    </div>
  </header>

  <main>
    <section id="Content1">
        <img src="{{ env('APP_URL') . 'images/application_page_heading_image.jpg' }}" alt="section1-image-bg" />
        <div class="tagline-text">
          <h2 class="animate">Application</h2>
          <p class="contact-desc">
              Rev up your career and apply today to join our motorcycle-loving team, where passion and innovation drive us forward. See requirements below and take the first step toward an exciting journey with us.
          </p>
          <div class="buttons">
            <button class="inquire-button" onclick="toggleInquireSection()">
             SEE REQUIREMENTS
            </button>
            <button class="inquire-button" onclick="toggleApplicationSection()">
              SEND APPLICATION
            </button>
          </div>
        </div>
      </div>
    </section>

    <section id="Content2">
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
    </section>

      <section id="Content3">
        <h2>PROBIKES MOTORCYLE CENTER</h2>
<p>Howard Tower Corner 6th Ave., Caloocan City</p>
<p>Tel. No. 362-9946</p>

<h3>UNIT TO BE FINANCED</h3>
<form>
  <form>
  <label for="unit-model">UNIT / MODEL:</label>
  <select id="unit-model" name="unit-model">
    <option value="">Select Model</option>
    <option value="Model A">Model A</option>
    <option value="Model B">Model B</option>
    <option value="Model C">Model C</option>
  </select><br>

  <label for="term">Term:</label>
  <select id="term" name="term">
    <option value="">Select Term</option>
    <option value="12">12 Months</option>
    <option value="24">24 Months</option>
    <option value="36">36 Months</option>
    <!-- Add more term options as needed -->
  </select><br>

  <label for="ttl-dp">TTL D/P:</label>
  <select id="ttl-dp" name="ttl-dp">
    <option value="">Select TTL D/P</option>
    <option value="10000">10,000 PHP</option>
    <option value="20000">20,000 PHP</option>
    <option value="30000">30,000 PHP</option>
    <!-- Add more total down payment options as needed -->
  </select><br>

  <label for="srp">SRP:</label>
  <select id="srp" name="srp">
    <option value="">Select SRP</option>
    <option value="100000">100,000 PHP</option>
    <option value="150000">150,000 PHP</option>
    <option value="200000">200,000 PHP</option>
    <!-- Add more SRP options as needed -->
  </select><br>

  <label for="mo-amort">Monthly Amortization:</label>
  <select id="mo-amort" name="mo-amort">
    <option value="">Select Monthly Amortization</option>
    <option value="5000">5,000 PHP</option>
    <option value="6000">6,000 PHP</option>
    <option value="7000">7,000 PHP</option>
    <!-- Add more monthly amortization options as needed -->
  </select><br>

  <label for="amt-fin">Amt. Fin.:</label>
  <select id="amt-fin" name="amt-fin">
    <option value="">Select Amt. Fin.</option>
    <option value="50000">50,000 PHP</option>
    <option value="60000">60,000 PHP</option>
    <option value="70000">70,000 PHP</option>
    <!-- Add more Amt. Fin. options as needed -->
  </select><br>

  <label>Type:</label>
  <input type="radio" id="type-new" name="type" value="New">
  <label for="type-new">New</label>
  <input type="radio" id="type-repeat" name="type" value="Repeat">
  <label for="type-repeat">Repeat</label><br>

  <label>Mode of Payment:</label>
  <input type="radio" id="mode-office" name="mode" value="Office">
  <label for="mode-office">Office</label>
  <input type="radio" id="mode-field" name="mode" value="Field">
  <label for="mode-field">Field</label>
  <input type="radio" id="mode-bank" name="mode" value="Bank">
  <label for="mode-bank">Bank</label><br>
</form>

<h3>APPLICANT</h3>
<form>
  <label for="last-name">Last Name:</label>
  <input type="text" id="last-name" name="last-name"><br>

  <label for="first-name">First Name:</label>
  <input type="text" id="first-name" name="first-name"><br>

  <label for="middle-name">Middle Name:</label>
  <input type="text" id="middle-name" name="middle-name"><br>

  <label for="b-day">B-day:</label>
  <input type="date" id="b-day" name="b-day">
  <br>

  <label for="age">Age:</label>
  <input type="text" id="age" name="age"><br>

  <label>Status:</label>
  <input type="radio" id="status-single" name="status" value="Single">
  <label for="status-single">Single</label>
  <input type="radio" id="status-married" name="status" value="Married">
  <label for="status-married">Married</label>
  <input type="radio" id="status-widow" name="status" value="Widow">
  <label for="status-widow">Widow</label>
  <input type="radio" id="status-sep" name="status" value="Sep">
  <label for="status-sep">Sep</label><br>

  <h4>Present Address</h4>
  <label for="present-street">Street/Block:</label>
  <input type="text" id="present-street" name="present-street"><br>

  <label for="present-barangay">Barangay:</label>
  <input type="text" id="present-barangay" name="present-barangay"><br>

  <label for="present-town-city">Town/City:</label>
  <input type="text" id="present-town-city" name="present-town-city"><br>

  <label for="present-province">Province:</label>
  <input type="text" id="present-province" name="present-province"><br>

  <h4>Previous Address</h4>
  <label for="prev-street">Street/Block:</label>
  <input type="text" id="prev-street" name="prev-street"><br>

  <label for="prev-barangay">Barangay:</label>
  <input type="text" id="prev-barangay" name="prev-barangay"><br>

  <label for="prev-town-city">Town/City:</label>
  <input type="text" id="prev-town-city" name="prev-town-city"><br>

  <label for="prev-province">Province:</label>
  <input type="text" id="prev-province" name="prev-province"><br>

  <h4>Provincial Address</h4>
  <label for="prov-street">Street/Block:</label>
  <input type="text" id="prov-street" name="prov-street"><br>

  <label for="prov-barangay">Barangay:</label>
  <input type="text" id="prov-barangay" name="prov-barangay"><br>

  <label for="prov-town-city">Town/City:</label>
  <input type="text" id="prov-town-city" name="prov-town-city"><br>

  <label for="prov-province">Province:</label>
  <input type="text" id="prov-province" name="prov-province"><br>

  <label>House:</label>
  <input type="radio" id="house-owned" name="house" value="Owned">
  <label for="house-owned">Owned</label>
  <input type="radio" id="house-parents" name="house" value="Living w/ parents">
  <label for="house-parents">Living w/ parents</label>
  <input type="radio" id="house-rented" name="house" value="Rented">
  <label for="house-rented">Rented</label>
  <input type="radio" id="house-others" name="house" value="Others">
  <label for="house-others">Others</label><br>

  <h4>Valid ID's</h4>
  <label for="valid-id1">ID 1:</label>
  <select id="valid-id1" name="valid-id1">
    <option value="">Select ID</option>
    <option value="drivers-license">Driver's License</option>
    <option value="sss-gsis">SSS/GSIS</option>
    <option value="other-id">Other ID (Specify)</option>
    <button type="button" onclick="removeUpload('id1-upload')">Remove</button><br>
    <!-- Add more ID options if needed -->
  </select>
  <input type="file" id="id1-upload" name="id1-upload"><br>

  <label for="valid-id2">ID 2:</label>
  <select id="valid-id2" name="valid-id2">
    <option value="">Select ID</option>
    <option value="drivers-license">Driver's License</option>
    <option value="sss-gsis">SSS/GSIS</option>
    <option value="other-id">Other ID (Specify)</option>
    <!-- Add more ID options if needed -->
  </select>
  <input type="file" id="id2-upload" name="id2-upload"><br>

  <label for="other-id-type">Other ID Type:</label>
  <input type="text" id="other-id-type" name="other-id-type" style="display: none;">
  <!-- JavaScript code will handle the visibility of this field based on the selected option -->


</form>

<h3>STATEMENT OF MONTHLY INCOME & EXPENSES</h3>

<h4>MONTHLY INCOME</h4>
<label for="basic-salary">Applicant's Basic Monthly Salary:</label>
<input type="text" id="basic-salary" name="basic-salary"><br>

<label for="allowance-commission">Allowance/Commission:</label>
<input type="text" id="allowance-commission" name="allowance-commission"><br>

<label for="deduction">Deduction:</label>
<input type="text" id="deduction" name="deduction"><br>

<label for="net-monthly-income">Net Monthly Income:</label>
<input type="text" id="net-monthly-income" name="net-monthly-income"><br>

<label for="spouse-basic-salary">Spouse's Basic Monthly Salary:</label>
<input type="text" id="spouse-basic-salary" name="spouse-basic-salary"><br>

<label for="spouse-allowance-commission">Spouse's Allowance/Commission:</label>
<input type="text" id="spouse-allowance-commission" name="spouse-allowance-commission"><br>

<label for="spouse-net-monthly-income">Spouse's Net Monthly Income:</label>
<input type="text" id="spouse-net-monthly-income" name="spouse-net-monthly-income"><br>

<label for="other-income">Other Income:</label>
<input type="text" id="other-income" name="other-income"><br>

<label for="gross-monthly-income">Gross Monthly Income:</label>
<input type="text" id="gross-monthly-income" name="gross-monthly-income" readonly><br>
<!-- You can use JavaScript to calculate the Gross Monthly Income based on the inputs above -->

<h4>EXPENSES</h4>
<label for="living-expenses">Living Expenses:</label>
<input type="text" id="living-expenses" name="living-expenses"><br>

<label for="education">Education:</label>
<input type="text" id="education" name="education"><br>

<label for="transportation">Transportation:</label>
<input type="text" id="transportation" name="transportation"><br>

<label for="rental">Rental:</label>
<input type="text" id="rental" name="rental"><br>

<label for="utilities">Utilities:</label>
<input type="text" id="utilities" name="utilities"><br>

<label for="monthly-amortization">Monthly Amortization:</label>
<input type="text" id="monthly-amortization" name="monthly-amortization"><br>

<label for="other-expenses">Other Expenses:</label>
<input type="text" id="other-expenses" name="other-expenses"><br>

<label for="total-expenses">Total Expenses:</label>
<input type="text" id="total-expenses" name="total-expenses" readonly><br>
<!-- You can use JavaScript to calculate the Total Expenses based on the inputs above -->

<label for="net-monthly-income-expenses">Net Monthly Income:</label>
<input type="text" id="net-monthly-income-expenses" name="net-monthly-income-expenses" readonly><br>
<!-- You can use JavaScript to calculate the Net Monthly Income based on the Gross Monthly Income and Total Expenses -->


<button type="reset">Reset</button>
</form>
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
        <li><a href="../html/Terms-and-condition.html">Terms &amp Condition</a></li>
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