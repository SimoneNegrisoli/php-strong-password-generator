# PHP Strong Password Generator

## Descrizione

Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

## Milestone 1

Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php

## Milestone 2

Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale

## Milestone 3 (BONUS)

Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $\_SESSION recupererà la password da mostrare all’utente.

## Milestone 4 (BONUS)

Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).

Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.

---

Controlli password:

- che non sia vuota
- che sia lunga minimo 6 massimo 18 caratteri

Funzione:

- che permette la ripetizione o meno dei caratteri

Logica:
devo avere un array in cui di volta in volta filtro i contenuti in base alle lettere, ai numeri e ai simboli e se non flaggo niente non ho filtri

se sceglo di flaggare solo i numeri allora la ripetizione dei caratteri è obbligatoria se la password è lunga più di 6 caratteri
