function ph_hasher(pin, salt) {
  var pin_text = pin.toString();
  var hashed_pin = 0;
  var salt_sum = 0;

  for( i = 0; i < pin_text.length; i++ )
  {
    var current_digit = pin_text.charAt(i);
    hashed_pin += parseInt(current_digit);
  }

  for( i = 0; i < salt.length; i++ )
  {
    var current_salt_char_code = salt.charCodeAt(i);
    salt_sum += current_salt_char_code;
  }

  hashed_pin *= salt_sum;

  return hashed_pin;
}

function protohasher() {
  var pin_code_input = document.getElementById('pin-code-input');
  var pin = parseInt(pin_code_input.value);

  var output = document.getElementById('output');

  var salt = 'ba10cEAB3dgf725DCFGh4eH6';
  var hashed_pin = ph_hasher(pin, salt);

  output.innerHTML = hashed_pin;
}
