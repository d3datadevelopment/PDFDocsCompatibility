# PDF-Dokumente - Kompatibilitätsschicht

Kompatibilitätslayer für PDF Dokumente Modul zum OXID InvoicePDF Modul

Diese Anpassung ermöglicht dritten Modulen, die sonst das OXID InvoicePdf-Modul für eigene Zwecke verwenden, anstelle das D3 PDF Dokumente Modul zu verwenden.

Der Generierungsaufruf der Standarddokumente (Rechnung, Lieferschein) wird über das PDF Dokument Modul geroutet.

Wurden weitere Dokumente hinzugefügt, muss das Routing dorthin ergänzt werden.

Das Adminformular zur Dokumentengenerierung wird hierin nicht nachgebaut, da dieses in ähnlicher Form schon im PDF Dokumente Modul enthalten ist. Anpassungen (z.B. Templateblocküberladungen) sollten darauf angepasst werden.

## Systemanforderungen:

- installierter OXID eShop ab Version 6.1
- D3 PDF Dokumente Modul (wird ggf. nachinstalliert)
- PHP-Version, für die Installationspakete verfügbar sind (PHP 7)
- Installation via Composer

## Kompatibilität:

Das Modul enthält die selbe Funktionalität wie das `OXID Invoice-PDF`-Modul. Da es dessen Funktion ersetzen soll, wird das OXID-Modul deinstalliert.

## Installation 

Deaktivieren Sie das OXID InvoicePDF Modul im Adminbereich Ihres Shops.

```bash
composer require d3/pdfdocuments_compat --update-no-dev
```

Löschen Sie die Dateien des OXID InvoicePDF Moduls.

## Support:

- D3 Data Development (Inh. Thomas Dartsch)
- Home: [www.d3data.de](https://www.d3data.de)
- E-Mail: support@shopmodule.com

## Lizenz / License

**de:** Dieses Modul wird unter der GPL v3 Lizenz vertrieben. Für weitere Informationen siehe die ./LICENSE Datei.
 
**en:** This module is distributed under the GPL v3 License. For more information see the ./LICENSE file.

Copyright by D3 Data Development (Inh. Thomas Dartsch)