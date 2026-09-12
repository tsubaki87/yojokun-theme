
<?php include __DIR__ . '/../../config.php'; ?>
<div class="tag-list-wrap">
  <h5 class="tag-title">カテゴリーで探す</h5>
  <ul class="tag-ul">
    <?php
    $categories = get_categories();
    foreach ($categories as $category) {
        if (!in_array($category->slug, $slug_list_to_exclude)) {
          echo '<li class="tag-li"><a href="' . get_category_link($category->term_id) . '" class="tag-a">' . $category->name . '</a></li>';
        }
    }
    ?>
  </ul>
</div>

<div class="tag-list-wrap">
  <h5 class="tag-title">テーマで探す</h5>
  <ul class="tag-ul">
    <?php
    $tags = get_tags();
    foreach ($tags as $tag) {
        echo '<li class="tag-li"><a href="' . get_tag_link($tag->term_id) . '" class="tag-a">' . $tag->name . '</a></li>';
    }
    ?>
  </ul>
</div>