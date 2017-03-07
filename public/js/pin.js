function check_pin() {
  var pin_input_element = document.getElementById("pin-code-input");
  var pin_entered = parseInt(pin_input_element.value);
  var pin_feedback = document.getElementById("pin-code-feedback");
  var salt = 'ba10cEAB3dgf725DCFGh4eH6';
  var expected_hash = 45864;
  var hashed_user_pin = ph_hasher(pin_entered, salt);
  var is_correct_pin = hashed_user_pin == expected_hash;

  if( is_correct_pin )
  {
    pin_feedback.innerHTML = "Correct PIN! Logging in...";
    log_in_with_pin();
  }
  else
  {
    if( isNaN(pin_entered) )
    {
      pin_feedback.innerHTML = "You must enter a 4-digit pin to login. Please try again.";
    }
    else {
      pin_feedback.innerHTML = "Invalid PIN Entered: " + String(pin_entered) + ". Please try again.";
    }
  }
}

function log_in_with_pin() {
  url = './backend.php';
  window.location = url;
}

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
