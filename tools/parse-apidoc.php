#!/usr/bin/env php
<?php

$url = $argv[1] or die('URL is not specified' . PHP_EOL);
$resultClass = $argv[2] ?? null;
$typeIsParameter = !!$argv[2] ?? false;

var_dump($typeIsParameter);
[$url, $anchor] = explode('#', $url);

$html = file_get_contents($url);

$beginPos = strpos($html, '<a class="anchor" name="' . $anchor . '"');
$beginPos = strpos($html, '</a>', $beginPos) + 4;
$endPos = strpos($html, '</h4>', $beginPos);

$name = getSubstring($html, $beginPos, $endPos);
$isMethod = $name[0] >= 'a' && $name[0] <= 'z';
$name = ucfirst($name);

$beginPos = strpos($html, '<p>', $endPos);
$endPos = strpos($html, '<table', $beginPos);
$endPos1 = strpos($html, '<h4>', $beginPos);
$endPos = $endPos < $endPos1 ? $endPos : $endPos1;

$description = html_entity_decode(trim(strip_tags(getSubstring($html, $beginPos, $endPos))), ENT_QUOTES, 'UTF-8');
$description = fixSentencesSpaces($description);

$fields = [];
$beginPos = strpos($html, '<tbody>', $endPos) + 7;
$beginPos1 = strpos($html, '<h4>', $endPos) + 4;
if ($beginPos < $beginPos1) {
    $endPos = strpos($html, '</tbody>', $beginPos);
    $tableContent = getSubstring($html, $beginPos, $endPos);

    $contentOfRows = explode('</tr>', $tableContent);
    foreach ($contentOfRows as $contentOfLine) {
        if (!trim($contentOfLine)) {
            continue;
        }
        $contentOfColumns = explode('</td>', $contentOfLine);
        $contentOfColumns = array_map('strip_tags', $contentOfColumns);
        $contentOfColumns = array_map('trim', $contentOfColumns);
        $contentOfColumns = array_filter($contentOfColumns);
        $contentOfColumns = array_map(
            function ($column) {
                return html_entity_decode($column, ENT_QUOTES, 'UTF-8');
            },
            $contentOfColumns
        );

        $fields[getFieldName(array_shift($contentOfColumns))] = [
            'type'        => getTypeString(array_shift($contentOfColumns)),
            'description' => getDescription($contentOfColumns)
        ];
    }
}

ob_start();
include $isMethod ? (__DIR__ . '/method.tphp') : (__DIR__ . '/type.tphp');
$content = '<?php' . ob_get_clean();

$savePath = $isMethod ? (__DIR__ . "/../src/methods/${name}.php") : (__DIR__ . "/../src/types/${name}.php");
file_put_contents($savePath, $content);

echo 'ok' . PHP_EOL;

function getSubstring(string $string, int $begin, int $end): string
{
    return substr($string, $begin, $end - $begin);
}

function getFieldName(string $string): string
{
    return implode('', array_map('ucfirst', explode('_', $string)));
}

function getTypeString(string $string): string
{
    $replaceData = [
        'Integer'      => 'int',
        'Boolean'      => 'bool',
        'True'         => 'bool',
        'String'       => 'string',
        'Float number' => 'float',
        'Float'        => 'float',
    ];
    $arrays = 0;
    while (strpos($string, 'Array of ') === 0) {
        $arrays++;
        $string = substr($string, 9);
    }

    $fieldTypes = explode(' or ', $string);
    foreach ($fieldTypes as &$fieldType) {
        if (isset($replaceData[$fieldType])) {
            $fieldType = $replaceData[$fieldType];
        }
        $fieldType .= str_repeat('[]', $arrays);
    }

    return implode('|', $fieldTypes);
}

function getDescription(array $descParts)
{
    if ($descParts[0] === 'Yes') {
        $descParts[0] = 'Required';
    }

    $result = fixSentencesSpaces(implode('. ', $descParts));

    return $result;
}

function fixSentencesSpaces(string $string): string
{
    return preg_replace('/\.([A-Z].)/', '. $1', $string);
}
