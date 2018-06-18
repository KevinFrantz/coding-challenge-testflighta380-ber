# Coding Challenge testflight-A380-BER
Dieses Repository enthält das Ergebnis für die unter Aufgabe beschriebene Coding Challenge
## Aufgabe
### BER

Am Berliner Willy Brandt Flughafen findet anlässlich der „baldigen“ Eröffnung ein Testflug mit 50 Fluggästen statt.

Der Airbus A380 befindet sich bereits auf seiner Rückkehr des Testflugs.
Vom Tower erhält der Pilot des A380 die notwendige Freigabe zum Landen und ihm wird die Landebahn 2 zugewiesen.
Nach erfolgreicher Landung und begeisternd klatschenden Fluggästen wird der A380 vom Flugzeugschlepper zum Gate 1 gezogen und angeschlossen.
Über das Gate können die Fluggäste nun den A380 verlassen und werden im Terminal vom Berliner Bürgermeister und der Presse empfangen.

Bilde den Lande-Prozess inkl. Verlassen des Flugzeugs durch die Fluggäste mit Hilfe von OOP ab.
Entwickle für mindestens einen relevanten Bereich die notwendigen Tests.

### Designanforderungen
- SOLID
- Clean Code
- Wiederspiegeln der Domäne im Code
- automatisierte Unit und Functional Tests
- Service Layers

## Designhinweise

### Programmiersprache
Als Programmiersprache wurde PHP verwendet.

### Architektur
#### Layers
Alle Objekte welche in der obigen Aufgabenstellung beschrieben sind, sind im Ordner ./src/modele abgelegt.

##### Data
Das Datalayer represäntiert die Werte der Modelle

##### Method
Das Methodlayer fügt den Modellen Funktionen hinzu.

##### Gui
Das Gui Layer implementiert eine grafische Ausgabe beim Methodenaufruf

#### Controller
Die Controller stellen dem Method Layer Methoden zur Verfügung

#### Repository
Repositories werden vom Gui Layer verwendet um grafische Ausgaben zu tätigen.

#### Interfaces
Die Interfaces beschreiben die öffentlichen Funktionen aller Klassen. Beim Typehinting wurde versucht ausschließlich Interfaces zu verwenden um Polymorphie zu gewährleisten.

### Scenario
Unter scenario ist das obige Szenario abgelegt.

#### Tests
Diverse Unit Tests finden sich unter ./src/tests


#### Unsaubere Implementierungen
Die privaten Funktionen
- moveOverGateToTerminal()
- publicWelcome()

in dem Szenario TestflightA380Ber sind nicht ordentlich implementiert.

Zudem sind wenige Controller implementiert. Es wären mehr Controller nötig gewesen um eine ordentliche Implementierungen zu gewährleisten. Dies macht sich insbesondere bei den beiden obigen Funktionen bemerkbar.

Aus Zeitgründen waren weitere Implementierungen allerdings nicht möglich.


### Start
#### Native PHP
Bei installiertem PHP auf dem host System muss lediglich

php ./src/cli.php

ausgeführt werden. Damit werden zunächst die Tests und anschließend das Programm ausgeführt.

Zuvor muss composer noch geupdatet werden. 

#### Docker

Der Dockercontainer wird mit

bash ./start.sh

gestartet.
