let mix = require('laravel-mix');

mix.copy('node_modules/admin-lte/plugins', 'public/assets/adminlte3/plugins');
mix.copy('node_modules/admin-lte/dist/js', 'public/assets/adminlte3/js');
mix.copy('node_modules/admin-lte/dist/css', 'public/assets/adminlte3/css');
mix.copy('node_modules/admin-lte/dist/img', 'public/assets/adminlte3/img');