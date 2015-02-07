# craft.assettransforminfo

A simple CraftCMS plugin which returns settings of an Asset Transform rule.

## Installation

1. Copy the `assettransforminfo` folder into your `craft/plugins` folder.
2. Go to CP > Settings > Plugins and install **Asset Transform Info**

## Usage

	{% set transform = craft.assettransforminfo.getByHandle('bannerDesktopImage') %}
	{% set tWidth = transform.width %}
	{% set tHeight = transform.height %}
	{% set tMode = transform.mode %}
	{% set tQuality = transform.quality %}
	{% set tFormat = transform.format %} {# empty means 'Auto' #}

## Changelog

2015-02-07 Initial release