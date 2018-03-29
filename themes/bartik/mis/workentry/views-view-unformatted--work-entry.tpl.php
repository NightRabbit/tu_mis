<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>

<table>
          <tr>
            <th>วันที่</th>
            <th style="width:15%">เวลาเข้า</th>
            <th style="width:15%">เวลาออก</th>
            <th style="width:40%">รายละเอียด</th>
          </tr>

<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
    <tr>
      <?php print $row; ?>
    </tr>
  </div>
<?php endforeach; ?>

</table>