[![deutsche Version](https://logos.oxidmodule.com/de2_xs.svg)](README.md)
[![english version](https://logos.oxidmodule.com/en2_xs.svg)](README.en.md)

# D³ Twig extensions for OXID eShop

additional extensions that can be used in the shop's Twig templates:

- method_exists - Checks whether the method of an object exists.
  ```
  {% if method_exists(entity, 'getCreatedBy') %}
      ({{ entity.createdBy.name }})
  {% endif %}
  ```
- getModuleSettingsService - get the module settings service
  ```
  {{ getModuleSettingsService().getString('myModuleSetting', 'myModuleId') }}
  ```
- getShopConfiguration - get the shop configuration
  ```
  {{ getShopConfiguration().getShopId() }}
  ```

## Table of content

- [Installation](#installation)
- [Changelog](#changelog)
- [Contributing](#contributing)
- [License](#license)
- [Further licences and terms of use](#further-licences-and-terms-of-use)

## Installation

This package requires an OXID eShop installed with Composer in a version defined in the [composer.json](composer.json).

Open a command line and navigate to the root directory of the shop (parent directory of source and vendor). Execute the following command. Adapt the path details to your installation environment.

```bash
php composer require d3/oxid-twig-extensions:^1.0
``` 

If necessary, please confirm that you allow `package-name` to execute code.

Clear the TMP folder of your shop.

## Changelog

See [CHANGELOG](CHANGELOG.md) for further informations.

## Contributing

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue. Don't forget to give the project a star! Thanks again!

- Fork the Project
- Create your Feature Branch (git checkout -b feature/AmazingFeature)
- Commit your Changes (git commit -m 'Add some AmazingFeature')
- Push to the Branch (git push origin feature/AmazingFeature)
- Open a Pull Request

## License
(status: 2023-01-10)

Distributed under the GPLv3 license.

```
Copyright (c) D3 Data Development (Inh. Thomas Dartsch)

This software is distributed under the GNU GENERAL PUBLIC LICENSE version 3.
```

For full copyright and licensing information, please see the [LICENSE](LICENSE.md) file distributed with this source code.