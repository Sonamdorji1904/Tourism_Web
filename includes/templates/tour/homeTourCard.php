 <?php
    $src = $imageFilePath ?? '';
    if ($src !== '' && !preg_match('#^(?:https?://|/)#i', $src)) {
        $src = '../../' . ltrim($src, '/');
    }
    $srcEsc = htmlspecialchars($src);
    $altText = htmlspecialchars($title ?? 'Trek Image');
    ?>

 <div class="tour-card">
     <div class="tour-image">
         <img src="<?php echo $srcEsc; ?>" alt="<?php echo $altText; ?>">
         <div class="tour-duration"><?php echo (int)$stringHelper->safeDisplay($day_number) ?> Days</div>
     </div>
     <div class="tour-content">
         <h3><?php echo $stringHelper->safeDisplay($title) ?></h3>
         <p><?php echo $stringHelper->safeDisplay($description) ?></p>
         <ul class="tour-highlights">
             <li><?php echo $stringHelper->safeDisplay($key_destinations) ?></li>
             <li><?php echo $stringHelper->safeDisplay($experience) ?></li>
             <li><?php echo $stringHelper->safeDisplay($theme) ?></li>
         </ul>
         <a href="get_tour_details.php?id=<?php echo $tour_id ?>" class="btn btn-outline">Learn More</a>
     </div>
 </div>