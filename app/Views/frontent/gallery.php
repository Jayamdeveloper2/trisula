<?php include APPPATH . "/Views/frontent/common/header.php"; ?>

<style> 
    .gallery-card {
        cursor: pointer;
    }
    
    .gallery-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.15) !important;
    }
    
    .gallery-card img {
        transition: transform 0.3s ease;
    }
    
    .gallery-card:hover img {
        transform: scale(1.05);
    }

    .carousel-item img {
        width: 100%;
        height: 80vh;
        object-fit: contain;
        border-radius: 10px;
    }

    .carousel-control-prev,
    .carousel-control-next {
        width: 50px;
        height: 50px;
        background: rgba(0,0,0,0.5);
        border-radius: 50%;
        top: 50%;
        transform: translateY(-50%);
        margin: 0 20px;
    }
</style>
<section class="banner">
    <div class="container">
        <div class="row text-center banner-content">
            <div class="col-12">
                <h1 class="display-4 fw-bold">Gallery</h1>

                <!-- Breadcrumb Navigation -->
                <nav class="breadcrumb-nav" aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="#"><i class="fas fa-home me-1"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>


<!-- new  -->
<section class="gallery-section py-5" style="background-color: #f8f9fa;">
    <div class="container">

        <!-- Collaboration Section -->
        <div class="mb-5">
            <div class="text-center mb-5">
                <h2 class="mb-3" style="font-size: 2.5rem; font-weight: 700; color: #2c3e50;">Collaboration</h2>
                <p class="lead" style="font-size: 1.2rem; color: #7f8c8d; max-width: 700px; margin: 0 auto;">
                    Strategic partnerships that drive innovation and create lasting impact through shared expertise and vision.
                </p>
            </div>
            
            <div class="row g-4">
                <!-- Column 1 -->
                <div class="col-md-4">
                    <div class="d-flex flex-column gap-4">
                        <div class="gallery-card" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                            <img src="assets/collaboration/1img.jpeg" class="img-fluid gallery-image" style="width: 100%; height: 200px; object-fit: cover; cursor: pointer;" onclick="openImageModal(1, 0)">
                        </div>
                        <div class="gallery-card" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                            <img src="assets/collaboration/4img.jpeg" class="img-fluid gallery-image" style="width: 100%; height: 250px; object-fit: cover; cursor: pointer;" onclick="openImageModal(1, 3)">
                        </div>
                        <div class="gallery-card" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                            <img src="assets/collaboration/7img.jpeg" class="img-fluid gallery-image" style="width: 100%; height: 180px; object-fit: cover; cursor: pointer;" onclick="openImageModal(1, 6)">
                        </div>
                        <div class="gallery-card" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                            <img src="assets/collaboration/11img.jpeg" class="img-fluid gallery-image" style="width: 100%; height: 200px; object-fit: cover; cursor: pointer;" onclick="openImageModal(1, 10)">
                        </div>
                    </div>
                </div>
                
                <!-- Column 2 -->
                <div class="col-md-4">
                    <div class="d-flex flex-column gap-4">
                        <div class="gallery-card" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                            <img src="assets/collaboration/2img.jpeg" class="img-fluid gallery-image" style="width: 100%; height: 220px; object-fit: cover; cursor: pointer;" onclick="openImageModal(1, 1)">
                        </div>
                        <div class="gallery-card" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                            <img src="assets/collaboration/5img.jpeg" class="img-fluid gallery-image" style="width: 100%; height: 190px; object-fit: cover; cursor: pointer;" onclick="openImageModal(1, 4)">
                        </div>
                        <div class="gallery-card" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                            <img src="assets/collaboration/8img.jpeg" class="img-fluid gallery-image" style="width: 100%; height: 230px; object-fit: cover; cursor: pointer;" onclick="openImageModal(1, 7)">
                        </div>
                        <div class="gallery-card" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                            <img src="assets/collaboration/13img.jpeg" class="img-fluid gallery-image" style="width: 100%; height: 190px; object-fit: cover; cursor: pointer;" onclick="openImageModal(1, 12)">
                        </div>
                    </div>
                </div>
                
                <!-- Column 3 -->
                <div class="col-md-4">
                    <div class="d-flex flex-column gap-4">
                        <div class="gallery-card" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                            <img src="assets/collaboration/3img.jpeg" class="img-fluid gallery-image" style="width: 100%; height: 240px; object-fit: cover; cursor: pointer;" onclick="openImageModal(1, 2)">
                        </div>
                        <div class="gallery-card" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                            <img src="assets/collaboration/6img.jpeg" class="img-fluid gallery-image" style="width: 100%; height: 210px; object-fit: cover; cursor: pointer;" onclick="openImageModal(1, 5)">
                        </div>
                        <div class="gallery-card" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                            <img src="assets/collaboration/9img.jpeg" class="img-fluid gallery-image" style="width: 100%; height: 180px; object-fit: cover; cursor: pointer;" onclick="openImageModal(1, 8)">
                        </div>
                        <div class="gallery-card" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                            <img src="assets/collaboration/12img.jpeg" class="img-fluid gallery-image" style="width: 100%; height: 220px; object-fit: cover; cursor: pointer;" onclick="openImageModal(1, 11)">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Projects Section -->
        <div class="mb-5">
            <div class="text-center mb-5">
                <h2 class="mb-3" style="font-size: 2.5rem; font-weight: 700; color: #2c3e50;">Projects</h2>
                <p class="lead" style="font-size: 1.2rem; color: #7f8c8d; max-width: 700px; margin: 0 auto;">
                    Innovative solutions and groundbreaking projects that redefine possibilities and shape the future of our industry.
                </p>
            </div>
            
            <div class="row g-4">
                <!-- Column 1 -->
                <div class="col-md-3">
                    <div class="d-flex flex-column gap-4">
                        <div class="gallery-card" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                            <img src="assets/projects/img1.jpeg" class="img-fluid gallery-image" style="width: 100%; height: 220px; object-fit: cover; cursor: pointer;" onclick="openImageModal(2, 0)">
                        </div>
                        <div class="gallery-card" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                            <img src="assets/projects/img5.jpeg" class="img-fluid gallery-image" style="width: 100%; height: 180px; object-fit: cover; cursor: pointer;" onclick="openImageModal(2, 4)">
                        </div>
                        <div class="gallery-card" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                            <img src="assets/projects/img9.jpeg" class="img-fluid gallery-image" style="width: 100%; height: 240px; object-fit: cover; cursor: pointer;" onclick="openImageModal(2, 8)">
                        </div>
                        <div class="gallery-card" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                            <img src="assets/projects/img13.jpeg" class="img-fluid gallery-image" style="width: 100%; height: 200px; object-fit: cover; cursor: pointer;" onclick="openImageModal(2, 12)">
                        </div>
                    </div>
                </div>
                
                <!-- Column 2 -->
                <div class="col-md-3">
                    <div class="d-flex flex-column gap-4">
                        <div class="gallery-card" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                            <img src="assets/projects/img2.jpeg" class="img-fluid gallery-image" style="width: 100%; height: 200px; object-fit: cover; cursor: pointer;" onclick="openImageModal(2, 1)">
                        </div>
                        <div class="gallery-card" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                            <img src="assets/projects/img6.jpeg" class="img-fluid gallery-image" style="width: 100%; height: 230px; object-fit: cover; cursor: pointer;" onclick="openImageModal(2, 5)">
                        </div>
                        <div class="gallery-card" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                            <img src="assets/projects/img10.jpeg" class="img-fluid gallery-image" style="width: 100%; height: 190px; object-fit: cover; cursor: pointer;" onclick="openImageModal(2, 9)">
                        </div>
                        <div class="gallery-card" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                            <img src="assets/projects/img14.jpeg" class="img-fluid gallery-image" style="width: 100%; height: 220px; object-fit: cover; cursor: pointer;" onclick="openImageModal(2, 13)">
                        </div>
                    </div>
                </div>
                
                <!-- Column 3 -->
                <div class="col-md-3">
                    <div class="d-flex flex-column gap-4">
                        <div class="gallery-card" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                            <img src="assets/projects/img3.jpeg" class="img-fluid gallery-image" style="width: 100%; height: 240px; object-fit: cover; cursor: pointer;" onclick="openImageModal(2, 2)">
                        </div>
                        <div class="gallery-card" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                            <img src="assets/projects/img7.jpeg" class="img-fluid gallery-image" style="width: 100%; height: 200px; object-fit: cover; cursor: pointer;" onclick="openImageModal(2, 6)">
                        </div>
                        <div class="gallery-card" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                            <img src="assets/projects/img11.jpeg" class="img-fluid gallery-image" style="width: 100%; height: 180px; object-fit: cover; cursor: pointer;" onclick="openImageModal(2, 10)">
                        </div>
                        <div class="gallery-card" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                            <img src="assets/projects/img15.jpeg" class="img-fluid gallery-image" style="width: 100%; height: 230px; object-fit: cover; cursor: pointer;" onclick="openImageModal(2, 14)">
                        </div>
                    </div>
                </div>
                
                <!-- Column 4 -->
                <div class="col-md-3">
                    <div class="d-flex flex-column gap-4">
                        <div class="gallery-card" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                            <img src="assets/projects/img4.jpeg" class="img-fluid gallery-image" style="width: 100%; height: 190px; object-fit: cover; cursor: pointer;" onclick="openImageModal(2, 3)">
                        </div>
                        <div class="gallery-card" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                            <img src="assets/projects/img8.jpeg" class="img-fluid gallery-image" style="width: 100%; height: 220px; object-fit: cover; cursor: pointer;" onclick="openImageModal(2, 7)">
                        </div>
                        <div class="gallery-card" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                            <img src="assets/projects/img12.jpeg" class="img-fluid gallery-image" style="width: 100%; height: 240px; object-fit: cover; cursor: pointer;" onclick="openImageModal(2, 11)">
                        </div>
                        <div class="gallery-card" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                            <img src="assets/projects/img16.jpeg" class="img-fluid gallery-image" style="width: 100%; height: 200px; object-fit: cover; cursor: pointer;" onclick="openImageModal(2, 15)">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Image Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content" style="background: transparent; border: none;">
            <div class="modal-header" style="border: none; position: absolute; top: 20px; right: 20px; z-index: 1000;">
                <button type="button" class="btn-close btn-close-white" style="filter: brightness(0) invert(1);" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div id="carouselExample" class="carousel slide1">
                    <div class="carousel-inner" id="modalCarouselInner">
                        <!-- Carousel items will be dynamically inserted here -->
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal / Slider -->
<div class="modal fade" id="galleryModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content bg-dark">
      <div class="modal-body p-0">

        <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" id="carouselImages"></div>

            <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
            </button>

        </div>

      </div>
    </div>
  </div>
</div>

<!-- BOOTSTRAP JS (MANDATORY FOR MODAL & CAROUSEL) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
const categoryImages = {
    1: [
        "assets/collaboration/1img.jpeg",
        "assets/collaboration/2img.jpeg",
        "assets/collaboration/3img.jpeg",
        "assets/collaboration/4img.jpeg",
        "assets/collaboration/5img.jpeg",
        "assets/collaboration/6img.jpeg",
        "assets/collaboration/7img.jpeg",
        "assets/collaboration/8img.jpeg",
        "assets/collaboration/9img.jpeg",
        "assets/collaboration/10img.jpeg",
        "assets/collaboration/11img.jpeg",
        "assets/collaboration/12img.jpeg",
        "assets/collaboration/13img.jpeg"
    ],
    2: [
        "assets/projects/img1.jpeg",
        "assets/projects/img2.jpeg",
        "assets/projects/img3.jpeg",
        "assets/projects/img4.jpeg",
        "assets/projects/img5.jpeg",
        "assets/projects/img6.jpeg",
        "assets/projects/img7.jpeg",
        "assets/projects/img8.jpeg",
        "assets/projects/img9.jpeg",
        "assets/projects/img10.jpeg",
        "assets/projects/img11.jpeg",
        "assets/projects/img12.jpeg",
        "assets/projects/img13.jpeg",
        "assets/projects/img14.jpeg",
        "assets/projects/img15.jpeg",
        "assets/projects/img16.jpeg",
        "assets/projects/img17.jpeg"
    ]
};

function openImageModal(category, startIndex) {
    let images = categoryImages[category];
    let carouselInner = document.getElementById("modalCarouselInner");

    // Clear previous content
    carouselInner.innerHTML = "";

    // Add images to carousel
    images.forEach((img, index) => {
        const isActive = index === startIndex ? 'active' : '';
        carouselInner.innerHTML += `
            <div class="carousel-item ${isActive}">
                <img src="${img}" class="d-block w-100" alt="Image ${index + 1}">
            </div>
        `;
    });

    // Show modal
    const modal = new bootstrap.Modal(document.getElementById('imageModal'));
    modal.show();
}

// Close modal on escape key
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        const modal = bootstrap.Modal.getInstance(document.getElementById('imageModal'));
        if (modal) {
            modal.hide();
        }
    }
});
</script>



<?php include APPPATH . "/Views/frontent/common/footer.php"; ?> 