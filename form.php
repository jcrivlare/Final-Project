<!-- HTML top code goes here -->

<?

// From processing takes place here. message displayed here too
require('form/form.class.php');
$form = new Form();
$form->processForm(

	'jacquelinecrivlare.com' // Put you mail domain here
	,
	'Jacqueline Crivlare' // Put your site name / form name here
	,
	'jcrivlare@gmail.com' // Where will the form notification be sent?
	,
	'noreply@jacquelinecrivlare.com' // This what the form FROM: address wil be, if the form submissions doesn't contain an email field

);


?>

<!-- HTML bottom code goes here -->
