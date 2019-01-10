      // Create an instance of Elements.
      var elements = stripe.elements();

      // Custom styling can be passed to options when creating an Element.
      // (Note that this demo uses a wider set of styles than the guide below.)
      var style = {
          base: {
              color: '#495057',
              lineHeight: '1.5',
              fontFamily: '"Helvetica Neue", Helvetica, Arial, sans-serif',
              fontSmoothing: 'antialiased',
              fontSize: '16px',
              borderRadius: '0',
              border: '1px solid #ced4da',
	      iconColor: '#495057',
              '::placeholder': {
                  color: '#495057'
              }
          },
          invalid: {
              color: '#fa755a',
              iconColor: '#fa755a'
          }
      };

      // Create an instance of the card Element.
      var card = elements.create('card', {style: style});

      // Add an instance of the card Element into the `card-element` <div>.
      var ce = document.getElementById("card-element");
      if(ce){

          card.mount('#card-element');
	  
	  // Handle real-time validation errors from the card Element.
 	  card.addEventListener('change', function(event) {
	      var displayError = document.getElementById('card-errors');
	      if (event.error) {
	          displayError.textContent = event.error.message;
	      } else {
	          displayError.textContent = '';
	      }
	  });	  
      }

var b = document.getElementById('back-button');
if(b) {
    b.addEventListener('click', function (event) {
	event.preventDefault();

	var form = document.getElementById('payment-form');
	var hiddenInput = document.createElement('input');
	hiddenInput.setAttribute('type', 'hidden');
	hiddenInput.setAttribute('name', 'action');
	hiddenInput.setAttribute('value', 'back');
	form.appendChild(hiddenInput);

	// Submit the form
	form.submit();	
    });
}

	// Handle form submission.
var form = document.getElementById('payment-form');
if(form) {
    
	form.addEventListener('submit', function(event) {
	    event.preventDefault();
	    
	    if(form.querySelector('select[name=mail]').value == 'yes') {

		form.submit();
		
	    } else {

	        var extraDetails = {
	            name: form.querySelector('input[name=name]').value,
	        };
	  
	        stripe.createToken(card, extraDetails).then(function(result) {

		    if (result.error) {
	                // Inform the user if there was an error.
	                var errorElement = document.getElementById('card-errors');
	                errorElement.textContent = result.error.message;
	            } else {
	                // Send the token to your server.
	                stripeTokenHandler(result.token);
	            }

		});

	    }
	    
	});
    
}

	// Submit the form with the token ID.
	function stripeTokenHandler(token) {
	// Insert the token ID into the form so it gets submitted to the server
	var form = document.getElementById('payment-form');
	var hiddenInput = document.createElement('input');
	hiddenInput.setAttribute('type', 'hidden');
	hiddenInput.setAttribute('name', 'stripeToken');
	hiddenInput.setAttribute('value', token.id);
	form.appendChild(hiddenInput);

	// Submit the form
	form.submit();
	}
