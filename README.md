<img src="public/pictures/bieb.PNG" alt="screenshot">

<h2>BIEB<h2>

<p>This is a library web app for two types of users:</p>

<p>Library administrator</p>
<p>Library subscriber</p>

<p>Among other things, basically:</p>
<p>The administrator can add books and subscribers and <i>should be able to do several kinds of data queries (to do)</i>. For the 'books' there is a CRUD system in place, for 'users' only the create option for now.</p>
<p>The subscribers can view books, make reservations, do queries and leave reviews</p>
<br>

<h4>Models:<h4>
<br>
<b>Book</b>
<table>
<tr><td>id</td><td>id van het boek</td></tr>
<tr><td>titel</td><td>titel van het boek</td></tr>
<tr><td>auteur</td><td>schrijver van het boek</td></tr>
<tr><td>taal</td><td>taal waarin het boek is geschreven</td></tr>
<tr><td>genre</td><td>genre van het boek</td><tr>
<tr><td>aantal_paginas</td><td>aantal paginas van het boek</td></tr>
<tr><td>isbn</td><td>isbn nr. van het boek</td></tr>
<tr><td>aantal_aanwezig</td><td>aantal boeken op voorraad in de bieb</td></tr>
</table>
<br>
<b>User</b>
<table>
<tr><td>id</td><td>id van de abonnee</td></tr>
<tr><td>first_name</td><td>voornaam gebruiker</td></tr>
<tr><td>last_name</td><td>achternaam gebruiker</td></tr>
<tr><td>email</td><td>emailadres gebruiker</td></tr>
<tr><td>password</td><td>wachtwoord gebruiker</td></tr>
<tr><td>subscription_valid_until</td><td>wanneer het lidmaatschap afloopt</td></tr>
</table>
<br>
<b>Review</b>
<table>
<tr><td>id</td><td>id van de abonnee</td></tr>
<tr><td>book_id</td><td>id van het boek</td></tr>
<tr><td>user_id</td><td>id van de gebruiker</td></tr>
<tr><td>screen_name</td><td>naam die getoond wordt bij de review</td></tr>
<tr><td>stars</td><td>score (sterren) van 0 tot 5</td></tr>
<tr><td>comments</td><td>vrije tekst voor de review</td></tr>
</table>
<b>Books_users</b>
<table>
<tr><td>id</td><td>id van het geleende boek in het Books_users model</td></tr>
<tr><td>book_id</td><td>id van het boek in het Book model</td></tr>
<tr><td>user_id</td><td>id van de user die het boek geleend heeft</td></tr>
<tr><td>lent_from</td><td>Datum vanaf wanneer het boek geleend is</td></tr>
</table>