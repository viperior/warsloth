function check_pin() {
  var pin_input_element = document.getElementById("pin-code-input");
  var pin_entered = parseInt(pin_input_element.value);
  var pin_feedback = document.getElementById("pin-code-feedback");
  var salt = 'ba10cEAB3dgf725DCFGh4eH6';
  var hashed_user_pin = ph_hasher(pin_entered, salt);
  var is_correct_pin = is_expected_hash(hashed_user_pin);

  if( is_correct_pin )
  {
    pin_feedback.innerHTML = "Correct PIN! Logging in...";
    log_in_with_pin(hashed_user_pin);
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

function hashes() {
  var team = 'cobra';
  var expected_hashes = [];

  /*  Why the hell are we displaying hashed pins in the source code??
      I mean, sure, they're hashed, but what if someone decrypts them?
      Or finds a way to login using only the hashed version of the pin?
      Also, why are pins for all 5 of our clients stored here? Sloppy!
      Please fix this before delivering the site to our clients!
      - Dan from IT

      You have discovered a trophy! Give this code to the judges: 3MplSoDP
  */

  switch(team) {
    case 'cobra':
      expected_hashes = [
        19404,
        40572,
        45864,
        29988,
        33516,
        49392
      ]
      break;
    case 'motherbrain':
      expected_hashes = [
        26460,
        47628,
        19404,
        37044,
        40572,
        56448
      ]
      break;
    case 'redfalcon':
      expected_hashes = [
        33516,
        38808,
        26460,
        44100,
        47628,
        63504
      ]
      break;
    case 'footclan':
      expected_hashes = [
        40572,
        29988,
        33516,
        35280,
        38808,
        28224
      ]
      break;
    case 'decepticons':
      expected_hashes = [
        47628,
        37044,
        24696,
        42336,
        45864,
        35280
      ]
      break;
  }

  return expected_hashes;
}

function is_expected_hash(hashed_user_pin) {
  var expected_hashes = hashes();
  var match_found = false;

  for( var i = 0; i < expected_hashes.length; i++ )
  {
    if( hashed_user_pin == expected_hashes[i] )
      match_found = true;
  }

  return match_found;
}

function log_in_with_pin(hashed_user_pin) {
  url = './loginPost.php?hashed_pin=' + hashed_user_pin /*+ '&method=pin'*/;
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
