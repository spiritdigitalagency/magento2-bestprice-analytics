# BestPrice 360 Analytics Integration Magento 2 Module

Integrate BestPrice 360 analytics and badges to your Magento 2 store.

This module provides the integration between [BestPrice 360 Analytics](https://github.com/TheBestCo/bestprice-360/) and
the [Magento 2](https://magento.com/) store.

* Integrates the analytics tracking script to all your frontend pages.
* Integrates the ecommerce data (transactions and revenue) generated during an order.
* Integrates the BestPrice partner badge.
* Integrates the BestPrice product badge as a review tab on the product page.
* Integrates the BestPrice product widget as a widget for the store’s pages.
* Select any of your Magento Product attributes or custom attributes to match your BestPrice XML feed
* Compatible with Magento 2.3.x and Magento 2.4.x

The module is available from the [Github repo]((https://github.com/spiritdigitalagency/magento2-bestprice-analytics)).

## Installation

### Install via composer (recommended)

We recommend you to install Spirit_BestpriceAnalytics module via composer. It is easy to install, update and maintain.

Run the following command in Magento 2 root folder.

#### Install

```
composer require spirit-digital-agency/magento2-bestprice-analytics
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
php bin/magento cache:flush
```

#### Upgrade

```
composer update spirit-digital-agency/magento2-bestprice-analytics
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
php bin/magento cache:flush
```

### Manual

If you don't want to install via composer, you can use this way.

- Download [Spirit_Core](https://github.com/spiritdigitalagency/magento2-spirit-core/archive/master.zip)
- Extract `master.zip` file to `app/code/Spirit/Core`. You should create a folder path `app/code/Spirit/Core` if not exist.
- Download [the latest version here](https://github.com/spiritdigitalagency/magento2-bestprice-analytics/archive/master.zip)
- Extract `master.zip` file to `app/code/Spirit/BestpriceAnalytics`. You should create a folder path `app/code/Spirit/BestpriceAnalytics` if
  not exist.
- Go to Magento root folder and run upgrade command line to install `Spirit_BestpriceAnalytics`:

```
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
php bin/magento cache:flush
```

## Setup

There are several configuration options for this extension which can be found
at `Stores > Configuration > Spirit > Bestprice`.

### BestPrice 360 Analytics

1. Navigate to `Stores > Configuration > Spirit > BestPrice > BestPrice 360 Analytics`
2. Set the `Enabled` to `yes`
3. Set the `BestPrice 360 Key` to the one provided by BestPrice
4. Set the `Unique ID` to the product Unique ID you are using in your XML Feed
5. Save and Flush Magento Cache

## Additional Configuration

BestPrice analytics should be enabled and configured properly for additional features to function properly.

### BestPrice Badge

Enable BestPrice Badge to display the partner badge to all your store's pages.

1. Navigate to `Stores > Configuration > Spirit > BestPrice > BestPrice Badge`
2. Set the `Enabled` to `yes`
3. Select desired display position for the badge
4. Save and Flush Magento Cache

### BestPrice Product Badge

Enable BestPrice Badge to display the product details as a reviews tab in the product page.

1. Navigate to `Stores > Configuration > Spirit > BestPrice > BestPrice Product Badge`
2. Set the `Enabled` to `yes`
3. Save and Flush Magento Cache

### BestPrice Product Widget

Enable BestPrice Widget to display the product details as a reviews tab in the product page.

1. Navigate to `Stores > Configuration > Spirit > BestPrice > BestPrice Product Widget`
2. Set the `Enabled` to `yes`

#### Magento Settings

###### Page / Static Block Embed

1. Navigate to `Content > Pages or Content > Blocks`
2. Find the `Edit Page – Block`
3. Choose `Insert Widget` from editor toolbar
4. Select widget type `BestPrice Product Widget`
5. Insert Widget
6. Save and Flush Magento Cache

###### Conditional Embed

1. Navigate to `Content > Widgets`
2. Add new widget
3. Select type `BestPrice Product Widget`
4. Assign to the desired store views
5. Add Layout Update
6. Display on All Pages
7. Pick the location you want the badge to be
8. Save and Flush Magento Cache

## Author

Name: [Spirit Digital Agency](https://spiritdigital.agency/)

Email: [support@spirit.com.gr](mailto:support@spiritdigital.agency)

Release Date: 11 - 01 - 2023
