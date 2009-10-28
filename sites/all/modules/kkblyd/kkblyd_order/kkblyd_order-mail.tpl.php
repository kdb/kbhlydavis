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
  if ($form_values['ean']) {
    print t('EAN: @ean', array('@ean' => $form_values['ean'])) . PHP_EOL;
    print '-------------------------------------------------' . PHP_EOL;
  }
  print t('Address and addition infomation:') . PHP_EOL;
  print $form_values['address'] . PHP_EOL;
  print '=================================================' . PHP_EOL;
?>

<?php
  print t("Order infomation:") . PHP_EOL;
  print '=================================================' . PHP_EOL;
  foreach ($products as $product) {
    print '-------------------------------------------------' . PHP_EOL;
    print t('Author - title: @title', array('@title' => $product['info'])) . PHP_EOL;
    print t('Product type: @product', array('@product' => $product['product'])) . PHP_EOL;
    print t('Amount: @amount', array('@amount' => $product['amount'])) . PHP_EOL;
    print '-------------------------------------------------' . PHP_EOL;
  }
  print '=================================================' . PHP_EOL;
?>

<?php print t("End of message.")?>
