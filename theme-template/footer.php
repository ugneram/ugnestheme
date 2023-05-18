<div class="footer">
          <div class="map">
            <div class="container-fluid">
              <div class="container">
                <div class="map-conttwo" style="background-image: url('<?= get_template_directory_uri() . "/assets/images/Dot Map.png " ?>')">

                  <div class="row">
                    <div class="col-sm-3">
                      <img src=" <?= get_template_directory_uri() . "/assets/images/image 4.png" ?>" class="logo-1" alt="" />
                      <br />
                      <p1 class="footerp">
                        Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur sunt in culpa qui
                        officia deserunt mollit anim qui officia deserunt mollit anim
                        id est laborum.</p1>
                    </div>
                    <div class="col-sm-3">
                      <h1 class="orangeh">WHO WE ARE</h1>
                      <ul class="orangeh">
                        <li><a href="#" class="footerlink"> Homepage</a></li>
                        <li><a href="#" class="footerlink"> About</a></li>
                        <li><a href="#" class="footerlink"> Schedule</a></li>
                        <li><a href="#" class="footerlink"> Gallery</a></li>
                        <li><a href="#" class="footerlink"> Contact</a></li>
                      </ul>
                    </div>
                    <div class="col-sm-3">
                      <h1 class="orangeh">WHERE WE WORK</h1>
                      <p1 class="footerp">
                        <ul class="footerlistitems">
                          <li> <img src="<?= get_template_directory_uri() . "/assets/images/address.png" ?>" alt=""> 99 S.t Jomblo Park Pekanbaru <br>28292. Indonesia</li>

                          <li> <img src="<?= get_template_directory_uri() . "/assets/images/phone2.png" ?> " alt=""> (0761) 654-123987</li>

                          <li> <img src="<?= get_template_directory_uri() . "/assets/images/mail (2).png" ?> " alt=""> info@yoursite.com</li>

                          <li> <img src="<?= get_template_directory_uri() . "/assets/images/clock.png" ?> " alt=""> Mon - Sat 09:00 - 17:00</li>
                        </ul>

                        </p>
                    </div>
                    <div class="col-sm-3">
                      <h1 class="orangeh">FOLLOW US</h1>
                      <p1 class="footerp lastp">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Tenetur, velit. Magnam ipsam tempore eveniet ab ipsa velit
                        repellat repudiandae praesentium .</p1>
                      <div class="socmedtwo">
                        <a href="http://www.facebook.com" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                        <a href="http://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                        <a href="http://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        <a href="http://www.youtube.com" target="_blank"><i class="fa-brands fa-youtube"></i></a>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="footerend">
          <div class="container-fluid justify-content-center align-items-center" style="padding-top: 45px;"></div>
          <div class="container d-flex">
            <p class="endtext">
              Copyright 2023 © NGOO Figma Template. Designed by Rometheme.




            </p>
          </div>
        </div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

      <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script>
        $(document).ready(function() {
          $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
              0: {
                items: 1,
              },
              600: {
                items: 1,
              },
              1000: {
                items: 1,
              },
            },
          });
        });
      </script>


      <script>
        const modal = document.getElementById('simpleModal');
        const modalBtn = document.getElementById('modalBtn');
        const closeBtn = document.getElementById('closeBtn');

        modalBtn.addEventListener('click', (event) => {
          modal.style.display = "block";
        });
        closeBtn.addEventListener('click', (event) => {
          modal.style.display = "none";
        })
      </script>

      <script>
        const text = document.getElementById("quote");
        const author = document.getElementById("author");
        const tweetButton = document.getElementById("tweet");

        const getNewQuote = async () => {
          //api for quotes
          var url = "https://type.fit/api/quotes";

          // fetch the data from api
          const response = await fetch(url);
          console.log(typeof response);
          //convert response to json and store it in quotes array
          const allQuotes = await response.json();

          // Generates a random number between 0 and the length of the quotes array
          const indx = Math.floor(Math.random() * allQuotes.length);

          //Store the quote present at the randomly generated index
          const quote = allQuotes[indx].text;

          //Store the author of the respective quote
          const auth = allQuotes[indx].author;

          if (auth == null) {
            author = "Anonymous";
          }

          //function to dynamically display the quote and the author
          text.innerHTML = quote;
          author.innerHTML = "~ " + auth;

          //tweet the quote
          tweetButton.href = "https://twitter.com/intent/tweet?text=" + quote + " ~ " + auth;
        }
        getNewQuote();

        congrats.gif
      </script>


      <script>
        document.addEventListener("click", e => {
          const isDropdownButton = e.target.matches("[data-dropdown-button]")
          if (!isDropdownButton && e.target.closest("[data-dropdown]") != null) return

          let currentDropdown
          if (isDropdownButton) {
            currentDropdown = e.target.closest("[data-dropdown]")
            currentDropdown.classList.toggle("active")
          }

          document.querySelectorAll("[data-dropdown].active").forEach(dropdown => {
            if (dropdown === currentDropdown) return
            dropdown.classList.remove("active")
          })
        })
      </script>


<?php wp_footer(); ?>
</body>

</html>