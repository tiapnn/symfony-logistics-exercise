#### Symfony logistics exercise

email: tiapnn@yahoo.it
nome: Mattia Penna

Requirements:

- Creare un endpoint per l’interrogazione dello stato di una spedizione di un corriere.
- Il codice non deve necessariamente girare/funzionare.
- Privilegiare la scrittura di proprie classi a discapito di un uso massivo di un framework.

Tempo a disposizione: 

- 2h 30'

Soluzione:

Nell'ottica di dover creare questo servio per davvero e con una buona scalabilità e manutenzione nel tempo, 
metterei su un Symfony (latest version) con Api Platform e Easyadmin per gestire le varie entità dinamicamente e senza toccare il codice.

Le entita principali sono:
- ShipmentStatus
Entità per descrivere la richiesta di informazioni sullo stato della spedizione.

- Courier (one to many con ShipmentStatus)
Entità per descrivere i vari corrieri con i quali si lavora.

Dato che il tempo a disposizione è poco e il punto focale non è l'utilizzo del framework, ho scelto di fare un mockup fingendo che sia il framework scelto.

[Endpoint](api/v1/shipment-status/index.php) 👈🏼 Clicca qui per iniziare a vedere il codice.
