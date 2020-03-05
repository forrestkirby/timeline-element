# Timeline Element

A custom element for the YOOtheme Pro Page Builder based on the grid element.

Copyright (C) 2007–2020 YOOtheme GmbH yootheme.com, 2020 forrestkirby github.com/forrestkirby

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <https://www.gnu.org/licenses/>.

## Installation

- download and unzip the element package
- create a [Child Theme](https://yootheme.com/support/yootheme-pro/joomla/child-themes) in your YOOtheme Pro installation and activate the child theme
- copy the complete folders `hd-timeline` and `hd-timeline_item` into the directory `/templates/yootheme_child/builder/` (Joomla!) or `/wp-content/themes/yootheme-child/builder/` (WordPress) of your installation while *child* must be the name of your child theme
- access the YOOtheme Pro Page Builder, the custom elements should now be available

## Issues

Please report issues using the [Github issue tool](../../issues).

## Changes in Version 2.0.0-beta.10

To avoid a naming conflict, the former property `icon` got renamed to `timeline_icon`. When updating, *first* replace the timeline item files and *second* update YOOtheme Pro. This way, your existing timeline elements should be updated properly without having to re-assign the icons.

## To-do

- set icon ratio (per item)
- set text align per item
- set item alignment per item
- use breakpoints of style customizer (might require usage of LESS)
- allow masonry effect / overlap of items for alternate item alignment to reduce empty areas
- optimize CSS

## About

Timeline Element is a custom element for YOOtheme Pro developed by [YOOtheme](https://yootheme.com).

## Links

- [YOOtheme Pro Documentation: Introduction](https://yootheme.com/support/yootheme-pro/joomla/introduction)
- [YOOtheme Pro Documentation: Child Themes](https://yootheme.com/support/yootheme-pro/joomla/child-themes)
- [YOOtheme Pro Documentation: Custom Elements](https://yootheme.com/support/yootheme-pro/joomla/custom-elements)
- [YOOtheme Support](https://yootheme.com/support)
- [Toggle Element](https://github.com/forrestkirby/toggle-element)
- [Progress Element](https://github.com/forrestkirby/progress-element)
- [Counter Element](https://github.com/forrestkirby/counter-element)
- [Flipcard Element](https://github.com/forrestkirby/flipcard-element)

## Screenshots

![Image](https://pionte.ch/yootheme/max/images/tutorial-timeline-2.jpg)

![Image](https://pionte.ch/yootheme/max/images/tutorial-timeline-3.jpg)

![Image](https://pionte.ch/yootheme/max/images/tutorial-timeline-4.jpg)
