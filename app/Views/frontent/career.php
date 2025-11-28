<?php include APPPATH . "/Views/frontent/common/header.php"; ?>

<section class="banner">
    <div class="container">
        <div class="row text-center banner-content">
            <div class="col-12">
                <h1 class="display-4 fw-bold">Careers</h1>

                <!-- Breadcrumb Navigation -->
                <nav class="breadcrumb-nav" aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="#"><i class="fas fa-home me-1"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Careers</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>


<section class="career-section">
  <div class="career-container">

    <!-- Career Heading styled like Services -->
    <div class="servicess-header text-center career-header-section">
      <h1 class="main-heading">Careers</h1>
      <p class="servicess-subtitle">
        Be part of a future-ready engineering company that blends EPC with AI & Digitalization.<br />
        We welcome young engineers and experienced professionals passionate about 
        process optimization, digital twin technologies, and Industry 4.0 transformation.
      </p>
    </div>

    <!-- Career Form -->
    <div class="career-form-container">
      <h4> Submit your CV directly on the portal</h4>

      <form class="career-form" id="careerForm">
        <div class="form-group">
          <label for="name">Full Name <span>*</span></label>
          <input type="text" id="name" name="name" placeholder="Enter your full name" required />
        </div>

        <div class="form-group">
          <label for="email">Email <span>*</span></label>
          <input type="email" id="email" name="email" placeholder="Enter your email" required />
        </div>

        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" />
        </div>

        <div class="form-group">
          <label for="position">Position Applied For</label>
          <input type="text" id="position" name="position" placeholder="e.g., Project Engineer" />
        </div>

        <div class="form-group">
          <label for="cv">Upload CV <span>*</span></label>
          <input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx" required />
        </div>

        <div class="form-group">
          <label for="message">Message</label>
          <textarea id="message" name="message" rows="4" placeholder="Write a short message..."></textarea>
        </div>

        <button type="submit" class="submit-btn">Submit Application</button>
      </form>
    </div>
  </div>
</section>


<?php include APPPATH . "/Views/frontent/common/footer.php"; ?> 