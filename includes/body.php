

<body>
    <?php
  include "header.php";
 
  ?>
    <!-- END nav -->

    <div class="hero-wrap js-fullheight" style="background-image: url('images/cs03.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
                data-scrollax-parent="true">
                <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>Explore
                            <br></strong> your favourite event</h1>
                    <div>
                        <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong
                                id="demo"><br></strong></h1>

                    </div>

                    <div class="browse d-md-flex col-md-12">
                        <div class="row">
                            <?php
                  $type_query = "SELECT * FROM event_type";
                  $run_query = mysqli_query($con,$type_query);
                  
                  if(mysqli_num_rows($run_query) > 0){
                    $i=0;   
                    while($row = mysqli_fetch_array($run_query)){
                           
                      $type_id = $row["type_id"];
                      $type_title = $row["type_title"];
                      $tag_id=$i++;
                      echo "
                      <span class='d-flex justify-content-center align-items-md-center'><a href='#$tag_id' style='border-radius:20px;margin-bottom:20px;'><i class=''></i>$type_title</a></span>
                                   
                      ";
                    }
                    
                  }
                  ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section services-section bg-light">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon"><span class="flaticon-guarantee"></span></div>
                        </div>
                        <div class="media-body p-2 mt-2">
                            <h3 class="heading mb-3"> Best Price Guarantee</h3>
                            <p>Affordable passes with no hidden fees.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon"><span class="flaticon-like"></span></div>
                        </div>
                        <div class="media-body p-2 mt-2">
                            <h3 class="heading mb-3">Fest-Goers Love Us</h3>
                            <p>Trusted by thousands of students and attendees.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon"><span class="flaticon-detective"></span></div>
                        </div>
                        <div class="media-body p-2 mt-2">
                            <h3 class="heading mb-3">Top Event Partners</h3>
                            <p>Collaboration with leading college fests and artists.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon"><span class="flaticon-support"></span></div>
                        </div>
                        <div class="media-body p-2 mt-2">
                            <h3 class="heading mb-3">24/7 Fest Support</h3>
                            <p>Real-time help before, during, and after the event.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=" ftco-destination">
        <div class="container">
            <div class="row justify-content-start mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate">
                    <span class="subheading">Banners</span>
                    <h2 class="mb-4"><strong>Events</strong> Posters</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="single-slider owl-carousel ftco-animate">
                        <div class="item">
                            <div class="destination">
                                <a href="#" class="img d-flex justify-content-center align-items-center"
                                    style="background-image: url(images/fs.jpg);">

                                </a>

                            </div>
                        </div>
                        <div class="item">
                            <div class="destination">
                                <a href="#" class="img d-flex justify-content-center align-items-center"
                                    style="background-image: url(images/ft.jpg);">

                                </a>

                            </div>
                        </div>
                        <div class="item">
                            <div class="destination">
                                <a href="#" class="img d-flex justify-content-center align-items-center"
                                    style="background-image: url(images/c.jpg);">

                                </a>

                            </div>
                        </div>
                        <div class="item">
                            <div class="destination">
                                <a href="#" class="img d-flex justify-content-center align-items-center"
                                    style="background-image: url(images/tq.jpg);">

                                </a>

                            </div>
                        </div>
                        <div class="item">
                            <div class="destination">
                                <a href="#" class="img d-flex justify-content-center align-items-center"
                                    style="background-image: url(images/rang.webp);">

                                </a>

                            </div>
                        </div>
                        <div class="item">
                            <div class="destination">
                                <a href="#" class="img d-flex justify-content-center align-items-center"
                                    style="background-image: url(images/ss.jpg);">

                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=" bg-light" id="events">
        <div class="container" id="0">
            <div class="row justify-content-start mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate">
                    <span class="subheading">events</span>
                    <h2 class="mb-4"><strong>Book Your</strong> Favourite Event</h2>
                </div>
            </div>
            <div class="row" id="technical">
                <div class="col-md-12 ftco-animate">
                    <div id="accordion">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="get_events"></div>
                                <?php
                      $event_query = "SELECT * FROM event_type";
                      $run_query1 = mysqli_query($con,$event_query);
                      
                      if(mysqli_num_rows($run_query1) > 0){
                          
                        while($row = mysqli_fetch_array($run_query1)){
                            
                        $type_id = $row["type_id"];
                        $type_title= $row["type_title"];
                        echo " 
                        <div class='card'>
                        <div class='card-header' id='$type_id'>
                               <a class='card-link' data-toggle='collapse'  href='#menu$type_id' aria-expanded='false' aria-controls='menu$type_id'>$type_title<span class='collapsed'><i class='icon-plus-circle'></i></span><span class='expanded'><i class='icon-minus-circle'></i></span></a>
                               </div> 
                               <div id='menu$type_id' class='collapse'>
                               <div class='card-body'>
                                 <div class='row'>";
                                 $type_query = "SELECT * FROM events,event_type WHERE events.type_id=event_type.type_id";
                                 $run_query2 = mysqli_query($con,$type_query);
                                 if(mysqli_num_rows($run_query2) > 0){
                       
                                 while($row = mysqli_fetch_array($run_query2)){
                                   $newtype_id    = $row['type_id'];
                                   $event_id   = $row['event_id'];
                                   $event_title = $row['event_title'];
                                   $type_title = $row['type_title'];
                                   $event_price = $row['event_price'];
                                   $img_link = $row['img_link'];
                                  
                                   if($newtype_id==$type_id){
                    
                                   echo "
                               
                                   
                                       
                                   <div class='col-md-6 col-lg-3 ftco-animate'>
                                   <div class='destination'>
                                     <a href='#' class='img img-2 d-flex justify-content-center align-items-center' style='background-image: url(./images/$img_link);'>
                                       <div class='d-flex justify-content-center align-items-center'>
                                         
                                       </div>
                                     </a>
                                     <div class='text p-3'>
                                       <h3><a href='#'>$event_title</a></h3>
                                       <p class='price' style='font-weight: 400;font-size: 18px;color: #2f89fc;'>
                                         $event_price
                                         <span>RS</span>
                                       </p>
                                       <p>Far far away, behind the word mountains, far from the countries</p>
                                       <hr>
                                       <p class='bottom-area d-flex'>
                                         <span><i class='icon-map-o'></i> Fest Commitee</span> 
                                         <span class='ml-auto'><a href='register.php'>Book</a></span>
                                       </p>
                                     </div>
                                   </div>
                                 </div>";
                                   }
                    
                                 }
                                 }
                                 
                              echo"  
                              </div>
                               </div>
                             </div>
                             </div>
                             ";
                    
                    
                        }
                        
                        
                      }
                      ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="ftco-section ftco-counter img" id="section-counter"
        style="background-image: url(images/bg_1.jpg); margin-top:100px">
        <div class="container">
            <div class="row justify-content-center mb-2 pb-3">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <h2 class="mb-4" style="font-size: 36px;">Vemanotsav</h2>
                    <h4 class="subheading" style="font-size: 20px;">Vemanotsav 2024, our vibrant college fest held last year, was a
                        spectacular celebration of talent, creativity, and culture. The campus buzzed with energy as
                        students from various colleges participated in a series of exciting events. Highlights of the
                        fest included an electrifying DJ night that had everyone dancing and a dazzling fashion show
                        that lit up the stage. Competitions and cultural performances added to the festive spirit,
                        making the event truly memorable. Vemanotsav 2024 left a lasting impression and set the bar
                        high for the coming years.</h4>
                </div>
            </div>
        
        </div>
    </section>




    <section class="ftco-section testimony-section bg-light">
        <div class="container">
            <div class="row justify-content-start ">
                <div class="col-md-5 heading-section ftco-animate">
                    <h2 class="mb-4 pb-3">know more</h2>
                    <p>Want to know more about the vemanotsav?
                      click on "read more" to know about the previous years vemanotsav.</p>
                    <p><a href="https://vemanait.edu.in/cultural.html" target="_blank" class="btn btn-primary btn-outline-primary mt-4 px-4 py-3">Read more</a></p>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5 heading-section ftco-animate">
                    <h2 class="mb-4 pb-3">know more</h2>
                    <p>Know more about vemana institute of technology.</p>
                    <p><a href="#" class="btn btn-primary btn-outline-primary mt-4 px-4 py-3">Read more</a></p>
                </div>

            </div>


    </section>

    <script>
  // Prevent back button navigation after logout
  if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
  }

  window.onpopstate = function () {
    history.go(1);
  };
</script>
