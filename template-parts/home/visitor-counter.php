
<?php
	global $wpdb;
  $adjustments = 0;
	$item_count = $wpdb->get_var( "SELECT COUNT(*) FROM {$wpdb->prefix}statistics_visitor" );
  $item_count += $adjustments;
	echo '<div class="statistics_visitor">サイト訪問者総数： <span class="number">' . $item_count . '</span>人</div>';

