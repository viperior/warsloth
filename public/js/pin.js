function check_pin() {
  var pin_input_element = document.getElementById("pin-code-input");
  var pin_entered = parseInt(pin_input_element.value);
  var pin_feedback = document.getElementById("pin-code-feedback");
  var correct_pin = 1970;
  var is_correct_pin = pin_entered == correct_pin;

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
