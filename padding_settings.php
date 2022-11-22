<?php

$paddingTopOptions = [
    'u-pt-none' => t("none"),
    'u-pt-small' => t("small"),
    'u-pt-medium' => t("medium"),
    'u-pt-large' => t("large"),
    // @md
    'md:u-pt-none' => t("@md:none"),
    'md:u-pt-small' => t("@md:small"),
    'md:u-pt-medium' => t("@md:medium"),
    'md:u-pt-large' => t("@md:large"),
    // @lg
    'lg:u-pt-none' => t("@lg:none"),
    'lg:u-pt-small' => t("@lg:small"),
    'lg:u-pt-medium' => t("@lg:medium"),
    'lg:u-pt-large' => t("@lg:large"),
];

$paddingBottomOptions = [
    'u-pb-none' => t("none"),
    'u-pb-small' => t("small"),
    'u-pb-medium' => t("medium"),
    'u-pb-large' => t("large"),
    // @md
    'md:u-pb-none' => t("@md:none"),
    'md:u-pb-small' => t("@md:small"),
    'md:u-pb-medium' => t("@md:medium"),
    'md:u-pb-large' => t("@md:large"),
    // @lg
    'lg:u-pb-none' => t("@lg:none"),
    'lg:u-pb-small' => t("@lg:small"),
    'lg:u-pb-medium' => t("@lg:medium"),
    'lg:u-pb-large' => t("@lg:large"),
];

// use this as a field in your block config
$paddingTopSettingsField = [
    "type"        => "MultipleSelect",
    "label"       => t("Padding Top Settings"),
    "description" => t("Set your top paddings"),
    "required"    => false,
    "searchable"  => false,
    "tab"  => "config",
    "config"      => [
        // "sortable" => true (lets you adjust the order of selected items in the block editing interface - for making it tidy)
        "sortable" => true,
        "options"  => $paddingTopOptions,
    ],
    "view"        => [
		"type"        => "keys", // values, values_custom, keys, keys_custom --- all with _custom can have a "type_prefix" and "type_suffix" in this array
	],
];

// use this as a field in your block config
$paddingBottomSettingsField = [
    "type"        => "MultipleSelect",
    "label"       => t("Padding Bottom Settings"),
    "description" => t("Set your bottom paddings"),
    "required"    => false,
    "searchable"  => false,
    "tab"  => "config",
    "config"      => [
        // "sortable" => true (lets you adjust the order of selected items in the block editing interface - for making it tidy)
        "sortable" => true,
        "options"  => $paddingBottomOptions,
    ],
    "view"        => [
		"type"        => "keys", // values, values_custom, keys, keys_custom --- all with _custom can have a "type_prefix" and "type_suffix" in this array
	],
];
