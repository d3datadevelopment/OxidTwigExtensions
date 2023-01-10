[![deutsche Version](https://logos.oxidmodule.com/de2_xs.svg)](README.md)
[![english version](https://logos.oxidmodule.com/en2_xs.svg)](README.en.md)

# D³ Modulname for OXID eShop

Insert short description here

## Table of content

- [Installation](#installation)
- [How to use](#how-to-use)
- [Changelog](#changelog)
- [Contributing](#contributing)
- [License](#license)
- [Further licences and terms of use](#further-licences-and-terms-of-use)

## Installation

This package requires an OXID eShop installed with Composer in a version defined in the [composer.json](composer.json).

Please enter the following section in the `composer.json` of your project:

```
  "extra": {
    ...
  }
```

Open a command line and navigate to the root directory of the shop (parent directory of source and vendor). Execute the following command. Adapt the path details to your installation environment.

```bash
php composer require d3/modulename:^2.0
``` 

If necessary, please confirm that you allow `package-name` to execute code.

Activate the module in Shopadmin under "Extensions -> Modules".

## How to use

...

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
(status: 2022-07-30)

Distributed under the GPLv3 license.

```
Copyright (c) D3 Data Development (Inh. Thomas Dartsch)

This software is distributed under the GNU GENERAL PUBLIC LICENSE version 3.
```

For full copyright and licensing information, please see the [LICENSE](LICENSE.md) file distributed with this source code.

## Further licences and terms of use

...