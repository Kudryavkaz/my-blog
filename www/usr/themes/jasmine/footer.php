<?php if (!defined("__TYPECHO_ROOT_DIR__")) {
  exit();
} ?>

<div class="flex flex-col lg:mb-16 py-3   dark:dark:text-gray-500"">
    <div class="flex flex-col items-center">
        <div class="flex flex-row gap-x-1 items-center footer">
            <iconify-icon icon="tabler:copyright" class="text-gray-800 dark:dark:text-gray-400""></iconify-icon>
            <span>
                <?php echo getCopyrightDate(); ?> <?php $this->options->title(); ?>. All Rights Reserved.
            </span>
        </div>
            <span>
                <br><a href="https://beian.miit.gov.cn/">粤ICP备2023159395号-1</a>
            </span>
    </div>
</div>
<div class="blog-text-center"><a href="https://beian.miit.gov.cn/" target="_blank" rel="nofollow"><?php $this->options->bei(); ?></a></div>
<?php $this->footer(); ?>
<script>
    <?php $this->options->customScript(); ?>
</script>
