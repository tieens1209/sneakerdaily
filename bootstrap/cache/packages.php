<?php return array(
  'barryvdh/laravel-debugbar' =>
  array(
    'providers' =>
    array(
      0 => 'Barryvdh\\Debugbar\\ServiceProvider',
    ),
    'aliases' =>
    array(
      'Debugbar' => 'Barryvdh\\Debugbar\\Facades\\Debugbar',
    ),
  ),
  'barryvdh/laravel-dompdf' =>
  array(
    'providers' =>
    array(
      0 => 'Barryvdh\\DomPDF\\ServiceProvider',
    ),
    'aliases' =>
    array(
      'Pdf' => 'Barryvdh\\DomPDF\\Facade\\Pdf',
      'PDF' => 'Barryvdh\\DomPDF\\Facade\\Pdf',
    ),
  ),
  'laravel/sail' =>
  array(
    'providers' =>
    array(
      0 => 'Laravel\\Sail\\SailServiceProvider',
    ),
  ),
  'laravel/sanctum' =>
  array(
    'providers' =>
    array(
      0 => 'Laravel\\Sanctum\\SanctumServiceProvider',
    ),
  ),
  'laravel/tinker' =>
  array(
    'providers' =>
    array(
      0 => 'Laravel\\Tinker\\TinkerServiceProvider',
    ),
  ),
  'nesbot/carbon' =>
  array(
    'providers' =>
    array(
      0 => 'Carbon\\Laravel\\ServiceProvider',
    ),
  ),
  'nunomaduro/collision' =>
  array(
    'providers' =>
    array(
      0 => 'NunoMaduro\\Collision\\Adapters\\Laravel\\CollisionServiceProvider',
    ),
  ),
  'nunomaduro/termwind' =>
  array(
    'providers' =>
    array(
      0 => 'Termwind\\Laravel\\TermwindServiceProvider',
    ),
  ),
  'php-flasher/flasher-laravel' =>
  array(
    'aliases' =>
    array(
      'Flasher' => 'Flasher\\Laravel\\Facade\\Flasher',
    ),
    'providers' =>
    array(
      0 => 'Flasher\\Laravel\\FlasherServiceProvider',
    ),
  ),
  'spatie/laravel-ignition' =>
  array(
    'providers' =>
    array(
      0 => 'Spatie\\LaravelIgnition\\IgnitionServiceProvider',
    ),
    'aliases' =>
    array(
      'Flare' => 'Spatie\\LaravelIgnition\\Facades\\Flare',
    ),
  ),
  'spatie/laravel-permission' =>
  array(
    'providers' =>
    array(
      0 => 'Spatie\\Permission\\PermissionServiceProvider',
    ),
  ),
  'yajra/laravel-datatables-oracle' =>
  array(
    'providers' =>
    array(
      0 => 'Yajra\\DataTables\\DataTablesServiceProvider',
    ),
    'aliases' =>
    array(
      'DataTables' => 'Yajra\\DataTables\\Facades\\DataTables',
    ),
  ),
  'yoeunes/toastr' =>
  array(
    'aliases' =>
    array(
      'Toastr' => 'Yoeunes\\Toastr\\Facades\\Toastr',
    ),
    'providers' =>
    array(
      0 => 'Yoeunes\\Toastr\\ToastrServiceProvider',
    ),
  ),
);
