# FacebookFeed Plugin

`FacebookFeed Plugin` is a Grav Plugin which displays customizable Facebook feed on your website.

## Installation

To install this plugin, just download the zip version of this repository and unzip it under `/your/site/grav/user/plugins`. Then, rename the folder to `facebookfeed`. You can find these files either on [GitHub](https://github.com/hexplor/grav-plugin-facebookfeed).

You should now have all the plugin files under

    /your/site/grav/user/plugins/facebookfeed

You also need to add the included Twig partials template into your own theme somewhere you want the facebook feed to be displayed.

{% include 'partials/langswitcher.html.twig' %}

>> NOTE: This plugin is a modular component for Grav which requires [Grav](http://github.com/getgrav/grav), the [Error](https://github.com/getgrav/grav-plugin-error) and [Problems](https://github.com/getgrav/grav-plugin-problems) plugins, and a theme to be installed in order to operate.

# Settings Defaults

```
# Facebook App ID
app_id: 903374123006560

# Facebook App Secret
app_secret: 7b04eacca36bd1c5513876310df45ad0

# Facebook Page ID
page_id: 328115812141

# Posts limit:
limit: 10
```
