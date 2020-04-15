# FAQ - Domande Frequenti
Al fine di garantire una stabilità nel progetto, nel tempo che intercorre tra un aggiornamento di un volume all'altro, useremo questo spazio per risolvere i problemi comuni che si verificano durante il percorso.

## (DEBIAN) Quale versione uso?
Causa: L'utente potrebbe aver installato la versione 10 di Debian. Quella supportata dal corso è la 9.

Soluzione: L'utente può lanciare il comando:

```cat /etc/issue```

Se riportata la versione 10, e non ha le competenze per amministrare una macchina GNU/Linux, si consiglia di riformattare con la versione 9. Il link è [64bit](https://cdimage.debian.org/cdimage/archive/9.12.0/amd64/iso-cd/) oppure [32bit](https://cdimage.debian.org/cdimage/archive/9.12.0/i386/iso-cd/).

  
## (DEBIAN) Impossibile trovare il pacchetto libapache2-mod-php7.0
Causa: L'utente ha installato Debian 10 (anziché 9 come richiesto dal manuale). La versione PHP non è più 7.0 ma 7.3

Soluzione 1: L'utente dovrebbe riformattare la macchina victim usando Debian 9, anzichè 10. 

Soluzione 2: L'utente può utilizzare una versione più aggiornata di PHP (la 7.3).

Deve installare tutto il pacchetto PHP:

```sudo apt -y install php php-common```

Installare le estensioni per sicurezza:

```sudo apt -y install php-cli php-fpm php-json php-pdo php-mysql php-zip php-gd php-mbstring php-curl php-xml php-pear php-bcmath```

Installare libapache:

```sudo apt -y install libapache2-mod-php```

Abilitàre a2enmod:

```sudo a2enmod php7.3 ```

E riavviare:

```sudo systemctl restart apache2```

## (DEBIAN) bash: xxx comando non trovato
Causa: L'utente ha installato Debian 10 (anzichè 9 come richiesto dal manuale). Il comando "su" non è completo.

Soluzione: La versione 10 di Debian potrebbe causare problemi con l'uso di su. Si consiglia di usare "su -" al suo posto.
