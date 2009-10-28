<?php
/**
 * @file
 * Template for order mail message sent on submits.
 *
 * Available variables:
 * - $products: array of products ordered.
 * - $form_values: array with form values
 */
?>
<?php
  print t('Address and info:') . PHP_EOL;
  print '=================================================' . PHP_EOL;
  print t('Contact: !contact', array('!contact' => $form_values['mail-phone'])) . PHP_EOL;
  print '-------------------------------------------------' . PHP_EOL;
  print t('Name and address:') . PHP_EOL;
  print $form_values['info'] . PHP_EOL;
  print '-------------------------------------------------' . PHP_EOL;
  if ($form_values['member']) {
    print t("Is member of Danish blind community") . PHP_EOL;
  }
  else {
    print t("Is not member of Danish blind community") . PHP_EOL;
  }
  if ($form_values['comment']) {
    print '-------------------------------------------------' . PHP_EOL;
    print t('Comment:') . PHP_EOL;
    print $form_values['comment'] . PHP_EOL;
  }
  print '=================================================' . PHP_EOL;
?>

<?php
  print t("Subscription infomation:") . PHP_EOL;
  print '=================================================' . PHP_EOL;
  foreach ($products as $product) {
    print '-------------------------------------------------' . PHP_EOL;
    print t('Area: @area', array('@area' => $product['term']->name)) . PHP_EOL;
    print t('Product type: @product', array('@product' => $product['type'])) . PHP_EOL;
    print '-------------------------------------------------' . PHP_EOL;
  }
  print '=================================================' . PHP_EOL;
?>

<?php print t("End of message.")?>
