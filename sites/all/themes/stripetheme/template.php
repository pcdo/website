<?php

// PCDO customizations to search results

function phptemplate_search_item($item, $type) {
  $output = ' <dt class="title"><a href="'. check_url($item['link']) .'">'. check_plain($item['title']) .'</a></dt>';
  $info = array();
  if ($item['type']) {
    $info[] = $item['type'];
    if (($item['type']=='forum topic') || ($item['type']=='blog entry')) {
      if ($item['user']) {
        $info[] = $item['user'];
      }
      if ($item['date']) {
        $info[] = format_date($item['date'], 'small');
      }
    }
  }

  if (is_array($item['extra'])) {
    $info = array_merge($info, $item['extra']);
  }
  $output .= ' <dd>'. ($item['snippet'] ? '<p>'. $item['snippet'] . '</p>' : '') . '<p class="search-info">' . implode(' - ', $info) .'</p></dd>';
  return $output;
}

/**
 * Format the ical link
 *
 * @param path
 *   The url for the ical feed - jlc/pmw don't use ical link
 */
function stripetheme_event_ical_link($path) {
   return "";
}


/**
 * Format an individual upcoming event block item
 *
 * @param node
 *   The node to render as an upcoming event - jlc take out "($node->typename)"
 */
function stripetheme_event_upcoming_item($node) {
  $output = l($node->title, "node/$node->nid", array('attributes' => array('title' => $node->title)));
  $output .= '<span class="event-timeleft">('. $node->event['timeleft'] .')</span>';
  return $output;
}



/**
 * Format an event node for display in an expanded calendar, like a calendar page
 *
 */
function stripetheme_preprocess_event_node_day(&$variables) {
  $variables['node_type'] = check_plain(node_get_types('name', $variables['node']));
}

/**
 * Format an event node for display in an expanded calendar, like a calendar page
 *
 * @param node
 *   The node being displayed
 */
function stripetheme_preprocess_event_node_week(&$variables) {
  $variables['node_type'] = check_plain(node_get_types('name', $variables['node']));
}

/**
 * Format an event node for display in an expanded calendar, like a calendar page
 *
 * @param node
 *   The node being displayed
 */
function stripetheme_preprocess_event_node_month(&$variables) {
  $variables['node_type'] = check_plain(node_get_types('name', $variables['node']));
}

/**
 * Format an event node for display in an expanded calendar, like a calendar page
 *
 * @param $variables Theming variables
 */
function stripetheme_preprocess_event_node_table(&$variables) {
  $variables['node_type'] = check_plain(node_get_types('name', $variables['node']));
}
