------------------------

PHP Filter....

---------------------------------------------------------------

Validating data = Determine if the data is in proper form.

Sanitizing data = Remove any illegal character from the data.

---------------------------------------------------------------

---------------------------------------------------------------
Constant	         	Description
---------------------------------------------------------------
FILTER_VALIDATE_BOOLEAN		Validates a boolean
FILTER_VALIDATE_EMAIL		Validates an e-mail address
FILTER_VALIDATE_FLOAT		Validates a float
FILTER_VALIDATE_INT		Validates an integer
FILTER_VALIDATE_IP		Validates an IP address
FILTER_VALIDATE_REGEXP		Validates a regular expression
FILTER_VALIDATE_URL	 	Validates a URL
FILTER_SANITIZE_EMAIL		Removes all illegal characters from an e-mail address
FILTER_SANITIZE_ENCODED		Removes/Encodes special characters
FILTER_SANITIZE_MAGIC_QUOTES	Apply addslashes()
FILTER_SANITIZE_NUMBER_FLOAT	Remove all characters, except digits, +- and optionally .,eE
FILTER_SANITIZE_NUMBER_INT	Removes all characters except digits and + -
FILTER_SANITIZE_SPECIAL_CHARS	Removes special characters
FILTER_SANITIZE_STRING	              Removes tags/special characters from a string
FILTER_SANITIZE_STRIPPED	              Alias of FILTER_SANITIZE_STRING
FILTER_SANITIZE_URL	              Removes all illegal character from s URL
FILTER_UNSAFE_RAW	              Do nothing, optionally strip/encode special characters
FILTER_CALLBACK		              Call a user-defined function to filter data


$var = 1.p3;
------------------------
FILTER_VALIDATE_EMAIL
------------------------
<?php
$email = "john.doe@example.com";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo("$email is a valid email address");
} else {
  echo("$email is not a valid email address");
}
?>

------------------------
FILTER_SANITIZE_EMAIL
------------------------

<?php
$email = "john(.doe)@exa//mple.com";

$email = filter_var($email, FILTER_SANITIZE_EMAIL);
echo $email;
?>
