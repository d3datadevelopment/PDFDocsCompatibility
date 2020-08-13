> [german version](README.md)

# PDF Documents - compatibility layer

Compatibility Layer for PDF Documents Module to OXID InvoicePDF Module

This customization allows third party modules that would otherwise use the OXID InvoicePdf module for their own purposes, to use the D3 PDF Documents module instead.

The generation call of the standard documents (invoice, delivery note) is routed via the PDF Documents module.

If further documents have been added, the routing must be added there.

The admin form for document generation is not copied here, because it is already included in the PDF Documents module in a similar form. Adjustments (e.g. template block overloads) should be adapted to this.

## System requirements:

- installed OXID eShop from version 6.1
- D3 PDF Documents Module
- PHP version for which installation packages are available (PHP 7)
- Installation via Composer

## Compatibility:

The module contains the same functionality as the `OXID Invoice PDF` module. Since it is intended to replace its function, the OXID module is uninstalled.

## Installation 

Disable the OXID InvoicePDF module in the admin area of your shop.

```bash
composer require d3/pdfdocuments_compat:^1.0 --update-no-dev
```

Delete the files of the OXID InvoicePDF module.

## Support:

- D3 Data Development (Inh. Thomas Dartsch)
- Home: [www.d3data.de](https://www.d3data.de)
- E-Mail: support@shopmodule.com

## License

This module is distributed under the GPL v3 License. For more information see the ./LICENSE file.

Copyright by D3 Data Development (Inh. Thomas Dartsch)