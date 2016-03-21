// Create a function to log the response from the Mandrill API
function log(obj) {
    $('#response').text(JSON.stringify(obj));
}

// create a new instance of the Mandrill class with your API key
var m = new mandrill.Mandrill('96SPW5ySNM_ZyquuZaRfFQ');



function sendTheMail() {
// Send the email!

var message = 'Name = ' + $('input#name').val() + '</br> Phone Number = ' + $('input#phone').val() + '</br> Email = ' + $('input#phone').val() + '</br> Message = ' + $('input#message').val();

// create a variable for the API call parameters
var params = {
    "message": {
        "from_email":"postmaster@sappcreation.com",
        "to":[{"email":"Sharanc25@gmail.com"}],
        "subject": "Email from sappcreation.com",
        "text": message
    }
};

    alert(message);

    /*
    m.messages.send(params, function(res) {
        log(res);
    }, function(err) {
        log(err);
    });
    */
}