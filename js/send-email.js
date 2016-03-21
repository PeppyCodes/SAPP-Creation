// Create a function to log the response from the Mandrill API
function log(obj) {
    $('#response').text(JSON.stringify(obj));
}

// create a new instance of the Mandrill class with your API key
var m = new mandrill.Mandrill('96SPW5ySNM_ZyquuZaRfFQ');

function sendTheMail(event) {
// Send the email!

   /* if (!$('input#name').val() || !$('input#phone').val() || !$('input#email').val() || !$('textarea#message').val() ) {
        return false;
    } */

    var message = 'Name - ' + $('input#name').val() + '\n Phone Number - ' + $('input#phone').val() + '\n Email - ' + $('input#email').val() + '\n Message - ' + $('textarea#message').val();


    // create a variable for the API call parameters
    var params = {
        "message": {
            "from_email":"postmaster@sappcreation.com",
            "to":[{"email":"gr8.karthi@gmail.com"}],
            "subject": "Email from www.sappcreation.com",
            "text": message
        }
    };


    m.messages.send(params, function(res) {
        log(res);
    }, function(err) {
        log(err);
    });

}