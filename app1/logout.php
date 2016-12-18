<?php
// necessita da sessão
session_start();

// remove o cookie
if(isset($_COOKIE[session_name()])){
	setcookie(session_name(), '', time() - 3600, '/');
}


// limpa os dados no array $_SESSION
$_SESSION = array();

// elimina a sessão
session_destroy();

define('TITLE', 'Logout!');
include('templates/header.html'); 
?>

<h3>Fez logout do sistema.</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, nemo, alias temporibus natus veniam labore necessitatibus dicta 
voluptates iste hic consectetur in illum. Cupiditate, quo reiciendis beatae neque maxime reprehenderit similique exercitationem 
mollitia in excepturi laudantium et voluptatum assumenda tempore est commodi nostrum eaque veniam dolore consequuntur inventore 
porro dolor animi eos sint at vel eius magnam voluptate fugit vitae minus doloribus suscipit eligendi consequatur aperiam sed.
 Nisi, assumenda, id, suscipit doloribus cum sed facere nesciunt pariatur recusandae illo deleniti voluptates a veritatis autem 
 corrupti tempore doloremque dolores debitis porro iure possimus dolorem harum perferendis ea odit fugiat et sit in modi magni 
 cumque quaerat laborum voluptatibus. Rem, facere, ducimus, mollitia, impedit tempora aliquam quae ex minus expedita sequi optio 
 nulla perspiciatis assumenda. Dicta, repudiandae, exercitationem, laudantium nulla veniam accusantium libero modi ullam quis 
 aperiam ex quam autem qui dolorum veritatis pariatur ipsum harum ipsam eum mollitia perferendis magnam numquam soluta nisi 
 corrupti natus commodi placeat. Iusto, quibusdam, quas incidunt blanditiis est minima laborum soluta vel debitis ipsum dolores 
 neque voluptatum rem distinctio facilis voluptatem eum optio aut eaque atque libero quaerat dolorum sint odit accusamus 
 ex voluptates assumenda aliquam quasi ea veniam tempora porro quis voluptas eius consequatur reiciendis.
</p>
<br /><br /><br />

<?php
include('templates/footer.html');
?>
