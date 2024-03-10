
<!-- header.php -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <script defer src="../assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css"> <!-- You can create this file for your custom styles -->
    <link rel="icon" type="image/x-icon" href="https://hcf-p.com/assets/img/logonobg.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />

    
    <title>HCF</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="adminlogin.php"><img class="img-fluid" style="max-width: 40px; border-radius: 10px" src="https://hcf-p.com/assets/img/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
                    <a class="nav-link active" href="homepage.php">Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="events.php">Events</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="organizingcommittees.php">Organizing Committees</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="about.php">About</a>
                </li>
                <!-- <li class="nav-item ">
                    <a class="nav-link " href="contact.php">Contact</a>
                </li> -->
            </ul>
        </div>
    </div>
</nav>



<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="5000">
      <img src="https://hcf-p.com/assets/img//carousel/slide1.png" class="d-block w-100 img-fluid" alt="Slide 1">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://hcf-p.com/assets/img//carousel/slide2.png" class="d-block w-100 img-fluid" alt="Slide 2">
    </div>
    <div class="carousel-item"  data-bs-interval="2000">
      <img src="https://hcf-p.com/assets/img//carousel/slide3.png" class="d-block w-100 img-fluid" alt="Slide 3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div id="OptionsContainer" class="container text-center">
    <div class="row">
        <div class="col-md-4">
            <div class="block square" onclick="window.location.href='coreProjects.php'">Projects</div>
        </div>
        <div class="col-md-4">
            <div style="padding: 60px" class="block square" onclick="window.location.href='board.php?id=29&name=Board of Directors'">Board of Directors</div>
        </div>
        <div class="col-md-4">
            <div class="block square" onclick="window.location.href='chapters.php'">Chapters</div>
        </div>
    </div>
</div>

<div class="container py-3" style="background-color: #F8F9FA; margin-top: 80px;" id = "donatebox">
    <div class="row">
        <div class="col-md-6">
            <img class="rounded mx-auto d-block my-5 w-50" src="https://hcf-p.com/assets/img//poorchild.jpg" alt="">
        </div>
        <div class="col-md-6 text-center text-md-start d-flex align-items-center">
            <div class="row">
                <div class="col-md-12">
                <p class="text-secondary h2">Give your share</p>
                </div>
                <div class="col-md-12">
                <p class="text-black h2">to Show your care!</p>
                </div>
                <div class="col-md-12">
                <pre class="text-black ">"Your Generosity Matters: Donate Now 
and make a meaningful impact with 
Human Care Foundation!"</pre>
                </div>
                <div class="col-md-12">
                <a class="btn btn-dark" role="button" href="donateNow.php" aria-disabled="true">Donate Now</a>
                </div>
            </div>
            
        </div>
    </div>
</div>

<div class="container mt-5 p-3 bg-dark">
    <div class="row">
        <div class="col-md-6">
            <div class="row">
            <div class="col-md-12">
                <p class="text-secondary text-light h2 ml-5">Be a part of HCF</p>
                </div>
                <div class="col-md-12">
                <p class="text-white text-break text-md-wrap">Be a part of Human Care Foundation and get a chance to Serve Humanity</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 d-flex align-items-center justify-content-center">
        <a href="https://docs.google.com/forms/d/1Xi52sFg0RvP-j47NBnq9Mj-Z-NW8mnNZ6KSuypy2Z_M/edit" class="btn btn-light" role="button" aria-disabled="true">Click Here</a>
        </div>
    </div>
</div>


<div class="container mt-5" style="background-color: #F8F9FA;">
    <div class="row my-5">
        <div class="col-sm-12 ">
            <p class="h1 pt-5 text-center">Upcomming Events</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <!-- Add a container for horizontal scrolling -->
            <div class="scrollable-container">
                
 
                <!-- Event 1 -->
                <!-- <div class="scrollable-card">
                    <div class="card bg-dark">
                        <img src="https://hcf-p.com/assets/img//slide3.jpg" style="max-height: 190px; size: cover;" class="card-img-top" alt="Event 1 Thumbnail">
                        <div class="card-body">
                        <p class="card-text m-0 fs-6 text-light">Short description of Event 1.</p>
                            <a href="#" class="text-light">Read more...</a>
                            <p class="text-secondary ">Date: October 1, 2023</p>
                        </div>
                    </div>
                </div> -->




                <!-- Add more events as needed -->
            </div>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-sm-12 ">
            <p class="pt-2 text-center fst-italic"><a class="text-reset" href="Upcommingevents.php">See All</a></p>
        </div>
    </div>
</div>

<div class="container my-5" style="background-color: #F8F9FA;">
    <div class="row">
        <div class="col-md-6 bg-light" style="background-image: url(https://hcf-p.com/assets/img//punjab.jpg); background-size: cover;">
        </div>
        <div class="col-md-6">
            <div style="cursor: pointer;" class="row bg-dark text-light p-5" onclick="window.location.href='board.php?id=27&name=Organizing Committee Punjab'">
                <div class="col-md-12">
                    <p class="h1 text-break">
                    Organizing Committee Punjab
                    </p>
                </div>
                <div class="col-md-12">
                <p class=" text-break  text-secondary">
                The Organizing Committee in Punjab plays a crucial role in the establishment and dissolution of chapters, as well as overseeing disciplinary cases and formulating rules and regulations for Human Care Foundation (HCF). They are responsible for creating new chapters, ensuring their smooth functioning, and maintaining the integrity of the organization. The committee takes charge of executing the already established chapters, ensuring they align with the mission and values of HCF. Additionally, they handle disciplinary matters, ensuring that all members adhere to the code of conduct. The committee's dedication and efforts contribute to the effective management and growth of HCF in Punjab
                    </p>
                </div>
            </div>
            
        </div>
    </div>
    <div class="row">
    <div class="col-md-6">
            <div style="cursor: pointer;" class="row bg-dark text-light p-5" onclick="window.location.href='board.php?id=28&name=Organizing Committee KPK'" >
                <div class="col-md-12">
                    <p class="h1 text-break">
                    Organizing Committee KPK
                    </p>
                </div>
                <div class="col-md-12">
                <p class=" text-break text-secondary">
                The Organizing Committee in KP plays a crucial role in the establishment and dissolution of chapters, as well as overseeing disciplinary cases and formulating rules and regulations for Human Care Foundation (HCF). They are responsible for creating new chapters, ensuring their smooth functioning, and maintaining the integrity of the organization. The committee takes charge of executing the already established chapters, ensuring they align with the mission and values of HCF. Additionally, they handle disciplinary matters, ensuring that all members adhere to the code of conduct. The committee's dedication and efforts contribute to the effective management and growth of HCF in KP.                    </p>
                </div>
            </div>
            
        </div>
        <div class="col-md-6 bg-light" style="background-image: url(https://hcf-p.com/assets/img//peshawar.jpg); background-size: cover;"></div>
        
    </div>
</div>

<div class="container my-3">
    <div class="row ">
        <div class="col-md-6 p-5 bg-secondary">
                        <div class="row">
                            <div class="col-sm-2">
                            <img src="https://hcf-p.com/uploads/messages/7.jpeg" class="personimg" style= "width:50px; height:50px; border-radius:100px;object-fit: cover;" alt="">
                            </div>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="h4">Muhammad Salman Khan</p>
                                    </div>
                                    <div class="col-md-12">CEO</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 p-5">
                            <p> Hello everyone! I wanted to take a moment to express my deepest gratitude for your incredible support. Your kindness and generosity have made a significant impact in the lives of those in need. Together, we are making a difference and bringing hope to communities around the world. As Nelson Mandela once said it always seems impossible until it's done Thank you for being a part of our mission and embodying this spirit of selflessness. Keep spreading kindness and compassion, as Mother Teresa said, 'It's not how much we give, but how much love we put into giving.' Your contributions are truly changing lives. Thank you!"</p>
                            <a href="messages.php" class="text-light">Read more...</a>
                        </div>
                    </div>        
        
    </div>
</div>

<div class="container py-3" style="background-color: #F8F9FA;" id = "donatebox">
    <div class="row">
        <div class="col-md-6" style="background-image: url('https://hcf-p.com/assets/img//streetchildren.jpg'); background-size:cover; height:500px">
        </div>
        <div class="col-md-6 text-center text-md-start d-flex align-items-center p-5">
            <div class="row">
                <div class="col-md-12">
                <p class="text-dark h2">Street Children Education</p>
                </div>
                <div class="col-md-12">
                <p class="text-secondary text-wrap  ">
The importance of education for street children extends far beyond the confines of the classroom, carrying profound social implications. By providing these marginalized individuals with educational opportunities, we can break the cycle of poverty and offer them a chance at a brighter, more secure future.</p>
                </div>
                <div class="col-md-12">
                <a class="btn btn-dark" role="button" href="streetchildren.php" aria-disabled="true">Learn More</a>
                </div>
            </div>
            
        </div>
    </div>
</div>

<div class="container mt-5" style="background-color: #F8F9FA;">
    <div class="row my-5">
        <div class="col-sm-12 ">
            <p class="h1 pt-5 text-center">Events</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <!-- Add a container for horizontal scrolling -->
            <div class="scrollable-container">

<div class="scrollable-card">
            <div class="card bg-dark">
                <img src="https://hcf-p.com/uploads/events/207.jpeg" style="max-height: 190px; size: cover;" class="card-img-top" alt="Thumbnail">
                <div class="card-body">
                <p class="card-text m-0 fs-6 text-light">Membership Camp</p>
                    <a href="event.php?id=207" class="text-light">Read more...</a>
                    <p class="text-secondary ">2024-02-27</p>
                </div>
            </div>
        </div><div class="scrollable-card">
            <div class="card bg-dark">
                <img src="https://hcf-p.com/uploads/events/206.jpeg" style="max-height: 190px; size: cover;" class="card-img-top" alt="Thumbnail">
                <div class="card-body">
                <p class="card-text m-0 fs-6 text-light">CSS-PMS Seminar</p>
                    <a href="event.php?id=206" class="text-light">Read more...</a>
                    <p class="text-secondary ">2024-02-27</p>
                </div>
            </div>
        </div><div class="scrollable-card">
            <div class="card bg-dark">
                <img src="https://hcf-p.com/uploads/events/205.jpeg" style="max-height: 190px; size: cover;" class="card-img-top" alt="Thumbnail">
                <div class="card-body">
                <p class="card-text m-0 fs-6 text-light">Plantation Drive</p>
                    <a href="event.php?id=205" class="text-light">Read more...</a>
                    <p class="text-secondary ">2024-02-26</p>
                </div>
            </div>
        </div><div class="scrollable-card">
            <div class="card bg-dark">
                <img src="https://hcf-p.com/uploads/events/204.jpeg" style="max-height: 190px; size: cover;" class="card-img-top" alt="Thumbnail">
                <div class="card-body">
                <p class="card-text m-0 fs-6 text-light">Plantation Drive</p>
                    <a href="event.php?id=204" class="text-light">Read more...</a>
                    <p class="text-secondary ">2024-02-28</p>
                </div>
            </div>
        </div><div class="scrollable-card">
            <div class="card bg-dark">
                <img src="https://hcf-p.com/uploads/events/203.jpeg" style="max-height: 190px; size: cover;" class="card-img-top" alt="Thumbnail">
                <div class="card-body">
                <p class="card-text m-0 fs-6 text-light">Cleanliness Drive</p>
                    <a href="event.php?id=203" class="text-light">Read more...</a>
                    <p class="text-secondary ">2024-02-28</p>
                </div>
            </div>
        </div>                <!-- Event 1 -->
                <!-- <div class="scrollable-card">
                    <div class="card bg-dark">
                        <img src="https://hcf-p.com/assets/img//slide3.jpg" style="max-height: 190px; size: cover;" class="card-img-top" alt="Event 1 Thumbnail">
                        <div class="card-body">
                        <p class="card-text m-0 fs-6 text-light">Short description of Event 1.</p>
                            <a href="#" class="text-light">Read more...</a>
                            <p class="text-secondary ">Date: October 1, 2023</p>
                        </div>
                    </div>
                </div> -->




                <!-- Add more events as needed -->
            </div>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-sm-12 ">
            <p class="pt-2 text-center fst-italic"><a class="text-reset" href="events.php">See All</a></p>
        </div>
    </div>
</div>



<div class="container py-3" style="background-color: #F8F9FA;" id = "donatebox">
    <div class="row">
        <div class="col-md-6">
            <img class="rounded mx-auto d-block my-5 w-50" src="https://hcf-p.com/assets/img//bloodbag.jpg" alt="">
        </div>
        <div class="col-md-6 text-center text-md-start d-flex align-items-center">
            <div class="row">
                <div class="col-md-12">
                <p class="text-dark h2">Thalassemia</p>
                </div>
                <div class="col-md-12">
                <p class="text-secondary text-wrap ">Human Care Foundation in supporting thalassemia patients we are dedicated to providing assistance to individuals with thalassemia by organizing blood donation drives, raising awareness about the condition, and offering support services to patients and their families.</p>
                </div>
                <div class="col-md-12">
                <a class="btn btn-dark" role="button" href="donateNow.php" aria-disabled="true">Donate Now</a>
                </div>
            </div>
            
        </div>
    </div>
</div>


<!-- footer.php -->
<hr>
<div class=" p-4 w-100 bg-dark text-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4>Contact Us</h4>
                <p>Email: Hcfoundation22.Peshawar@gmail.com</p>
                <p>Phone: +92 3069161092</p>
            </div>
            <div class="col-md-6 text-md-right">
            <h4>Follow Us</h4>
            <a href="https://www.facebook.com/HCFoundation22?mibextid=ZbWKwL" class="text-light"><i class="bi bi-facebook"></i> Facebook</a>
            <span class="mx-2">|</span>
            <a href="https://x.com/HCFoundation22?t=CPD2kUgvMSmL6ePTuzNtnQ&s=09" class="text-light"><i class="bi bi-twitter"></i> Twitter</a>
            <span class="mx-2">|</span>
            <a href="https://www.instagram.com/hcfoundationkp?igsh=djBkcmJzbTR3djA4" class="text-light "><i class="bi bi-instagram"></i> Instagram</a>
        </div>
        </div>
        <hr class="my-3">
        <p class="text-center">&copy; 2024 HCF. All rights reserved.</p>
    </div>
</div>

<script src="../assets/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="../assets/js/script.js"></script> <!-- Your custom scripts go here -->
</body>
</html>
