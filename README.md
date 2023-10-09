# Buto-Plugin-StringCsv
Convert a csv string to array.

## Usage
```
wfPlugin::includeonce('string/csv');
$csv = new PluginStringCsv();
$content = $csv->stringToArray($content);
```

### Delimiter
Default delimiter is semicolon (;).
To convert csv data with tabs add tab as second parameter.
```
$content = $csv->stringToArray($content, 'tab');
```
