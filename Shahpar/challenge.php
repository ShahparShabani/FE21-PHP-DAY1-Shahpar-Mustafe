<?php   
          
          $movies = [
            [
                "name"=> "Frozen",
                "year"=> 2013,
                "like"=> 102,
                "img"=> "frozen-2.jpeg",
                "categories"=> [
                    "animation",
                    "adventure",
                    "comedy",
                    "family",
                    "fantasy",
                    "musical"
                ],
                "release-date"=> "2013-11-27",
                "director"=> [
                    "Chris Buck",
                    "Jennifer Lee"
                ],
                "writer"=> [
                    "Jennifer Lee",
                    "Chris Buck",
                    "Shane Morris"
                ],
                "storyline"=> "It is the story of a fearless princess who sets off on a journey alongside a rugged iceman, his loyal reindeer, and a naive snowman to find her estranged sister."
            ],
            [
                "name"=> "How To Train Your Dragon",
                "year"=> 2010,
                "like"=> 98,
                "img"=> "dragon-1.jpeg",
                "categories"=> [
                    "animation",
                    "action",
                    "adventure",
                    "comedy",
                    "fantasy",
                    "family"
                ],
                "release-date"=> "2010-03-26",
                "director"=> [
                    "Dean DeBlois",
                    "Chris Sanders"
                ],
                "writer"=> [
                    "William Davies",
                    "Dean DeBlois",
                    "Chris Sanders",
                    "Cressida Cowell",
                    "Adam F. Goldberg"
                ],
                "storyline"=> "A hapless young Viking who aspires to hunt dragons becomes the unlikely friend of a young dragon himself, and learns there may be more to the creatures."
            ],
            [
                "name"=> "Moana",
                "year"=> 2016,
                "like"=> 107,
                "img"=> "moan-1.jpeg",
                "categories"=> [
                    "animation",
                    "adventure",
                    "comedy"
                ],
                "release-date"=> "2016-11-23",
                "director"=> [
                    "Ron Clements",
                    "John Musker",
                    "Don Hall",
                    "Chris Williams"
                ],
                "writer"=> [
                    "Jared Bush",
                    "Ron Clements",
                    "John Musker",
                    "Chris Williams",
                    "Don Hall",
                    "Pamela Ribon",
                    "Aaron Kandell",
                    "Jordan Kandell"
                ],
                "storyline"=> "In Ancient Polynesia, when a terrible curse incurred by the Demigod Maui reaches Moana's island, she answers the Ocean's call to seek out the Demigod."
            ],
            [
                "name"=> "Jurassic Park",
                "year"=> 1993,
                "like"=> 127,
                "img"=> "juras-1.jpeg",
                "categories"=> [
                    "adventure",
                    "thriller",
                    "sci-fi"
                ],
                "release-date"=> "1993-06-11",
                "director"=> "Steven Spielberg",
                "writer"=> [
                    "Michael Crichton",
                    "David Koepp"
                ],
                "actors"=> [
                    "Sam Neill",
                    "Laura Dern",
                    "Jeff Goldblum"
                ],
                "storyline"=> "Huge advancements in scientific technology have enabled a mogul critical security systems are shut down and it now becomes a race for survival with dinosaurs roaming freely over the island."
            ],
            [
                "name"=> "Incredibles 2",
                "year"=> 2018,
                "like"=> 118,
                "img"=> "incredibles-2.jpeg",
                "categories"=> [
                    "animation",
                    "action",
                    "adventure"
                ],
                "release-date"=> "2018-06-14",
                "director"=> "Brad Bird",
                "writer"=> [
                    "Brad Bird"
                ],
                "storyline"=> "While the Parr family has accepted its collective calling as superheroes, the fact remains that their special heroism is still illegal."
            ],
            [
                "name"=> "Toy Story 4",
                "year"=> 2019,
                "like"=> 100,
                "img"=> "toy-1.jpeg",
                "categories"=> [
                    "animation",
                    "adventure",
                    "comedy",
                    "family",
                    "fantasy"
                ],
                "release-date"=> "2019-06-21",
                "director"=> " Josh Cooley",
                "writer"=> [
                    "John Lasseter",
                    "Andrew Stanton",
                    "Josh Cooley",
                    "Valerie LaPointe",
                    "Rashida Jones",
                    "Will McCormack",
                    "Martin Hynes",
                    "Stephany Folsom"
                ],
                "storyline"=> "When a new toy called Forky joins Woody and the gang, a road trip alongside old and new friends reveals how big the world can be for a toy."
            ],
            [
                "name"=> "The Lion King",
                "year"=> 1994,
                "like"=> 88,
                "img"=> "lion-1.jpeg",
                "categories"=> [
                    "animated",
                    "musical"
                ],
                "release-date"=> "1994-06-15",
                "director"=> [
                    "Roger Allers",
                    "Rob Minkoff"
                ],
                "writer"=> [
                    "Linda Woolverton",
                    "Irene Mecchi",
                    "Jonathan Roberts",
                    "Joe Ranft"
                ],
                "storyline"=> "The Lion King tells the story of Simba, a young lion who is to succeed his father, Mufasa, as King of the Pride Lands."
            ],
            [
                "name"=> "Brave",
                "year"=> 2013,
                "like"=> 107,
                "img"=> "brave-1.jpeg",
                "categories"=> [
                    "animation",
                    "adventure",
                    "comedy"
                ],
                "release-date"=> "2012-11-23",
                "director"=> [
                    "Mark Andrews",
                    "Brenda Chapman",
                    "Steve Purcell"
                ],
                "writer"=> [
                    "Jared Bush",
                    "Ron Clements",
                    "John Musker",
                    "Chris Williams",
                    "Don Hall",
                    "Pamela Ribon",
                    "Aaron Kandell",
                    "Jordan Kandell"
                ],
                "storyline"=> "Determined to make her own path in life, Princess Merida (Kelly Macdonald) defies a custom that brings chaos to her kingdom. Granted one wish, Merida must rely on her bravery."
            ]
        ];

        ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Challenge PHP Day-1</title>
    <!-- font-awesome css -->
    <link rel="stylesheet" href="./fontawesome-free-5.15.4-web/css/all.css" />

    <!-- bootstrap css -->
    <link rel="stylesheet" href="./bootstrap-5.1.1-dist/css/bootstrap.min.css" />
    <!-- personla css -->
    <link rel="stylesheet" href="./css/main.css" />
</head>

<body>


    <!-- Header container begine-->
    <div id="header-container">
        <!--First Navbar - Logo -->
        <nav class="my-nav-top navbar pt-3 pb-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.html">
                    <img src="./img/html.svg" alt="" width="30" height="24" class="d-inline-block align-text-top" />
                    Movie 
                </a>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <!--Second Navbar - links -->
        <nav class="my-nav-bottom navbar navbar-expand-lg pt-3 pb-3">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="my-navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active myIsActive" aria-current="page" href="#">Home</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="advanced.php">About us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- Header container end-->
    <!-- Main container begine-->
    <div id="main-container">
        <div class="
          my-row
          container
          bg-white
          mt-md-5 mt-sm-3 mt-3
          pb-md-4 pb-sm-3 pb-3
        ">

            <h4 class="text-center main-title">Movies</h4>

            <div class="container mt-4 mb-4">
                <!-- First row-->
                <div id="movie-result" class="row row-cols-1 row-cols-lg-3 row-cols-md-2 row-cols-md-1 g-4">

                    <?php   
          

          for ($row = 0; $row < count($movies); $row++) {
            echo '<div class="my-movie-card-container col">';
            
          
       
              echo '<div class="my-movie-card card h-100 border border-2 rounded-2 mb-3 " style="max-width: 540px">
              <div class="row h-100 g-0">
                <div class="my-movie-col-md-5 col-md-5">
                  <img
                  src="img/'. $movies[$row]["img"].'"
                    class="small-img h-100 rounded p-2 img-fluid rounded-start"
                    alt="Movie photo"
                  />
                </div>
                <div class="col-md-7">
                  <div class="my-movie-card-body card-body h-100 ${likeParsed > 100 ? "popular" : "not-popular"}">
                    <h5 class="card-title"><a class="" data-bs-toggle="modal" data-bs-target="#movieModal${i}">
                    '. $movies[$row]["name"].'
                  </a></h5>
                    <p class="card-text description-txt">
                    '.$movies[$row]["storyline"].'
                    </p>
                    <p id="like-wrapper" class="card-text text-end">
                      <small class="text-muted"
                        ><a class="like-btn" id="a-like$'.[$row].'"" data-bs-toggle="modal" data-bs-target="#movieModal2${i}">
                       <i class="fas fa-thumbs-up"></i> </a><span id="like'.[$row].'" class=dot>'.$movies[$row]["like"] .'</span></small
                      >
                    </p>
                  </div>
                </div>
              </div>
              </div> </div>';

          }          


?>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer container -->
    <div id="footer-container" class="text-center text-black">
        <!-- Footer Links row-->
        <div class="row text-center d-flex justify-content-center pt-5 mt-5">
            <div class="col-md-2">
                <h6 class="text-uppercase font-weight-bold">
                    <a href="./index.html" class="text-black">Home</a>
                </h6>
            </div>

            <div class="col-md-2">
                <h6 class="text-uppercase font-weight-bold">
                    <a href="#!" class="text-black">About us</a>
                </h6>
            </div>

            <div class="col-md-2">
                <h6 class="text-uppercase font-weight-bold">
                    <a href="#!" class="text-black">Contact</a>
                </h6>
            </div>
        </div>

        <hr class="my-5" />
        <!-- Main container end-->
        <!-- Footer Restaurant Name begin-->
        <div class="row d-flex justify-content-center mb-5">
            <div class="col-lg-8">
                <h3>Cars Agency</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                    distinctio earum repellat quaerat voluptatibus placeat nam, commodi
                    optio pariatur est quia magnam eum harum corrupti dicta, aliquam
                    sequi voluptate quas.
                </p>
            </div>
        </div>

        <!-- Footer Restaurant Name end -->

        <!-- Footer Social section begin -->
        <section class="text-center mb-5">
            <a href="" class="text-black me-4">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="" class="text-black me-4">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="text-black me-4">
                <i class="fab fa-google"></i>
            </a>
            <a href="" class="text-black me-4">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="text-black me-4">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="" class="text-black me-4">
                <i class="fab fa-github"></i>
            </a>
        </section>
        <!-- Footer Social section begin -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2021 Copyright:
            <a class="text-black" href="https://mdbootstrap.com/">Shahpar</a>
        </div>
        <!-- Copyright -->
    </div>
    <!-- Footer End-->

    <!-- load json -->
    <script src="./movies.json"></script>

    <!-- bootstrap js -->
    <script src="./bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>