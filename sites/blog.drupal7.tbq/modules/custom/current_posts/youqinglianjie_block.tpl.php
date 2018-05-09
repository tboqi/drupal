<?php foreach($items as $item): ?>
<section class="block block-views contextual-links-region sidebar-module clearfix">
    <h4 class="block-title"><?php echo $item['data']; ?></h4>
    <div class="view-content">
    <?php if (!empty($item['sub_items'])): ?>
        <?php foreach($item['sub_items'] as $sub_item): ?>
        <div class="views-field views-field-title">
            <span class="field-content"><a href="<?php echo $sub_item['url']; ?>" target="_blank"><?php echo $sub_item['title']; ?></a></span>
        </div>
        <?php endforeach; ?>
    <?php else: ?>
        这里没有内容
    <?php endif; ?>
    </div>
</section>
<?php endforeach; ?>
