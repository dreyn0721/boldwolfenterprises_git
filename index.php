<?php
// Vars
$page = "home";
$pagetitle = "Home | Bold Wolf Enterprises";
$description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum non euismod dolor. Integer sapien ipsum, dapibus eget bibendum sed nullam sodales.";




include("template-parts/header.php");
?>


<!-- Hero -->
<section class="hero">
  <h1>Bold Wolf Enterprises</h1>
  <p>Lorem ipsum dolor sit amet</p>
</section>

<!-- Contact -->
<section id="contact" class="bg-dark-alt">
  <div class="container">
    <div class="row align-items-center g-4">
      <div class="col-md-6">
        <img src="https://dummyimage.com/400x400/000/fff" class="img-fluid">
      </div>
      <div class="col-md-6">
        <form class="main-form">


	    <div class="response-container">
    	</div>

          <div class="row g-3">
            <div class="col-md-6">
              <input class="form-control firstname" placeholder="First Name">
            </div>
            <div class="col-md-6">
              <input class="form-control lastname" placeholder="Last Name">
            </div>
            <div class="col-md-6">
              <input class="form-control phone" placeholder="Phone">
            </div>
            <div class="col-md-6">
              <input class="form-control email" placeholder="Email">
            </div>
            <div class="col-12">
              <textarea class="form-control message-data" rows="4" placeholder="Message"></textarea>
            </div>
            <div class="col-12">
              <button class="btn text-white submit-btn" style="background:var(--primary)">Send Message</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section class="bg-light-alt">
  <div class="container">
    <h2 class="text-center mb-5">Testimonials</h2>
    <div class="row g-4">
      <!-- 6 cards -->
      <script>
        for(let i=1;i<=6;i++){
          document.write(`
          <div class="col-md-4">
            <div class="card testimonial-card p-3 h-100">
              <p>"Amazing service and great investment opportunities."</p>
              <div class="d-flex align-items-center gap-3">
                <img src="https://dummyimage.com/80x80/000/fff">
                <strong>Client ${i}</strong>
              </div>
            </div>
          </div>
          `);
        }
      </script>
    </div>
  </div>
</section>

<!-- Investments -->
<section id="investments" class="bg-dark-alt">
  <div class="container">
    <h2 class="text-center mb-4">Investments</h2>
    <div class="row g-4">
      <div class="col-md-4"><img class="img-fluid" src="https://dummyimage.com/300x200/000/fff"><p>Investment Opportunity A</p></div>
      <div class="col-md-4"><img class="img-fluid" src="https://dummyimage.com/300x200/000/fff"><p>Investment Opportunity B</p></div>
      <div class="col-md-4"><img class="img-fluid" src="https://dummyimage.com/300x200/000/fff"><p>Investment Opportunity C</p></div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="bg-light-alt text-center">
  <div class="container">
    <h2>Inspire. Fund. Invest.</h2>
    <p>Join us in building powerful opportunities for the future.</p>
    <a href="#contact" class="btn text-white" style="background:var(--secondary)">Get Started</a>
  </div>
</section>

<!-- FAQ -->
<section id="faq" class="bg-dark-alt">
  <div class="container">
    <h2 class="text-center mb-4">FAQ</h2>
    <div class="accordion" id="faqAccordion">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#q1">
            What services do you offer?
          </button>
        </h2>
        <div id="q1" class="accordion-collapse collapse show">
          <div class="accordion-body">We provide investment and funding opportunities.</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#q2">
            How can I invest?
          </button>
        </h2>
        <div id="q2" class="accordion-collapse collapse">
          <div class="accordion-body">Contact us using the form above.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<script type="text/javascript">
  jQuery( document ).ready(function(){


    jQuery(".submit-btn").on("click", function(e){
      e.preventDefault();

      var firstname = jQuery(".main-form .firstname").val();
      var lastname = jQuery(".main-form .lastname").val();

      var phone = jQuery(".main-form .phone").val();
      var email = jQuery(".main-form .email").val();
      var messagedata = jQuery(".main-form .message-data").val();


      $.ajax({
        method: "POST",
        url: "",
        data: { 
          action:"entry", 
          firstname: firstname, 
          lastname: lastname , 
          email: email, 
          phone: phone,
          messagedata: messagedata

        }
      }).done(function( response ) {
          if( response == "success" ){
            //location.reload();


            jQuery(".main-form .firstname").val("");
            jQuery(".main-form .lastname").val("");
            jQuery(".main-form .email").val("");
            jQuery(".main-form .phone").val("");
            jQuery(".main-form .message-data").val("");

            jQuery(".response-container").show();
            jQuery(".response-container").html("<p>Your form submitted successfully, we will send you an email shortly. <br>Thank you</p>");

          } else {
            jQuery(".response-container").show();
            jQuery(".response-container").html(response);
          }
      });



    });



  });
</script>

<?php include("template-parts/footer.php"); ?>