<div class="acf-container">

    <div class="row">
    <!-- images -->
    <?php if( have_rows('images') ): ?>
    <?php
    while( have_rows('images') ): the_row();
    $image = get_sub_field('image');
    ?>
    <div class="col-md-4 career">
      <div class="career-text">
        <img class="career-logo" src="<?= $image['url']; ?>" />
      </div>
    </div>

    <?php endwhile; endif?>
    </div>
</div>
