<?php

/**
 * Format an node for display
 *
 * @param node
 *   The node which needs it's dates formatted
 */  
function phptemplate_event_nodeapi($node) {
  $output = '<div class="event-nodeapi">
    <div class="'. $node->type .'-start dtstart" title="'. event_format_date($node->event['start_utc'], 'custom', "Y-m-d\TH:i:s\Z") .'">'. event_format_date($node->event['start_exploded'], 'custom', 'l, F d, Y \a\t g:i a') .'</div></div>'."\n";
  if (!empty($node->event['has_end_date']) && $node->event['start'] != $node->event['end']) {
    $output .= '<div class="event-nodeapi">
    <div class="'. $node->type .'-end dtend" title="'. event_format_date($node->event['end_utc'], 'custom', "Y-m-d\TH:i:s\Z") .'"><label>'. t('Until: ') .'</label><br />'. $node->event['end_format'] .'</div></div>'."\n";
  }
  if (variable_get('configurable_timezones', 1)) {
    $zone = event_zonelist_by_id($node->event['timezone']);
    $output .= '<div class="event-nodeapi">
    <div class="'. $node->type .'-tz"><label>'. t('Timezone: ') .'</label>'. t($zone['name']) .'</div></div>'."\n";
  }
  return $output;
}
//event_format_date($node->event['start_exploded'], 'small');
