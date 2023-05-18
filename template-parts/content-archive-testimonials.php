<div class="col-sm-6 d-flex ">
                  <img class="ourvolunteer-picture" src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="">
                  <div class="ourvolunteer-quotationmark">
                    <i class="fa-sharp fa-solid fa-quote-left"></i>
                </div>
                <div class="our-volunteer-text">
                  <div class="our-volunteer-quote">
                  <?= get_the_content(); ?>
                  </div>
                  <div class="our-volunteer-name"><?= get_the_title(); ?></div>
                  <div class="our-volunteer-position">Businessman</div>
                </div>
              </div>