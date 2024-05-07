[![deutsche Version](https://logos.oxidmodule.com/de2_xs.svg)](README.md)
[![english version](https://logos.oxidmodule.com/en2_xs.svg)](README.en.md)

# D³ Twig Extensions für OXID eShop

zusätzliche Erweiterungen, die in den Twig-Templates des Shops verwendet werden können:

- method_exists - Prüft, ob die Methode eines Objekts existiert.
  ```
  {% if method_exists(entity, 'getCreatedBy') %}
      ({{ entity.createdBy.name }})
  {% endif %}
  ```
- getModuleSettingsService - liefert den Moduleinstellungsservice
  ```
  {{ getModuleSettingsService().getString('myModuleSetting', 'myModuleId') }}
  ```
- getShopConfiguration - liefert die Shopkonfiguration
  ```
  {{ getShopConfiguration().getShopId() }}
  ```

## Inhaltsverzeichnis

- [Installation](#installation)
- [Changelog](#changelog)
- [Beitragen](#beitragen)
- [Lizenz](#lizenz)
- [weitere Lizenzen und Nutzungsbedingungen](#weitere-lizenzen-und-nutzungsbedingungen)

## Installation

Dieses Paket erfordert einen mit Composer installierten OXID eShop in einer in der [composer.json](composer.json) definierten Version.

Öffnen Sie eine Kommandozeile und navigieren Sie zum Stammverzeichnis des Shops (Elternverzeichnis von source und vendor). Führen Sie den folgenden Befehl aus. Passen Sie die Pfadangaben an Ihre Installationsumgebung an.

```bash
php composer require d3/oxid-twig-extensions:^1.0
```

Sofern nötig, bestätigen Sie bitte, dass Sie `package-name` erlauben, Code auszuführen.

Leeren Sie den TMP-Ordner Ihres Shops.

## Changelog

Siehe [CHANGELOG](CHANGELOG.md) für weitere Informationen.

## Beitragen

Wenn Sie eine Verbesserungsvorschlag haben, legen Sie einen Fork des Repositories an und erstellen Sie einen Pull Request. Alternativ können Sie einfach ein Issue erstellen. Fügen Sie das Projekt zu Ihren Favoriten hinzu. Vielen Dank.

- Erstellen Sie einen Fork des Projekts
- Erstellen Sie einen Feature Branch (git checkout -b feature/AmazingFeature)
- Fügen Sie Ihre Änderungen hinzu (git commit -m 'Add some AmazingFeature')
- Übertragen Sie den Branch (git push origin feature/AmazingFeature)
- Öffnen Sie einen Pull Request

## Lizenz
(Stand: 10.01.2023)

Vertrieben unter der GPLv3 Lizenz.

```
Copyright (c) D3 Data Development (Inh. Thomas Dartsch)

Diese Software wird unter der GNU GENERAL PUBLIC LICENSE Version 3 vertrieben.
```

Die vollständigen Copyright- und Lizenzinformationen entnehmen Sie bitte der [LICENSE](LICENSE.md)-Datei, die mit diesem Quellcode verteilt wurde.
