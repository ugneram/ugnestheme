
<?php
/*
* Template Name: Homepage

*/
get_header(); ?>




  <div class="hero-carousel">
    <div class="owl-carousel owl-theme">





<?php
$args = array(
    'post_type' => 'carousel',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'ASC'
);
$query = new WP_Query($args);
?>

<?php
if ($query->have_posts()) {

    while ($query->have_posts()) {
        $query->the_post();
        get_template_part('template-parts/content', 'archive-carousel');
    }
}

?>


      <div class="item">
        <div class="hero" style="background-image: url('<?= get_template_directory_uri() . "/assets/images/larm-rmah-AEaTUnvneik-unsplash.jpg " ?>')"> 
        </div>

      </div>
      <div class="item">
        <div class="hero" style="background-image: url('<?= get_template_directory_uri() . "/assets/images/loren-joseph-XoBWUBA3Amg-unsplash.jpg " ?>')">
        </div>


      </div>
    </div>

    <div class="cards">
      <div class="container-fluid">
        <div class="container">
          <div class="weneedyourhelp">
            <h2 class="weneed">We <a href="#">Need</a> Your Help</h2>
            <div class="hr-center d-flex">
              <hr />
            </div>
            <p class="weneed-para">
              Excepteur sint occaecat cupidatat non proident sunt in culpa qui
              officia deserunt mollit anim id est laborum.
            </p>
          </div>
          <div class="threecards d-flex justify-content-center">
            <div class="col">
              <div class="row forcards">



              <?php
$args = array(
    'post_type' => 'cards',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'ASC'
);
$query = new WP_Query($args);
?>

<?php
if ($query->have_posts()) {

    while ($query->have_posts()) {
        $query->the_post();
        get_template_part('template-parts/content', 'archive-cards');
    }
}

?>



                <div class="col-xl-4">
                  <div class="card">
                    <img src="https://cdn.zakat.org/wp-content/uploads/IMG_0096.jpg" class="card-img-top" alt="..."></img>
                    <div class="card-body">
                      <h5 class="card-title">EDUCATION FOR SYRIAN CHILD</h5>
                      <p class="card-text">
                        Teritatis et quasi architecto. Sed ut perspiciatis unde
                        omnis iste natus error sit voluptatem accusantium dolore
                        mque laudantium, totam rem aperiam, eaque ipsa quae ab
                        illo invent.
                      </p>
                      <div class="progress-1 d-flex">
                        <div class="progresstext">
                          <a href="#">$2,580</a> to go
                        </div>
                        <div class="progresstext percent">80%</div>
                      </div>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-4">
                  <div class="card">
                    <img src="https://onecms-res.cloudinary.com/image/upload/s--b3lvhWr1--/c_fill,g_auto,h_523,w_693/f_auto,q_auto/10506899-10203723749567811-2008314772389456849-o.jpg?itok=tkkMWHLM" class="card-img-top" alt="..."></img>
                    <div class="card-body">
                      <h5 class="card-title">HOME FOR KAMPAR'S CHILD</h5>
                      <p class="card-text">
                        Teritatis et quasi architecto. Sed ut perspiciatis unde
                        omnis iste natus error sit voluptatem accusantium dolore
                        mque laudantium, totam rem aperiam, eaque ipsa quae ab
                        illo invent.
                      </p>
                      <div class="progress-1 d-flex">
                        <div class="progresstext">
                          <a href="#">$2,580</a> to go
                        </div>
                        <div class="progresstext percent">80%</div>
                      </div>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-4">
                  <div class="card">
                    <img src="https://www.unicef.org/southsudan/sites/unicef.org.southsudan/files/styles/hero_extended/public/20211020_Floods%20Twic%20East%20in%20Jonglei_Chol%20%2837%29.jpg?itok=V4PxQgAx" class="card-img-top" alt="..."></img>
                    <div class="card-body">
                      <h5 class="card-title">CLEAN WATER FOR SOUTH SUDAN'S</h5>
                      <p class="card-text">
                        Teritatis et quasi architecto. Sed ut perspiciatis unde
                        omnis iste natus error sit voluptatem accusantium dolore
                        mque laudantium, totam rem aperiam, eaque ipsa quae ab
                        illo invent.
                      </p>
                      <div class="progress-1 d-flex">
                        <div class="progresstext">
                          <a href="#">$2,580</a> to go
                        </div>
                        <div class="progresstext percent">80%</div>
                      </div>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--MODAL 1 AND QUOTES-->
    <div class="button1 seeall" style="padding-top: 70px;padding-bottom: 90px;">
      <button id="modalBtn" class="btn btn-primary">SEE ALL CAUSE</button>
      <div id="simpleModal" class="modal">
        <div class="modal-content">
          <span id="closeBtn">&times;</span>

          <div class="containermodal">
            <h1>
              <i class="fas fa-quote-left"></i>
              <span class="quote" id="quote"></span>
              <i class="fas fa-quote-right"></i>
            </h1>
            <p class="author" id="author"></p>

            <hr />
            <div class="buttons">

              <button class="next" onclick="getNewQuote()">Next quote</button>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="urgentcause">
      <div class="container-fluid">
        <div class="container">
          <div class="urgent-cause-heading urgent-heading">
            <a href="#">Urgent</a> Cause
          </div>
          <hr />
          <div class="row">
            <div class="col-6 urgent-cause-text p-4">
              <div class="urgent-cause-heading school">
                <a href="#">#School</a> for South Kampar's Students
              </div>
              <div class="urgent-cause-paragraph">
                Teritatis et quasi architecto. Sed ut perspiciatis unde omnis
                iste natus error sit voluptatem accusantium dolore mque
                laudantium, totam rem aperiam, eaque ipsa quae ab illo invent.
              </div>
              <div class="progress-1 d-flex">
                <div class="urgent-cause progresstext">
                  <a href="#">Donated</a>
                </div>
                <div class="urgent-cause progresstext">80%</div>
              </div>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="urgent-cause progresstext">
                <a href="#">$18,500</a> Raised of <a href="#">$25,000</a> Goal
              </div>
            </div>
            <div class="col-6 urgent-cause-picture p-4">
              <div class="urgent-cause-greybox">

                <img src="https://www.wikiimpact.com/wp-content/uploads/2021/02/vv-1-1.jpg" class="urgent-cause-img" alt="..."> </img>
                <div class="greyboxbutton">
                  <div class="btn btn-primary">DONATE NOW</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="howtohelpus">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-6 howto-picture"></div>
            <div class="col-6 howto-text">
              <div class="howto-heading">How To <a href="#">Help</a> Us</div>
              <hr />
              <div class="howto-paragraph">
                Teritatis et quasi architecto. Sed ut perspiciatis unde omnis
                iste natus error sit voluptatem accusantium dolore mque
                laudantium, totam rem aperiam, eaque ipsa quae ab illo invent.
              </div>
              <div class="howto-list">
                <div class="howto-senddonation d-flex">
                  <div class="how-to-icon">
                    <div><i class="fa-solid fa-gift"></i></div>
                  </div>
                  <div class="howto-list">
                    <div class="howto-list-heading">
                      Send Donation
                      <div class="howto-list-heading-number">01</div>
                    </div>
                    <div class="howto-list-paragraph">
                      Teritatis et quasi architecto. Sed ut perspiciatis unde
                      omnis iste natus error sit voluptatem accusantium dolore.
                    </div>
                  </div>
                </div>
                <div class="howto-senddonation d-flex">
                  <div class="how-to-icon">
                    <i class="fa-solid fa-user-tie"></i>
                  </div>
                  <div class="howto-list">
                    <div class="howto-list-heading">
                      Become Volunteer
                      <div class="howto-list-heading-number">02</div>
                    </div>
                    <div class="howto-list-paragraph">
                      Teritatis et quasi architecto. Sed ut perspiciatis unde
                      omnis iste natus error sit voluptatem accusantium dolore.
                    </div>
                  </div>
                </div>
                <div class="howto-senddonation d-flex">
                  <div class="how-to-icon">
                    <i class="fa-solid fa-bullhorn"></i>
                  </div>
                  <div class="howto-list">
                    <div class="howto-list-heading">
                      Share Media
                      <div class="howto-list-heading-number">03</div>
                    </div>
                    <div class="howto-list-paragraph">
                      Teritatis et quasi architecto. Sed ut perspiciatis unde
                      omnis iste natus error sit voluptatem accusantium dolore.
                    </div>
                  </div>
                </div>
              </div>
              <div class="howto-becomewolunteer"></div>
              <div class="howto-sharemedia"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="map">
      <div class="container-fluid">
        <div class="container">

          <div class="map-cont" style="background-image: url('<?= get_template_directory_uri() . "/assets/images/Dot Map.png " ?>')">

            <div class="map-heading">We Help Many <a href="#">People</a></div>
            <div class="map-heading-small">Want to Become a Volunteer</div>
            <div class="map-paragraph">
              Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste
              natus error sit voluptatem accusantium dolore mque laudantium,
              totam rem aperiam, eaque ipsa quae ab illo invent. Sed ut
              perspiciatis unde omnis iste natus error sit .
            </div>
            <div class="buttons-map">
              <div class="mapbutton">
                <div class="btn btn-primary orangebutton" style="margin:17px">LEARN MORE</div>
              </div>
              <div class="mapbutton">
                <div class="btn btn-primary orangebutton" style="margin:17px">JOIN US NOW</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="ourvolunteerssay">
      <div class="container-fluid">
        <div class="container">
          <div class="ourvolunteerssay-heading">
            Our <a href="#">Volunteers</a> Says
          </div>
          <div class="ourvolunteers-line">
            <hr />
          </div>
          <div class="container">
            <div class="row more">


            <?php
$args = array(
    'post_type' => 'testimonials',
    'posts_per_page' => 4,
    'orderby' => 'date',
    'order' => 'ASC'
);
$query = new WP_Query($args);
?>

<?php
if ($query->have_posts()) {

    while ($query->have_posts()) {
        $query->the_post();
        get_template_part('template-parts/content', 'archive-testimonials');
    }
}

?>


              <div class="col-sm-6 d-flex ">
                  <img class="ourvolunteer-picture" src="<?= get_template_directory_uri() . "/assets/images/man1.jpg" ?>" alt="">
                  <div class="ourvolunteer-quotationmark">
                    <i class="fa-sharp fa-solid fa-quote-left"></i>
                </div>
                <div class="our-volunteer-text">
                  <div class="our-volunteer-quote">
                    Teritatis et quasi architecto. Sed ut perspiciatis unde
                    omnis iste natus error sit voluptatem accusantium dolore
                    mque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                    invent.
                  </div>
                  <div class="our-volunteer-name">- John Doel</div>
                  <div class="our-volunteer-position">Businessman</div>
                </div>
              </div>
              <div class="col-sm-6 d-flex">
                  <img class="ourvolunteer-picture" src="<?= get_template_directory_uri() . "/assets/images/man2.jpg" ?>" alt="">

                  <div class="ourvolunteer-quotationmark">
                    <i class="fa-sharp fa-solid fa-quote-left"></i>
                 
                </div>
                <div class="our-volunteer-text">
                  <div class="our-volunteer-quote">
                    Teritatis et quasi architecto. Sed ut perspiciatis unde
                    omnis iste natus error sit voluptatem accusantium dolore
                    mque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                    invent.
                  </div>
                  <div class="our-volunteer-name">- Josh Doel</div>
                  <div class="our-volunteer-position">Contractor</div>
                </div>
              </div>
              <div class="w-100"></div>
              <div class="row more">
                <div class="col-sm-6 d-flex">
                  <img class="ourvolunteer-picture" src="<?= get_template_directory_uri() . "/assets/images/woman2.jpg" ?>" alt="">
                    <div class="ourvolunteer-quotationmark">
                      <i class="fa-sharp fa-solid fa-quote-left"></i>
                    </div>



                  <div class="our-volunteer-text">
                    <div class="our-volunteer-quote">
                      Teritatis et quasi architecto. Sed ut perspiciatis unde
                      omnis iste natus error sit voluptatem accusantium dolore
                      mque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                      invent.
                    </div>
                    <div class="our-volunteer-name">- Raisa Doel</div>
                    <div class="our-volunteer-position">House Keeper</div>
                  </div>
                </div>
                <div class="col-sm-6 d-flex">
                    <img class="ourvolunteer-picture" src="<?= get_template_directory_uri() . "/assets/images/woman1.jpg" ?>" alt="">
                    <div class="ourvolunteer-quotationmark">
                      <i class="fa-sharp fa-solid fa-quote-left"></i>
                    </div>
                  <div class="our-volunteer-text">
                    <div class="our-volunteer-quote">
                      Teritatis et quasi architecto. Sed ut perspiciatis unde
                      omnis iste natus error sit voluptatem accusantium dolore
                      mque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                      invent.
                    </div>
                    <div class="our-volunteer-name">- Sasha Doel</div>
                    <div class="our-volunteer-position">Freelance</div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>






      <div class="ourgallery">
        <div class="container-fluid">
          <div class="container">
            <div class="ourgallery-heading">Our <a href="#">Gallery</a></div>
            <div class="ourgallery-line">
              <hr />
            </div>
            <div class="ourgallery-para">
              Excepteur sint occaecat cupidatat non proident sunt in culpa qui
              officia deserunt mollit anim id est laborum.
            </div>
            <div class="row gallery-row">



            <?php
                $args = array(
                    'post_type' => 'gallery',
                    'posts_per_page' => 6,
                    'orderby' => 'date',
                    'order' => 'ASC'
                );
                $query = new WP_Query($args);
                ?>

                <?php
                if ($query->have_posts()) {

                    while ($query->have_posts()) {
                        $query->the_post();
                        get_template_part('template-parts/content', 'archive-gallery');
                    }
                }
                ?>



              <div class="col-sm-4 galleryimg"><img src="https://th-i.thgim.com/public/news/cities/chennai/wyoek1/article31192582.ece/alternates/LANDSCAPE_1200/30MPYUVANGO1" class="img-fluid" alt="galleryimg">
              </div>
              <div class="col-sm-4 galleryimg"><img src="https://images.livemint.com/img/2021/05/12/600x338/ca03b508-b306-11eb-8e1b-80b8ec5f5986_1620834068460_1620834233590.jpg" class="img-fluid" alt="galleryimg">
              </div>
              <div class="col-sm-4 galleryimg"><img src="https://indiaisus226623108.files.wordpress.com/2021/04/cropped-ykw.jpg" class="img-fluid" alt="galleryimg">
              </div>
              <div class="col-sm-4 galleryimg"><img src="https://www.good-name.org/wp-content/uploads/2020/07/107518885_3108525722595198_8324499712367940596_o.webp" class="img-fluid" alt="galleryimg">
              </div>
              <div class="col-sm-4 galleryimg"><img src="https://www.worldbank.org/content/dam/photos/768x384/2019/apr/BD-old-age.jpg" class="img-fluid" alt="galleryimg">
              </div>
              <div class="col-sm-4 galleryimg"><img src="https://i2.wp.com/blog.giveindia.org/wp-content/uploads/education.jpg?fit=984%2C656&ssl=1" class="img-fluid" alt="galleryimg">
              </div>





            </div>
          </div>
        </div>
      </div>







      <div class="bottombar">
        <div class="container-fluid" style="padding-bottom: 10px;padding-top: 10px;">
          <div class="container d-flex justify-content-between align-items-center">
            <div class="paragraphend">
              Join your hand with us for a better life and beautiful future.
            </div>
            <div class="buttontwo col-2">
              <div class="btntwo">DONATE NOW</div>
            </div>
          </div>
        </div>

        <?php get_footer(); ?>