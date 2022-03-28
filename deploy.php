<?php
namespace Deployer;

set('ssh_multiplexing', false);
set('keep_releases', 3);
set('default_timeout', 3600);

require 'recipe/symfony4.php';
// Project name
set('application', 'rioxygen_website');

// Project repository
set('repository', 'git@github.com:rrcfesc/Rioxygen.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

// Shared files/dirs between deploys
add('shared_files', [
    '.env',
]);
add('shared_dirs', [
]);

// Writable dirs by web server
add('writable_dirs', [
]);


// Hosts

host('rioxygen.xyz')
    ->set('deploy_path', '/var/www/rioxygen_website');

task('deploy:warmup', function () {
    desc("Warmup");
    run('ls -al && ./bin/console cache:clear');


});
//// Tasks
task('deploy:vendors', function () {
    desc("Vendors");
    run('cd {{release_path}} && composer install -o');
});
task('deploy:fos_routing', function () {
    desc("Fos Routing");
    run('cd {{release_path}} && ./bin/console assets:install --symlink public');
    run('cd {{release_path}} && ./bin/console fos:js-routing:dump --format=json --target=public/js/fos_js_routes.json');
});
task('deploy:build', function () {
    desc("NPM step");
    run('cd {{release_path}} && npm i');
    run('cd {{release_path}} && npm run build');
});

task('stop:workers', function() {
    desc('Stopping current workers');
    run('cd {{release_path}} && php bin/console messenger:stop-workers');

});
//// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');
//
//// Migrate database before symlink new release.
//
after('deploy:symlink', 'stop:workers');
before('deploy:symlink', 'database:migrate');


desc('Deploy project');
task('deploy', [
    'deploy:info',
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
    'deploy:shared',
    'deploy:writable',
    'deploy:vendors',
    'deploy:fos_routing',
//    'deploy:build',
    'deploy:cache:warmup',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
]);

after('deploy', 'success');
