# dtlhelpers
Drupal table and list theme helpers for all those tedious defaults

- pass callbacks for row data and attributes processing?
- hide ugly details
- allow easy table data contruction with just a few params
- defaults for everything
- easily add colspans and td classess/sytles
- goal: theme_table(init_table()) works
- goal: use with webform theming, sln reports, other?
- issue: deal with lack of overloading


```php
function init_table($header = array(), $rows = array(), $attribues = array(), $caption = '', $colgroups = array(), $sticky = FALSE, $empty = 'No data') {}
function init_header($string, ...) {}
function init_header($data = '', $field = NULL, $sort = NULL) {}
function init_row($string, ...) {}
function init_row($data = array(), $attributes = array(), $no_striping = FALSE) {}
function init_rows($cell = array(), ...) {}
function init_cell($string = '') {}
function init_cell($data = '', $attributes = array()) {}
function init_colgroups($colgroups = array(),...) {}
function init_colgroup($attributes = array()) {}
function init_colgroup($data = array(), $attributes = array()) {}

```
