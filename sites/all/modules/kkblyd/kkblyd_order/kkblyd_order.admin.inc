<?php
function kkblyd_order_admin_lydbog_form() {
  $form = array();

  $form['mail-lydbog'] = array(
    '#type' => 'textfield',
    '#title' => t('E-mail - lydbog'),
    '#description' => t('Enter the email you want to receive the orders.'),
    '#default_value' => variable_get('kkblyd_order_lydbog_send_mail', ''),
    '#required' => TRUE,
  );

  $form['mail-subscription'] = array(
    '#type' => 'textfield',
    '#title' => t('E-mail - subscription'),
    '#description' => t('Enter the email you want to receive the orders.'),
    '#default_value' => variable_get('kkblyd_order_subscription_send_mail', ''),
    '#required' => TRUE,
  );

  $form['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Save'),
  );
  return $form;
}

function kkblyd_order_admin_lydbog_form_validate($form, &$form_state) {
  if (!preg_match('/^[a-z0-9_\+-]+(\.[a-z0-9_\+-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*\.([a-z]{2,4})$/', $form_state['values']['mail-lydbog'])) {
    form_set_error('mail-lydbog', t('Must enter a valid email address.'));
  }
  if (!preg_match('/^[a-z0-9_\+-]+(\.[a-z0-9_\+-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*\.([a-z]{2,4})$/', $form_state['values']['mail-subscription'])) {
    form_set_error('mail-subscription', t('Must enter a valid email address.'));
  }
}

function kkblyd_order_admin_lydbog_form_submit($form, &$form_state) {
  variable_set('kkblyd_order_lydbog_send_mail', $form_state['values']['mail-lydbog']);
  variable_set('kkblyd_order_subscription_send_mail', $form_state['values']['mail-subscription']);
}


