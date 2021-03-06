<!--  
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS: Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).
Tips:
Qualora aveste bisogno di passare ad un metodo un tipo di dato particolare, come ad esempio un oggetto che avete creato voi, potete usarlo come facciamo di solito al posto di Type $variable.
Infondo anche le nostre classi sono dei tipi di dato.
Ad esempio
public function functionName( MyClass $variable, String $variable2, Int $variable3 ) {
# Implementazione
} 
 -->
<?php

require __DIR__ . '/Models/Product.php';
require __DIR__ . '/Models/User.php';
require __DIR__ . '/Models/CreditCard.php';

$products = [];
$products[] = new Product('Cuccetta', 10, 'http://...', 20);
$products[] = new Product('Cuccetta', 10, 'http://...', 20);
$products[] = new Product('Cuccetta', 10, 'http://...', 20);
$products[] = new Product('Cuccetta', 10, 'http://...', 20);

$user = new User('Riccardo', 'Salladini', 'ricky@gmail.com', 'password', false, 0);
$user->signUp();
$card = new CreditCard(6465466, new DateTime('2024-05-12'), $user);
var_dump($card);
var_dump($card->checkDate());






