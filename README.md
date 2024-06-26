# Moto Officina - Sito Web con Sistema di Login/Register

Benvenuti al repository del sito web per la moto officina. Questo sito web include un sistema di login/register costruito in PHP, con il frontend realizzato in Tailwind CSS .

## Descrizione del Progetto

Il sito web per la moto officina offre agli utenti la possibilità di registrarsi e accedere per prenotare appuntamenti, richiedere preventivi, o semplicemente navigare tra i servizi offerti dalla officina. Il sistema di login/register è implementato in PHP garantendo sicurezza e protezione dei dati sensibili degli utenti.

## Struttura del Repository

Il repository è organizzato nel seguente modo:

- `public/`: Contiene i file pubblici accessibili dal browser, come HTML, CSS, JavaScript, immagini, ecc.
- `src/`: Contiene il codice sorgente PHP per il backend del sito web.
- `vendor/`: Contiene le dipendenze PHP gestite tramite Composer.
- `composer.json`: File di configurazione di Composer.
- `composer.lock`: File generato da Composer che assicura la coerenza delle versioni delle dipendenze.
- `.env.example`: File di esempio per le variabili d'ambiente utilizzate da Dotenv.
- `README.md`: Questo file, che fornisce informazioni di base sul progetto.

## Installazione

Per eseguire il sito web in ambiente locale, seguire i passaggi seguenti:

1. Clonare il repository sul proprio computer:

    ```
    git clone https://github.com/tuonome/moto-officina.git
    ```

2. Accedere alla cartella del progetto:

    ```
    cd moto-officina
    ```

3. Installare le dipendenze PHP utilizzando Composer:

    ```
    composer install
    ```

4. Copiare il file `.env.example` e rinominarlo in `.env`:

    ```
    cp .env.example .env
    ```

5. Configurare le variabili d'ambiente nel file `.env` secondo le proprie esigenze.

6. Avviare un server locale PHP, ad esempio:

    ```
    php -S localhost:5500 -t public/
    ```

## Utilizzo di Tailwind CSS

Per utilizzare Tailwind CSS nel progetto, è necessario includerlo nel file HTML o utilizzare un build tool come Webpack per gestire i file CSS. Seguire le istruzioni di installazione di Tailwind CSS disponibili sulla [documentazione ufficiale](https://tailwindcss.com/docs/installation).

## Utilizzo di Dotenv

Dotenv è già incluso nel progetto come dipendenza di Composer. Assicurati di aver eseguito il comando `composer install` per installare tutte le dipendenze, inclusa Dotenv. Una volta installato, puoi configurare le variabili d'ambiente nel file `.env` e accedervi nel codice PHP utilizzando `getenv()`.

## Contributi

Se desideri contribuire a questo progetto, segui i passaggi standard per forkare il repository, apportare le modifiche e inviare una pull request.

## Licenza

Questo progetto è concesso in licenza secondo i termini della Licenza. Consultare il file `LICENSE` per ulteriori informazioni.

## Contatti

Per domande o commenti, contattare [Inserire il tuo nome o nome dell'organizzazione](inserire indirizzo email o link al profilo GitHub).
