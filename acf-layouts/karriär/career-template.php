<div class="row">

    <div class="acf-container">
    <!-- career -->
    <?php $i = 0?>
    <?php if( have_rows('career') ): ?>
    <?php
    while( have_rows('career') ): the_row();
    $image = get_sub_field('logo');
    $text = get_sub_field('text');
    $i++;
    ?>
    <div class="col-md-3 career">
      <div class="career-text">
        <img class="career-logo" src="<?= $image['url']; ?>" />
        <p><?=$text?></p>
      </div>
    </div>

    <?php endwhile; endif?>
    </div>
</div>
