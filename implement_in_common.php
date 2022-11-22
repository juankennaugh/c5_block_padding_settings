/**
 * Padding settings using blocks/_config/padding_settings.php
 */

// padding sizes (size type and size '8pt sizing' value)
// set your types and values here
$paddingSizes = [
    'none' => '0',
    'small' => '5',
    'medium' => '10',
    'large' => '15',
];

// top
$paddingTopClasses = '';

if (!empty($padding_top_settings) && is_array($padding_top_settings)) {

    // create string of settings
    $paddingTopClasses = implode(' ', array_keys($padding_top_settings));

    // replace size type names with values (eg: md:u-pt-medium > md:u-pt-10)
    foreach ($paddingSizes as $key => $value) {
        $paddingTopClasses = str_replace($key,$value,$paddingTopClasses);
    }

    $containerClasses[] = $paddingTopClasses;
}

// bottom
$paddingBottomClasses = '';

if (!empty($padding_bottom_settings) && is_array($padding_bottom_settings)) {

    // create string of settings
    $paddingBottomClasses = implode(' ', array_keys($padding_bottom_settings));

    // replace size type names with values (eg: md:u-pt-medium > md:u-pt-10)
    foreach ($paddingSizes as $key => $value) {
        $paddingBottomClasses = str_replace($key,$value,$paddingBottomClasses);
    }

    $containerClasses[] = $paddingBottomClasses;

}
