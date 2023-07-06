# Form Contatti
Ho creato una tabella per l'input del form contatti riguardante il file:
INDEX.PHP (è un form contatti) collegato con il database con DATABASE.PHP, all'invio verrà inviata una mail e tutti i dati verranno salvati nel database, in alto a destra il login per gli utenti registrati e dove saranno reindirizzati alla pagina login (file LOGIN.PHP) e
accedere all'area riservata dopo l'autenticazione (LOGIN2.PHP, per sanitizzare e verificare se l'input login è presente nel database, se i dati sono mancanti o errati avremo un avviso e saremo obbligati a riprovare illimitatamente, arriveremo cosi all'interfaccia dell'area riservata HOME.PHP); DB_CONN.PHP è la connessione al database degli utenti registrati.
LOGOUT.PHP una funzionalita all'interno della home per riportarci nella pagina login.
Le funzionalità crud nella home sono rappresentate da bottoni:CANCELLA.PHP permette appunto di cancellare i dati direttamente nella pagina,AGGIORNA.PHP permette di aggiornare le credenziali dell'utente e aggiungere anche un nuovo utente con NUOVO.PHP.

nella cartella Database serve per replicare il database.

Dati di login per utenti area riservata
Username: spacex Password:1234




