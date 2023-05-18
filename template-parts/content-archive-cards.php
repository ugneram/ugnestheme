<div class="col-xl-4">
                  <div class="card">
                    <img src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" class="card-img-top" alt="..."></img>
                    <div class="card-body">
                      <h5 class="card-title"><?= get_the_title(); ?>
</h5>
                      <p class="card-text">
                        <?= get_the_content(); ?>
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