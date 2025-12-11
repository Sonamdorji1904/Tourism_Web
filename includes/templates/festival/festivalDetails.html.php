<div class="festival-card-detailed" id="<?php echo $stringHelper->safeDisplay($title); ?>">
    <div class="festival-image">
        <?php
        $src = $imageFilePath ?? '';
        if ($src !== '' && !preg_match('#^(?:https?://|/)#i', $src)) {
            $src = '../../' . ltrim($src, '/');
        }
        $srcEsc = htmlspecialchars($src);
        $altText = htmlspecialchars($title ?? 'Tour Image');
        ?>
        <img src="<?php echo $srcEsc; ?>" alt="Paro Tshechu">
        <div class="festival-badge"><?php echo $stringHelper->safeDisplay($category); ?></div>
    </div>
    <div class="festival-content">
        <h3 class="text-xl md:text-2xl lg:text-3xl font-semibold mb-3"><?php echo $stringHelper->safeDisplay($title); ?></h3>
        <div class="festival-meta mb-3">
            <span class="festival-location text-xs md:text-sm text-gray-700">📍 <?php echo $stringHelper->safeDisplay($venue); ?></span>
        </div>
        <p class="text-sm md:text-base lg:text-lg leading-normal mb-3"><?php echo $stringHelper->safeDisplay($description); ?></p>
        <div class="tour-actions">
            <a href="../../admin/update_festival.php?id=<?php echo urlencode($festival['id'] ?? ''); ?>" class="btn btn-primary">Update festival</a>
            <a href="../../controller/delete_festival.php?id=<?php echo $festivalId ?>" class="btn btn-outline" onclick="return confirm('Are you sure you want to delete this festival?');">Delete festival</a>
        </div>
    </div>

</div>