# Esercizio: PHP Strong Password Generator
# nome repo: php-strong-password-generator

Oggi creeremo una pagina in grado di generare una password per gli utenti.
L'utente potrà scegliere la lunghezza password e ricevere in un alert una password con il numero di caratteri casuali da lui richiesto!

- <strong>Milestone 1</strong>: creare un form che invii in GET la lunghezza della password.
Una nostra funzione utilizzerà questo dato per generare una password casuale
(composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php
- <strong>Milestone 2</strong>: verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php
che includeremo poi nella pagina principale
- <strong>Milestone 3</strong>: invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
- <strong>Milestone 4 (BONUS)</strong>: gestire ulteriori parametri per la password:
permettere o meno la ripetizione dello stesso carattere
Scegliere il set di caratteri tra numeri, lettere, simboli o qualsiasi combinazione di essi (anche tutti, ma almeno uno)
- <strong>Milestone 5 (BONUS)</strong>: Aggiungere la validazione