<?php
require ("cab.php");
require ('componentes/cabecalho.php');
$debug = true;
ini_set('display_errors', 1);
ini_set('error_reporting', 7);


echo '<BR><BR><BR><BR><BR><BR>';
echo '<BR><BR><BR><BR><BR><BR>';
ECHO 'eNVIANDO';

require($include.'_class_mail.php');
enviaremail('renefgj@gmail.com','','Teste','teste');

require ('componentes/footer.php');
?>

<script src="js/classie.js"></script>
<script src="js/search-checkout.js"></script>

</body>
</html>