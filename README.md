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
Als Programmiersprache wurde PHP verwendet. Um die PHP Skills zu zeigen.
In Python wäre das ganze einfacher und schneller gegangen z.B. da Python keine Interfaces kennt und ich nur abstrakte Klassen verwendet hätte.

### Modelle
Alle Objekte welche in der obigen Aufgabenstellung beschrieben sind, sind im Ordner ./tests abgelegt.

Jede konkrete Klasse erbt von einer abstrakten Klasse, welche sich im entsprechenden Überordner befindet.

### Architektur
Unter ./src/Model findet sich ein Datalayer.
Auf die Implementierung eines seperaten Functional-Layers wurde aus Zeitgründen verzichtet. 

### Tests
Für folgende Modelle wurden keine Tests geschrieben:
- Collections

## Methodische Erläuterung
Der Code wurde hauptsächlich nach TDD entwickelt

## Reflektion
### Offene Fragen
- Ist die hierachiche Organisation der Modelle in dieser Form sinnvoll?
- Ich habe immer noch keine genaue Vorstellung davon was DDD ist. Wo spiegelt sich dies hier im Softwaredesign wieder und wo nicht.
- Ich denke, dass manchmal die Bezeichnung der Namespaces\\Ordner nicht den Best Practices entspricht. Für Anregungen bin ich offen ;)
- Wie detailliert müssen die UnitTests sein?
- Ist es ok, dass UnitTests von anderen UnitTests erben?
### Selbstkritik
- PHPDocs wurden nicht verwendet, auch wenn diese für die automatische Generation von Dokumentationen sehr hilfreich sind.
- Im Regelfall arbeite ich mit PHPStorm und kann mir sicher sein, dass den aktuellen PSR-Standarts gefolgt wird. In diesem Fall verwendete ich Eclipse und hab das ganze nicht noch einmal manuell auf PSR Standarts gegengecheckt.
- Auf der Model-Ebene erben Gui und Functions von data bzw. method. Dies ist keine gute Kapselung. Diese Vererbung wurde lediglich aus Zeitgründen gewählt.  
