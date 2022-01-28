<?php

function printRoutesTable($array) {
    $table = '
<table>
    <thead>
        <tr>
            <th>Method</th>
            <th>URL</th>
            <th>Callback</th>
            <th>Before</th>
            <th>After</th>
        </tr>
    </thead>
    <tbody>
';
    foreach ($array as $route) {
        $table .= '
        <tr>
            <td>' . $route['method'] . '</td>
            <td>' . $route['url'] . '</td>
            <td>' . $route['callback'] . '</td>
            <td>' . ($route['before'] ? 'true' : 'false') . '</td>
            <td>' . ($route['after'] ? 'true' : 'false') . '</td>
        </tr>
    ';
    }
    $table .= '
    </tbody>
</table>
';
    return $table;
}
