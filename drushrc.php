<?php 


$options['sites'] = array (
);
$options['profiles'] = array (
  0 => 'lydia',
  1 => 'minimal',
  2 => 'standard',
  3 => 'testing',
);
$options['packages'] = array (
  'base' => 
  array (
    'modules' => 
    array (
      'file_module_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/file/tests/file_module_test.module',
        'basename' => 'file_module_test.module',
        'name' => 'file_module_test',
        'info' => 
        array (
          'name' => 'File test',
          'description' => 'Provides hooks for testing File module functionality.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'file' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/file/file.module',
        'basename' => 'file.module',
        'name' => 'file',
        'info' => 
        array (
          'name' => 'File',
          'description' => 'Defines a file field type.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'tests/file.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'block_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/block/tests/block_test.module',
        'basename' => 'block_test.module',
        'name' => 'block_test',
        'info' => 
        array (
          'name' => 'Block test',
          'description' => 'Provides test blocks.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'block' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/block/block.module',
        'basename' => 'block.module',
        'name' => 'block',
        'info' => 
        array (
          'name' => 'Block',
          'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'block.test',
          ),
          'configure' => 'admin/structure/block',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7008',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'user_form_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/user/tests/user_form_test.module',
        'basename' => 'user_form_test.module',
        'name' => 'user_form_test',
        'info' => 
        array (
          'name' => 'User module form tests',
          'description' => 'Support module for user form testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'user' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/user/user.module',
        'basename' => 'user.module',
        'name' => 'user',
        'info' => 
        array (
          'name' => 'User',
          'description' => 'Manages the user registration and login system.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'user.module',
            1 => 'user.test',
          ),
          'required' => true,
          'configure' => 'admin/config/people',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'user.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7018',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'openid_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/openid/tests/openid_test.module',
        'basename' => 'openid_test.module',
        'name' => 'openid_test',
        'info' => 
        array (
          'name' => 'OpenID dummy provider',
          'description' => 'OpenID provider used for testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'openid',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'openid' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/openid/openid.module',
        'basename' => 'openid.module',
        'name' => 'openid',
        'info' => 
        array (
          'name' => 'OpenID',
          'description' => 'Allows users to log into your site using OpenID.',
          'version' => '7.23',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'openid.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6000',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'rdf_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/rdf/tests/rdf_test.module',
        'basename' => 'rdf_test.module',
        'name' => 'rdf_test',
        'info' => 
        array (
          'name' => 'RDF module tests',
          'description' => 'Support module for RDF module testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'rdf' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/rdf/rdf.module',
        'basename' => 'rdf.module',
        'name' => 'rdf',
        'info' => 
        array (
          'name' => 'RDF',
          'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rdf.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'aggregator_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/aggregator/tests/aggregator_test.module',
        'basename' => 'aggregator_test.module',
        'name' => 'aggregator_test',
        'info' => 
        array (
          'name' => 'Aggregator module tests',
          'description' => 'Support module for aggregator related testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'aggregator' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/aggregator/aggregator.module',
        'basename' => 'aggregator.module',
        'name' => 'aggregator',
        'info' => 
        array (
          'name' => 'Aggregator',
          'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'aggregator.test',
          ),
          'configure' => 'admin/config/services/aggregator/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'aggregator.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'image_module_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/image/tests/image_module_test.module',
        'basename' => 'image_module_test.module',
        'name' => 'image_module_test',
        'info' => 
        array (
          'name' => 'Image test',
          'description' => 'Provides hook implementations for testing Image module functionality.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'image_module_test.module',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'image' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/image/image.module',
        'basename' => 'image.module',
        'name' => 'image',
        'info' => 
        array (
          'name' => 'Image',
          'description' => 'Provides image manipulation tools.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file',
          ),
          'files' => 
          array (
            0 => 'image.test',
          ),
          'configure' => 'admin/config/media/image-styles',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'taxonomy' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/taxonomy/taxonomy.module',
        'basename' => 'taxonomy.module',
        'name' => 'taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy',
          'description' => 'Enables the categorization of content.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'options',
          ),
          'files' => 
          array (
            0 => 'taxonomy.module',
            1 => 'taxonomy.test',
          ),
          'configure' => 'admin/structure/taxonomy',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => '7010',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'color' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/color/color.module',
        'basename' => 'color.module',
        'name' => 'color',
        'info' => 
        array (
          'name' => 'Color',
          'description' => 'Allows administrators to change the color scheme of compatible themes.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'color.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'poll' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/poll/poll.module',
        'basename' => 'poll.module',
        'name' => 'poll',
        'info' => 
        array (
          'name' => 'Poll',
          'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'poll.test',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'poll.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'path' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/path/path.module',
        'basename' => 'path.module',
        'name' => 'path',
        'info' => 
        array (
          'name' => 'Path',
          'description' => 'Allows users to rename URLs.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'path.test',
          ),
          'configure' => 'admin/config/search/path',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'shortcut' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/shortcut/shortcut.module',
        'basename' => 'shortcut.module',
        'name' => 'shortcut',
        'info' => 
        array (
          'name' => 'Shortcut',
          'description' => 'Allows users to manage customizable lists of shortcut links.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'shortcut.test',
          ),
          'configure' => 'admin/config/user-interface/shortcut',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'syslog' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/syslog/syslog.module',
        'basename' => 'syslog.module',
        'name' => 'syslog',
        'info' => 
        array (
          'name' => 'Syslog',
          'description' => 'Logs and records system events to syslog.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'syslog.test',
          ),
          'configure' => 'admin/config/development/logging',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'tracker' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/tracker/tracker.module',
        'basename' => 'tracker.module',
        'name' => 'tracker',
        'info' => 
        array (
          'name' => 'Tracker',
          'description' => 'Enables tracking of recent content for users.',
          'dependencies' => 
          array (
            0 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tracker.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'translation_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/translation/tests/translation_test.module',
        'basename' => 'translation_test.module',
        'name' => 'translation_test',
        'info' => 
        array (
          'name' => 'Content Translation Test',
          'description' => 'Support module for the content translation tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.23',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'translation' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/translation/translation.module',
        'basename' => 'translation.module',
        'name' => 'translation',
        'info' => 
        array (
          'name' => 'Content translation',
          'description' => 'Allows content to be translated into different languages.',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'translation.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'dashboard' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/dashboard/dashboard.module',
        'basename' => 'dashboard.module',
        'name' => 'dashboard',
        'info' => 
        array (
          'name' => 'Dashboard',
          'description' => 'Provides a dashboard page in the administrative interface for organizing administrative tasks and tracking information within your site.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.23',
          'files' => 
          array (
            0 => 'dashboard.test',
          ),
          'dependencies' => 
          array (
            0 => 'block',
          ),
          'configure' => 'admin/dashboard/customize',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'toolbar' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/toolbar/toolbar.module',
        'basename' => 'toolbar.module',
        'name' => 'toolbar',
        'info' => 
        array (
          'name' => 'Toolbar',
          'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.23',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'help' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/help/help.module',
        'basename' => 'help.module',
        'name' => 'help',
        'info' => 
        array (
          'name' => 'Help',
          'description' => 'Manages the display of online help.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'help.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'php' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/php/php.module',
        'basename' => 'php.module',
        'name' => 'php',
        'info' => 
        array (
          'name' => 'PHP filter',
          'description' => 'Allows embedded PHP code/snippets to be evaluated.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'php.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'forum' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/forum/forum.module',
        'basename' => 'forum.module',
        'name' => 'forum',
        'info' => 
        array (
          'name' => 'Forum',
          'description' => 'Provides discussion forums.',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'forum.test',
          ),
          'configure' => 'admin/structure/forum',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'forum.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => '7012',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'overlay' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/overlay/overlay.module',
        'basename' => 'overlay.module',
        'name' => 'overlay',
        'info' => 
        array (
          'name' => 'Overlay',
          'description' => 'Displays the Drupal administration interface in an overlay.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'comment' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/comment/comment.module',
        'basename' => 'comment.module',
        'name' => 'comment',
        'info' => 
        array (
          'name' => 'Comment',
          'description' => 'Allows users to comment on and discuss published content.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'text',
          ),
          'files' => 
          array (
            0 => 'comment.module',
            1 => 'comment.test',
          ),
          'configure' => 'admin/content/comment',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'comment.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => '7009',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'contact' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/contact/contact.module',
        'basename' => 'contact.module',
        'name' => 'contact',
        'info' => 
        array (
          'name' => 'Contact',
          'description' => 'Enables the use of both personal and site-wide contact forms.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contact.test',
          ),
          'configure' => 'admin/structure/contact',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'search_extra_type' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/search/tests/search_extra_type.module',
        'basename' => 'search_extra_type.module',
        'name' => 'search_extra_type',
        'info' => 
        array (
          'name' => 'Test search type',
          'description' => 'Support module for search module testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'search_embedded_form' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/search/tests/search_embedded_form.module',
        'basename' => 'search_embedded_form.module',
        'name' => 'search_embedded_form',
        'info' => 
        array (
          'name' => 'Search embedded form',
          'description' => 'Support module for search module testing of embedded forms.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'search' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/search/search.module',
        'basename' => 'search.module',
        'name' => 'search',
        'info' => 
        array (
          'name' => 'Search',
          'description' => 'Enables site-wide keyword searching.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'search.extender.inc',
            1 => 'search.test',
          ),
          'configure' => 'admin/config/search/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'search.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'dblog' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/dblog/dblog.module',
        'basename' => 'dblog.module',
        'name' => 'dblog',
        'info' => 
        array (
          'name' => 'Database logging',
          'description' => 'Logs and records system events to the database.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'dblog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'drupal_system_listing_compatible_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/simpletest/tests/drupal_system_listing_compatible_test/drupal_system_listing_compatible_test.module',
        'basename' => 'drupal_system_listing_compatible_test.module',
        'name' => 'drupal_system_listing_compatible_test',
        'info' => 
        array (
          'name' => 'Drupal system listing compatible test',
          'description' => 'Support module for testing the drupal_system_listing function.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'drupal_system_listing_incompatible_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/simpletest/tests/drupal_system_listing_incompatible_test/drupal_system_listing_incompatible_test.module',
        'basename' => 'drupal_system_listing_incompatible_test.module',
        'name' => 'drupal_system_listing_incompatible_test',
        'info' => 
        array (
          'name' => 'Drupal system listing incompatible test',
          'description' => 'Support module for testing the drupal_system_listing function.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'psr_0_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/simpletest/tests/psr_0_test/psr_0_test.module',
        'basename' => 'psr_0_test.module',
        'name' => 'psr_0_test',
        'info' => 
        array (
          'name' => 'PSR-0 Test cases',
          'description' => 'Test classes to be discovered by simpletest.',
          'core' => '7.x',
          'hidden' => true,
          'package' => 'Testing',
          'version' => '7.23',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'error_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/simpletest/tests/error_test.module',
        'basename' => 'error_test.module',
        'name' => 'error_test',
        'info' => 
        array (
          'name' => 'Error test',
          'description' => 'Support module for error and exception testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'update_script_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/simpletest/tests/update_script_test.module',
        'basename' => 'update_script_test.module',
        'name' => 'update_script_test',
        'info' => 
        array (
          'name' => 'Update script test',
          'description' => 'Support module for update script testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'actions_loop_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/simpletest/tests/actions_loop_test.module',
        'basename' => 'actions_loop_test.module',
        'name' => 'actions_loop_test',
        'info' => 
        array (
          'name' => 'Actions loop test',
          'description' => 'Support module for action loop testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'taxonomy_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/simpletest/tests/taxonomy_test.module',
        'basename' => 'taxonomy_test.module',
        'name' => 'taxonomy_test',
        'info' => 
        array (
          'name' => 'Taxonomy test module',
          'description' => '"Tests functions and hooks not used in core".',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'taxonomy',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'system_incompatible_core_version_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/simpletest/tests/system_incompatible_core_version_test.module',
        'basename' => 'system_incompatible_core_version_test.module',
        'name' => 'system_incompatible_core_version_test',
        'info' => 
        array (
          'name' => 'System incompatible core version test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '5.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'system_incompatible_core_version_dependencies_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/simpletest/tests/system_incompatible_core_version_dependencies_test.module',
        'basename' => 'system_incompatible_core_version_dependencies_test.module',
        'name' => 'system_incompatible_core_version_dependencies_test',
        'info' => 
        array (
          'name' => 'System incompatible core version dependencies test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'system_incompatible_core_version_test',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'url_alter_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/simpletest/tests/url_alter_test.module',
        'basename' => 'url_alter_test.module',
        'name' => 'url_alter_test',
        'info' => 
        array (
          'name' => 'Url_alter tests',
          'description' => 'A support modules for url_alter hook testing.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.23',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'menu_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/simpletest/tests/menu_test.module',
        'basename' => 'menu_test.module',
        'name' => 'menu_test',
        'info' => 
        array (
          'name' => 'Hook menu tests',
          'description' => 'Support module for menu hook testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'batch_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/simpletest/tests/batch_test.module',
        'basename' => 'batch_test.module',
        'name' => 'batch_test',
        'info' => 
        array (
          'name' => 'Batch API test',
          'description' => 'Support module for Batch API tests.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'entity_query_access_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/simpletest/tests/entity_query_access_test.module',
        'basename' => 'entity_query_access_test.module',
        'name' => 'entity_query_access_test',
        'info' => 
        array (
          'name' => 'Entity query access test',
          'description' => 'Support module for checking entity query results.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'form_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/simpletest/tests/form_test.module',
        'basename' => 'form_test.module',
        'name' => 'form_test',
        'info' => 
        array (
          'name' => 'FormAPI Test',
          'description' => 'Support module for Form API tests.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'update_test_2' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/simpletest/tests/update_test_2.module',
        'basename' => 'update_test_2.module',
        'name' => 'update_test_2',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'update_test_1' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/simpletest/tests/update_test_1.module',
        'basename' => 'update_test_1.module',
        'name' => 'update_test_1',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'theme_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/simpletest/tests/theme_test.module',
        'basename' => 'theme_test.module',
        'name' => 'theme_test',
        'info' => 
        array (
          'name' => 'Theme test',
          'description' => 'Support module for theme system testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'entity_cache_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/simpletest/tests/entity_cache_test.module',
        'basename' => 'entity_cache_test.module',
        'name' => 'entity_cache_test',
        'info' => 
        array (
          'name' => 'Entity cache test',
          'description' => 'Support module for testing entity cache.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity_cache_test_dependency',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'image_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/simpletest/tests/image_test.module',
        'basename' => 'image_test.module',
        'name' => 'image_test',
        'info' => 
        array (
          'name' => 'Image test',
          'description' => 'Support module for image toolkit tests.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'requirements1_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/simpletest/tests/requirements1_test.module',
        'basename' => 'requirements1_test.module',
        'name' => 'requirements1_test',
        'info' => 
        array (
          'name' => 'Requirements 1 Test',
          'description' => 'Tests that a module is not installed when it fails hook_requirements(\'install\').',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'common_test_cron_helper' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/simpletest/tests/common_test_cron_helper.module',
        'basename' => 'common_test_cron_helper.module',
        'name' => 'common_test_cron_helper',
        'info' => 
        array (
          'name' => 'Common Test Cron Helper',
          'description' => 'Helper module for CronRunTestCase::testCronExceptions().',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'update_test_3' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/simpletest/tests/update_test_3.module',
        'basename' => 'update_test_3.module',
        'name' => 'update_test_3',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'database_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/simpletest/tests/database_test.module',
        'basename' => 'database_test.module',
        'name' => 'database_test',
        'info' => 
        array (
          'name' => 'Database Test',
          'description' => 'Support module for Database layer tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.23',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'common_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/simpletest/tests/common_test.module',
        'basename' => 'common_test.module',
        'name' => 'common_test',
        'info' => 
        array (
          'name' => 'Common Test',
          'description' => 'Support module for Common tests.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'common_test.css',
            ),
            'print' => 
            array (
              0 => 'common_test.print.css',
            ),
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'requirements2_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/simpletest/tests/requirements2_test.module',
        'basename' => 'requirements2_test.module',
        'name' => 'requirements2_test',
        'info' => 
        array (
          'name' => 'Requirements 2 Test',
          'description' => 'Tests that a module is not installed when the one it depends on fails hook_requirements(\'install).',
          'dependencies' => 
          array (
            0 => 'requirements1_test',
            1 => 'comment',
          ),
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'system_incompatible_module_version_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/simpletest/tests/system_incompatible_module_version_test.module',
        'basename' => 'system_incompatible_module_version_test.module',
        'name' => 'system_incompatible_module_version_test',
        'info' => 
        array (
          'name' => 'System incompatible module version test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'filter_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/simpletest/tests/filter_test.module',
        'basename' => 'filter_test.module',
        'name' => 'filter_test',
        'info' => 
        array (
          'name' => 'Filter test module',
          'description' => 'Tests filter hooks and functions.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'ajax_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/simpletest/tests/ajax_test.module',
        'basename' => 'ajax_test.module',
        'name' => 'ajax_test',
        'info' => 
        array (
          'name' => 'AJAX Test',
          'description' => 'Support module for AJAX framework tests.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'system_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/simpletest/tests/system_test.module',
        'basename' => 'system_test.module',
        'name' => 'system_test',
        'info' => 
        array (
          'name' => 'System test',
          'description' => 'Support module for system testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'system_test.module',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'session_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/simpletest/tests/session_test.module',
        'basename' => 'session_test.module',
        'name' => 'session_test',
        'info' => 
        array (
          'name' => 'Session test',
          'description' => 'Support module for session data testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'file_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/simpletest/tests/file_test.module',
        'basename' => 'file_test.module',
        'name' => 'file_test',
        'info' => 
        array (
          'name' => 'File test',
          'description' => 'Support module for file handling tests.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'file_test.module',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'module_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/simpletest/tests/module_test.module',
        'basename' => 'module_test.module',
        'name' => 'module_test',
        'info' => 
        array (
          'name' => 'Module test',
          'description' => 'Support module for module system testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'path_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/simpletest/tests/path_test.module',
        'basename' => 'path_test.module',
        'name' => 'path_test',
        'info' => 
        array (
          'name' => 'Hook path tests',
          'description' => 'Support module for path hook testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'entity_cache_test_dependency' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/simpletest/tests/entity_cache_test_dependency.module',
        'basename' => 'entity_cache_test_dependency.module',
        'name' => 'entity_cache_test_dependency',
        'info' => 
        array (
          'name' => 'Entity cache test dependency',
          'description' => 'Support dependency module for testing entity cache.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'system_dependencies_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/simpletest/tests/system_dependencies_test.module',
        'basename' => 'system_dependencies_test.module',
        'name' => 'system_dependencies_test',
        'info' => 
        array (
          'name' => 'System dependency test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => '_missing_dependency',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'entity_crud_hook_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/simpletest/tests/entity_crud_hook_test.module',
        'basename' => 'entity_crud_hook_test.module',
        'name' => 'entity_crud_hook_test',
        'info' => 
        array (
          'name' => 'Entity CRUD Hooks Test',
          'description' => 'Support module for CRUD hook tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.23',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'ajax_forms_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/simpletest/tests/ajax_forms_test.module',
        'basename' => 'ajax_forms_test.module',
        'name' => 'ajax_forms_test',
        'info' => 
        array (
          'name' => 'AJAX form test mock module',
          'description' => 'Test for AJAX form calls.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.23',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'xmlrpc_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/simpletest/tests/xmlrpc_test.module',
        'basename' => 'xmlrpc_test.module',
        'name' => 'xmlrpc_test',
        'info' => 
        array (
          'name' => 'XML-RPC Test',
          'description' => 'Support module for XML-RPC tests according to the validator1 specification.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'system_incompatible_module_version_dependencies_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/simpletest/tests/system_incompatible_module_version_dependencies_test.module',
        'basename' => 'system_incompatible_module_version_dependencies_test.module',
        'name' => 'system_incompatible_module_version_dependencies_test',
        'info' => 
        array (
          'name' => 'System incompatible module version dependencies test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'system_incompatible_module_version_test (>2.0)',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'simpletest' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/simpletest/simpletest.module',
        'basename' => 'simpletest.module',
        'name' => 'simpletest',
        'info' => 
        array (
          'name' => 'Testing',
          'description' => 'Provides a framework for unit and functional testing.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'simpletest.test',
            1 => 'drupal_web_test_case.php',
            2 => 'tests/actions.test',
            3 => 'tests/ajax.test',
            4 => 'tests/batch.test',
            5 => 'tests/bootstrap.test',
            6 => 'tests/cache.test',
            7 => 'tests/common.test',
            8 => 'tests/database_test.test',
            9 => 'tests/entity_crud_hook_test.test',
            10 => 'tests/entity_query.test',
            11 => 'tests/error.test',
            12 => 'tests/file.test',
            13 => 'tests/filetransfer.test',
            14 => 'tests/form.test',
            15 => 'tests/graph.test',
            16 => 'tests/image.test',
            17 => 'tests/lock.test',
            18 => 'tests/mail.test',
            19 => 'tests/menu.test',
            20 => 'tests/module.test',
            21 => 'tests/pager.test',
            22 => 'tests/password.test',
            23 => 'tests/path.test',
            24 => 'tests/registry.test',
            25 => 'tests/schema.test',
            26 => 'tests/session.test',
            27 => 'tests/tablesort.test',
            28 => 'tests/theme.test',
            29 => 'tests/unicode.test',
            30 => 'tests/update.test',
            31 => 'tests/xmlrpc.test',
            32 => 'tests/upgrade/upgrade.test',
            33 => 'tests/upgrade/upgrade.comment.test',
            34 => 'tests/upgrade/upgrade.filter.test',
            35 => 'tests/upgrade/upgrade.forum.test',
            36 => 'tests/upgrade/upgrade.locale.test',
            37 => 'tests/upgrade/upgrade.menu.test',
            38 => 'tests/upgrade/upgrade.node.test',
            39 => 'tests/upgrade/upgrade.taxonomy.test',
            40 => 'tests/upgrade/upgrade.trigger.test',
            41 => 'tests/upgrade/upgrade.translatable.test',
            42 => 'tests/upgrade/upgrade.upload.test',
            43 => 'tests/upgrade/upgrade.user.test',
            44 => 'tests/upgrade/update.aggregator.test',
            45 => 'tests/upgrade/update.trigger.test',
            46 => 'tests/upgrade/update.field.test',
            47 => 'tests/upgrade/update.user.test',
          ),
          'configure' => 'admin/config/development/testing/settings',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'list_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/field/modules/list/tests/list_test.module',
        'basename' => 'list_test.module',
        'name' => 'list_test',
        'info' => 
        array (
          'name' => 'List test',
          'description' => 'Support module for the List module tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.23',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'list' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/field/modules/list/list.module',
        'basename' => 'list.module',
        'name' => 'list',
        'info' => 
        array (
          'name' => 'List',
          'description' => 'Defines list field types. Use with Options to create selection lists.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'options',
          ),
          'files' => 
          array (
            0 => 'tests/list.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'field_sql_storage' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/field/modules/field_sql_storage/field_sql_storage.module',
        'basename' => 'field_sql_storage.module',
        'name' => 'field_sql_storage',
        'info' => 
        array (
          'name' => 'Field SQL storage',
          'description' => 'Stores field data in an SQL database.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_sql_storage.test',
          ),
          'required' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'number' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/field/modules/number/number.module',
        'basename' => 'number.module',
        'name' => 'number',
        'info' => 
        array (
          'name' => 'Number',
          'description' => 'Defines numeric field types.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'number.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'text' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/field/modules/text/text.module',
        'basename' => 'text.module',
        'name' => 'text',
        'info' => 
        array (
          'name' => 'Text',
          'description' => 'Defines simple text field types.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'text.test',
          ),
          'required' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'options' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/field/modules/options/options.module',
        'basename' => 'options.module',
        'name' => 'options',
        'info' => 
        array (
          'name' => 'Options',
          'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'options.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'field_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/field/tests/field_test.module',
        'basename' => 'field_test.module',
        'name' => 'field_test',
        'info' => 
        array (
          'name' => 'Field API Test',
          'description' => 'Support module for the Field API tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'files' => 
          array (
            0 => 'field_test.entity.inc',
          ),
          'version' => '7.23',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'field' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/field/field.module',
        'basename' => 'field.module',
        'name' => 'field',
        'info' => 
        array (
          'name' => 'Field',
          'description' => 'Field API to add fields to entities like nodes and users.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'field.module',
            1 => 'field.attach.inc',
            2 => 'field.info.class.inc',
            3 => 'tests/field.test',
          ),
          'dependencies' => 
          array (
            0 => 'field_sql_storage',
          ),
          'required' => true,
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'theme/field.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'filter' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/filter/filter.module',
        'basename' => 'filter.module',
        'name' => 'filter',
        'info' => 
        array (
          'name' => 'Filter',
          'description' => 'Filters content in preparation for display.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'filter.test',
          ),
          'required' => true,
          'configure' => 'admin/config/content/formats',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7010',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'book' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/book/book.module',
        'basename' => 'book.module',
        'name' => 'book',
        'info' => 
        array (
          'name' => 'Book',
          'description' => 'Allows users to create and organize related content in an outline.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'book.test',
          ),
          'configure' => 'admin/content/book/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'book.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'field_ui' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/field_ui/field_ui.module',
        'basename' => 'field_ui.module',
        'name' => 'field_ui',
        'info' => 
        array (
          'name' => 'Field UI',
          'description' => 'User interface for the Field API.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_ui.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'ccc_update_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/update/tests/ccc_update_test.module',
        'basename' => 'ccc_update_test.module',
        'name' => 'ccc_update_test',
        'info' => 
        array (
          'name' => 'CCC Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.23',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'update_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/update/tests/update_test.module',
        'basename' => 'update_test.module',
        'name' => 'update_test',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'bbb_update_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/update/tests/bbb_update_test.module',
        'basename' => 'bbb_update_test.module',
        'name' => 'bbb_update_test',
        'info' => 
        array (
          'name' => 'BBB Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.23',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'aaa_update_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/update/tests/aaa_update_test.module',
        'basename' => 'aaa_update_test.module',
        'name' => 'aaa_update_test',
        'info' => 
        array (
          'name' => 'AAA Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.23',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'update' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/update/update.module',
        'basename' => 'update.module',
        'name' => 'update',
        'info' => 
        array (
          'name' => 'Update manager',
          'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
          'version' => '7.23',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'update.test',
          ),
          'configure' => 'admin/reports/updates/settings',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'menu' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/menu/menu.module',
        'basename' => 'menu.module',
        'name' => 'menu',
        'info' => 
        array (
          'name' => 'Menu',
          'description' => 'Allows administrators to customize the site navigation menu.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'menu.test',
          ),
          'configure' => 'admin/structure/menu',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'node_access_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/node/tests/node_access_test.module',
        'basename' => 'node_access_test.module',
        'name' => 'node_access_test',
        'info' => 
        array (
          'name' => 'Node module access tests',
          'description' => 'Support module for node permission testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'node_test_exception' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/node/tests/node_test_exception.module',
        'basename' => 'node_test_exception.module',
        'name' => 'node_test_exception',
        'info' => 
        array (
          'name' => 'Node module exception tests',
          'description' => 'Support module for node related exception testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'node_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/node/tests/node_test.module',
        'basename' => 'node_test.module',
        'name' => 'node_test',
        'info' => 
        array (
          'name' => 'Node module tests',
          'description' => 'Support module for node related testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'node' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/node/node.module',
        'basename' => 'node.module',
        'name' => 'node',
        'info' => 
        array (
          'name' => 'Node',
          'description' => 'Allows content to be submitted to the site and displayed on pages.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'node.module',
            1 => 'node.test',
          ),
          'required' => true,
          'configure' => 'admin/structure/types',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'node.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7013',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'trigger_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/trigger/tests/trigger_test.module',
        'basename' => 'trigger_test.module',
        'name' => 'trigger_test',
        'info' => 
        array (
          'name' => 'Trigger Test',
          'description' => 'Support module for Trigger tests.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.23',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'trigger' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/trigger/trigger.module',
        'basename' => 'trigger.module',
        'name' => 'trigger',
        'info' => 
        array (
          'name' => 'Trigger',
          'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'trigger.test',
          ),
          'configure' => 'admin/structure/trigger',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'contextual' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/contextual/contextual.module',
        'basename' => 'contextual.module',
        'name' => 'contextual',
        'info' => 
        array (
          'name' => 'Contextual links',
          'description' => 'Provides contextual links to perform actions related to elements on a page.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contextual.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'system' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/system/system.module',
        'basename' => 'system.module',
        'name' => 'system',
        'info' => 
        array (
          'name' => 'System',
          'description' => 'Handles general site configuration for administrators.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'system.archiver.inc',
            1 => 'system.mail.inc',
            2 => 'system.queue.inc',
            3 => 'system.tar.inc',
            4 => 'system.updater.inc',
            5 => 'system.test',
          ),
          'required' => true,
          'configure' => 'admin/config/system',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7078',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'statistics' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/statistics/statistics.module',
        'basename' => 'statistics.module',
        'name' => 'statistics',
        'info' => 
        array (
          'name' => 'Statistics',
          'description' => 'Logs access statistics for your site.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'statistics.test',
          ),
          'configure' => 'admin/config/system/statistics',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'blog' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/blog/blog.module',
        'basename' => 'blog.module',
        'name' => 'blog',
        'info' => 
        array (
          'name' => 'Blog',
          'description' => 'Enables multi-user blogs.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'blog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'locale_test' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/locale/tests/locale_test.module',
        'basename' => 'locale_test.module',
        'name' => 'locale_test',
        'info' => 
        array (
          'name' => 'Locale Test',
          'description' => 'Support module for the locale layer tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.23',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'locale' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/locale/locale.module',
        'basename' => 'locale.module',
        'name' => 'locale',
        'info' => 
        array (
          'name' => 'Locale',
          'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'locale.test',
          ),
          'configure' => 'admin/config/regional/language',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'profile' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/modules/profile/profile.module',
        'basename' => 'profile.module',
        'name' => 'profile',
        'info' => 
        array (
          'name' => 'Profile',
          'description' => 'Supports configurable user profiles.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'profile.test',
          ),
          'configure' => 'admin/config/people/profile',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.23',
      ),
    ),
    'themes' => 
    array (
      'seven' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/themes/seven/seven.info',
        'basename' => 'seven.info',
        'name' => 'Seven',
        'info' => 
        array (
          'name' => 'Seven',
          'description' => 'A simple one-column, tableless, fluid width administration theme.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'screen' => 
            array (
              0 => 'reset.css',
              1 => 'style.css',
            ),
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '1',
          ),
          'regions' => 
          array (
            'content' => 'Content',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'sidebar_first' => 'First sidebar',
          ),
          'regions_hidden' => 
          array (
            0 => 'sidebar_first',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
        ),
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'garland' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/themes/garland/garland.info',
        'basename' => 'garland.info',
        'name' => 'Garland',
        'info' => 
        array (
          'name' => 'Garland',
          'description' => 'A multi-column theme which can be configured to modify colors and switch between fixed and fluid width layouts.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'style.css',
            ),
            'print' => 
            array (
              0 => 'print.css',
            ),
          ),
          'settings' => 
          array (
            'garland_width' => 'fluid',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
        ),
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'bartik' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/themes/bartik/bartik.info',
        'basename' => 'bartik.info',
        'name' => 'Bartik',
        'info' => 
        array (
          'name' => 'Bartik',
          'description' => 'A flexible, recolorable theme with many regions.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/layout.css',
              1 => 'css/style.css',
              2 => 'css/colors.css',
            ),
            'print' => 
            array (
              0 => 'css/print.css',
            ),
          ),
          'regions' => 
          array (
            'header' => 'Header',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'highlighted' => 'Highlighted',
            'featured' => 'Featured',
            'content' => 'Content',
            'sidebar_first' => 'Sidebar first',
            'sidebar_second' => 'Sidebar second',
            'triptych_first' => 'Triptych first',
            'triptych_middle' => 'Triptych middle',
            'triptych_last' => 'Triptych last',
            'footer_firstcolumn' => 'Footer first column',
            'footer_secondcolumn' => 'Footer second column',
            'footer_thirdcolumn' => 'Footer third column',
            'footer_fourthcolumn' => 'Footer fourth column',
            'footer' => 'Footer',
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '0',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
        ),
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'stark' => 
      array (
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/themes/stark/stark.info',
        'basename' => 'stark.info',
        'name' => 'Stark',
        'info' => 
        array (
          'name' => 'Stark',
          'description' => 'This theme demonstrates Drupal\'s default HTML markup and CSS styles. To learn how to build your own theme and override Drupal\'s default code, see the <a href="http://drupal.org/theme-guide">Theming Guide</a>.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'layout.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
        ),
        'project' => 'drupal',
        'version' => '7.23',
      ),
    ),
    'platforms' => 
    array (
      'drupal' => 
      array (
        'short_name' => 'drupal',
        'version' => '7.23',
        'description' => 'This platform is running Drupal 7.23',
      ),
    ),
    'profiles' => 
    array (
      'lydia' => 
      array (
        'name' => 'lydia',
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/lydia/lydia.profile',
        'project' => '',
        'info' => 
        array (
          'name' => 'Lydia',
          'description' => 'An audio newspaper destribution for Drupal.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'contextual',
            2 => 'dblog',
            3 => 'field_ui',
            4 => 'file',
            5 => 'image',
            6 => 'list',
            7 => 'menu',
            8 => 'number',
            9 => 'options',
            10 => 'path',
            11 => 'shortcut',
            12 => 'toolbar',
            13 => 'features',
            14 => 'lydia_base',
            15 => 'lydia_channel',
          ),
          'files' => 
          array (
            0 => 'lydia.profile',
          ),
          'version' => NULL,
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'version' => '7.23',
      ),
      'minimal' => 
      array (
        'name' => 'minimal',
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/minimal/minimal.profile',
        'project' => 'drupal',
        'info' => 
        array (
          'name' => 'Minimal',
          'description' => 'Start with only a few modules enabled.',
          'version' => '7.23',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'dblog',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'version' => '7.23',
      ),
      'standard' => 
      array (
        'name' => 'standard',
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/standard/standard.profile',
        'project' => 'drupal',
        'info' => 
        array (
          'name' => 'Standard',
          'description' => 'Install with commonly used features pre-configured.',
          'version' => '7.23',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'color',
            2 => 'comment',
            3 => 'contextual',
            4 => 'dashboard',
            5 => 'help',
            6 => 'image',
            7 => 'list',
            8 => 'menu',
            9 => 'number',
            10 => 'options',
            11 => 'path',
            12 => 'taxonomy',
            13 => 'dblog',
            14 => 'search',
            15 => 'shortcut',
            16 => 'toolbar',
            17 => 'overlay',
            18 => 'field_ui',
            19 => 'file',
            20 => 'rdf',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
          'old_short_name' => 'default',
        ),
        'version' => '7.23',
      ),
      'testing' => 
      array (
        'name' => 'testing',
        'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/testing/testing.profile',
        'project' => 'drupal',
        'info' => 
        array (
          'name' => 'Testing',
          'description' => 'Minimal profile for running tests. Includes absolutely required modules only.',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'version' => '7.23',
      ),
    ),
  ),
  'sites-all' => 
  array (
    'modules' => 
    array (
    ),
    'themes' => 
    array (
    ),
  ),
  'profiles' => 
  array (
    'lydia' => 
    array (
      'modules' => 
      array (
        'lydia_permissions' => 
        array (
          'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/lydia/modules/lydia_permissions/lydia_permissions.module',
          'basename' => 'lydia_permissions.module',
          'name' => 'lydia_permissions',
          'info' => 
          array (
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'lydia_channel',
              1 => 'toolbar',
            ),
            'description' => 'Setup default permissions for Lydia',
            'features' => 
            array (
              'user_permission' => 
              array (
                0 => 'access administration pages',
                1 => 'access content overview',
                2 => 'access toolbar',
                3 => 'administer content types',
                4 => 'administer nodes',
                5 => 'bulk delete files to lydia channel',
                6 => 'bypass node access',
                7 => 'upload files to lydia channel',
                8 => 'view the administration theme',
              ),
              'user_role' => 
              array (
                0 => 'Editor',
                1 => 'Uploader',
              ),
            ),
            'name' => 'Lydia permissions',
            'package' => 'Lydia',
            'version' => NULL,
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => '',
          'version' => NULL,
        ),
        'lydia_channel' => 
        array (
          'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/lydia/modules/lydia_channel/lydia_channel.module',
          'basename' => 'lydia_channel.module',
          'name' => 'lydia_channel',
          'info' => 
          array (
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'features',
              1 => 'file',
              2 => 'file_entity',
              3 => 'libraries',
              4 => 'lydia_base',
              5 => 'media',
              6 => 'number',
              7 => 'plupload',
              8 => 'strongarm',
              9 => 'transliteration',
              10 => 'views',
            ),
            'description' => 'Creates the channel for sound paper',
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'strongarm:strongarm:1',
              ),
              'field' => 
              array (
                0 => 'file-audio-lydia_channel_filename',
                1 => 'file-audio-lydia_channel_playtime',
                2 => 'node-lydia_channel-body',
                3 => 'node-lydia_channel-lydia_channel_audio',
                4 => 'node-lydia_channel-field_ga_eventcategory',
              ),
              'node' => 
              array (
                0 => 'lydia_channel',
              ),
              'variable' => 
              array (
                0 => 'menu_options_lydia_channel',
                1 => 'menu_parent_lydia_channel',
                2 => 'node_options_lydia_channel',
                3 => 'node_preview_lydia_channel',
                4 => 'node_submitted_lydia_channel',
              ),
            ),
            'files' => 
            array (
              0 => 'views/lydia_channel_views_handler_field_file.inc',
              1 => 'views/lydia_channel_views_plugin_row_file_rss.inc',
              2 => 'views/lydia_channel_views_plugin_itunes_rss.inc',
            ),
            'name' => 'Lydia Channel',
            'package' => 'Lydia',
            'php' => '5.2.4',
            'version' => NULL,
          ),
          'schema_version' => 0,
          'project' => '',
          'version' => NULL,
        ),
        'lydia_base' => 
        array (
          'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/lydia/modules/lydia_base/lydia_base.module',
          'basename' => 'lydia_base.module',
          'name' => 'lydia_base',
          'info' => 
          array (
            'core' => '7.x',
            'description' => 'Admin interface for the Lydia modules.',
            'name' => 'Lydia Base',
            'package' => 'Lydia',
            'php' => '5.2.4',
            'dependencies' => 
            array (
              0 => 'entity',
            ),
            'version' => NULL,
          ),
          'schema_version' => 0,
          'project' => '',
          'version' => NULL,
        ),
        'entity_test' => 
        array (
          'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/lydia/modules/contrib/entity/tests/entity_test.module',
          'basename' => 'entity_test.module',
          'name' => 'entity_test',
          'info' => 
          array (
            'name' => 'Entity CRUD test module',
            'description' => 'Provides entity types based upon the CRUD API.',
            'version' => '7.x-1.0-rc3',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'entity_test.module',
              1 => 'entity_test.install',
            ),
            'dependencies' => 
            array (
              0 => 'entity',
            ),
            'hidden' => true,
            'project' => 'entity',
            'datestamp' => '1337981155',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'entity',
          'version' => '7.x-1.0-rc3',
        ),
        'entity_test_i18n' => 
        array (
          'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/lydia/modules/contrib/entity/tests/entity_test_i18n.module',
          'basename' => 'entity_test_i18n.module',
          'name' => 'entity_test_i18n',
          'info' => 
          array (
            'name' => 'Entity-test type translation',
            'description' => 'Allows translating entity-test types.',
            'dependencies' => 
            array (
              0 => 'entity_test',
              1 => 'i18n_string',
            ),
            'package' => 'Multilingual - Internationalization',
            'core' => '7.x',
            'hidden' => true,
            'version' => '7.x-1.0-rc3',
            'project' => 'entity',
            'datestamp' => '1337981155',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'entity',
          'version' => '7.x-1.0-rc3',
        ),
        'entity_feature' => 
        array (
          'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/lydia/modules/contrib/entity/tests/entity_feature.module',
          'basename' => 'entity_feature.module',
          'name' => 'entity_feature',
          'info' => 
          array (
            'name' => 'Entity feature module',
            'description' => 'Provides some entities in code.',
            'version' => '7.x-1.0-rc3',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'entity_feature.module',
            ),
            'dependencies' => 
            array (
              0 => 'entity_test',
            ),
            'hidden' => true,
            'project' => 'entity',
            'datestamp' => '1337981155',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'entity',
          'version' => '7.x-1.0-rc3',
        ),
        'entity_token' => 
        array (
          'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/lydia/modules/contrib/entity/entity_token.module',
          'basename' => 'entity_token.module',
          'name' => 'entity_token',
          'info' => 
          array (
            'name' => 'Entity tokens',
            'description' => 'Provides token replacements for all properties that have no tokens and are known to the entity API.',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'entity_token.tokens.inc',
              1 => 'entity_token.module',
            ),
            'dependencies' => 
            array (
              0 => 'entity',
            ),
            'version' => '7.x-1.0-rc3',
            'project' => 'entity',
            'datestamp' => '1337981155',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'entity',
          'version' => '7.x-1.0-rc3',
        ),
        'entity' => 
        array (
          'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/lydia/modules/contrib/entity/entity.module',
          'basename' => 'entity.module',
          'name' => 'entity',
          'info' => 
          array (
            'name' => 'Entity API',
            'description' => 'Enables modules to work with any entity type and to provide entities.',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'entity.features.inc',
              1 => 'entity.i18n.inc',
              2 => 'entity.info.inc',
              3 => 'entity.rules.inc',
              4 => 'entity.test',
              5 => 'includes/entity.inc',
              6 => 'includes/entity.controller.inc',
              7 => 'includes/entity.ui.inc',
              8 => 'includes/entity.wrapper.inc',
              9 => 'views/entity.views.inc',
              10 => 'views/handlers/entity_views_field_handler_helper.inc',
              11 => 'views/handlers/entity_views_handler_area_entity.inc',
              12 => 'views/handlers/entity_views_handler_field_boolean.inc',
              13 => 'views/handlers/entity_views_handler_field_date.inc',
              14 => 'views/handlers/entity_views_handler_field_duration.inc',
              15 => 'views/handlers/entity_views_handler_field_entity.inc',
              16 => 'views/handlers/entity_views_handler_field_field.inc',
              17 => 'views/handlers/entity_views_handler_field_numeric.inc',
              18 => 'views/handlers/entity_views_handler_field_options.inc',
              19 => 'views/handlers/entity_views_handler_field_text.inc',
              20 => 'views/handlers/entity_views_handler_field_uri.inc',
              21 => 'views/handlers/entity_views_handler_relationship_by_bundle.inc',
              22 => 'views/handlers/entity_views_handler_relationship.inc',
              23 => 'views/plugins/entity_views_plugin_row_entity_view.inc',
            ),
            'version' => '7.x-1.0-rc3',
            'project' => 'entity',
            'datestamp' => '1337981155',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7002',
          'project' => 'entity',
          'version' => '7.x-1.0-rc3',
        ),
        'features_test' => 
        array (
          'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/lydia/modules/contrib/features/tests/features_test.module',
          'basename' => 'features_test.module',
          'name' => 'features_test',
          'info' => 
          array (
            'name' => 'Features Tests',
            'description' => 'Test module for Features testing.',
            'core' => '7.x',
            'package' => 'Testing',
            'php' => '5.2.0',
            'dependencies' => 
            array (
              0 => 'features',
              1 => 'image',
              2 => 'strongarm',
              3 => 'taxonomy',
              4 => 'views',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'strongarm:strongarm:1',
                1 => 'views:views_default:3.0',
              ),
              'features_api' => 
              array (
                0 => 'api:1',
              ),
              'field' => 
              array (
                0 => 'node-features_test-field_features_test',
              ),
              'filter' => 
              array (
                0 => 'features_test',
              ),
              'image' => 
              array (
                0 => 'features_test',
              ),
              'node' => 
              array (
                0 => 'features_test',
              ),
              'taxonomy' => 
              array (
                0 => 'taxonomy_features_test',
              ),
              'user_permission' => 
              array (
                0 => 'create features_test content',
              ),
              'views_view' => 
              array (
                0 => 'features_test',
              ),
            ),
            'hidden' => true,
            'version' => '7.x-1.0',
            'project' => 'features',
            'datestamp' => '1343240292',
          ),
          'schema_version' => 0,
          'project' => 'features',
          'version' => '7.x-1.0',
        ),
        'features' => 
        array (
          'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/lydia/modules/contrib/features/features.module',
          'basename' => 'features.module',
          'name' => 'features',
          'info' => 
          array (
            'name' => 'Features',
            'description' => 'Provides feature management for Drupal.',
            'core' => '7.x',
            'package' => 'Features',
            'files' => 
            array (
              0 => 'tests/features.test',
            ),
            'version' => '7.x-1.0',
            'project' => 'features',
            'datestamp' => '1343240292',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '6101',
          'project' => 'features',
          'version' => '7.x-1.0',
        ),
        'views_export' => 
        array (
          'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/lydia/modules/contrib/views/views_export/views_export.module',
          'basename' => 'views_export.module',
          'name' => 'views_export',
          'info' => 
          array (
            'dependencies' => 
            array (
            ),
            'description' => '',
            'version' => NULL,
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => '',
          'version' => NULL,
        ),
        'views_test' => 
        array (
          'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/lydia/modules/contrib/views/tests/views_test.module',
          'basename' => 'views_test.module',
          'name' => 'views_test',
          'info' => 
          array (
            'name' => 'Views Test',
            'description' => 'Test module for Views.',
            'package' => 'Views',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'views',
            ),
            'hidden' => true,
            'version' => '7.x-3.5',
            'project' => 'views',
            'datestamp' => '1345829394',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'views',
          'version' => '7.x-3.5',
        ),
        'views_ui' => 
        array (
          'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/lydia/modules/contrib/views/views_ui.module',
          'basename' => 'views_ui.module',
          'name' => 'views_ui',
          'info' => 
          array (
            'name' => 'Views UI',
            'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
            'package' => 'Views',
            'core' => '7.x',
            'configure' => 'admin/structure/views',
            'dependencies' => 
            array (
              0 => 'views',
            ),
            'files' => 
            array (
              0 => 'views_ui.module',
              1 => 'plugins/views_wizard/views_ui_base_views_wizard.class.php',
            ),
            'version' => '7.x-3.5',
            'project' => 'views',
            'datestamp' => '1345829394',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'views',
          'version' => '7.x-3.5',
        ),
        'views' => 
        array (
          'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/lydia/modules/contrib/views/views.module',
          'basename' => 'views.module',
          'name' => 'views',
          'info' => 
          array (
            'name' => 'Views',
            'description' => 'Create customized lists and queries from your database.',
            'package' => 'Views',
            'core' => '7.x',
            'php' => '5.2',
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'css/views.css',
              ),
            ),
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'files' => 
            array (
              0 => 'handlers/views_handler_area.inc',
              1 => 'handlers/views_handler_area_result.inc',
              2 => 'handlers/views_handler_area_text.inc',
              3 => 'handlers/views_handler_area_text_custom.inc',
              4 => 'handlers/views_handler_area_view.inc',
              5 => 'handlers/views_handler_argument.inc',
              6 => 'handlers/views_handler_argument_date.inc',
              7 => 'handlers/views_handler_argument_formula.inc',
              8 => 'handlers/views_handler_argument_many_to_one.inc',
              9 => 'handlers/views_handler_argument_null.inc',
              10 => 'handlers/views_handler_argument_numeric.inc',
              11 => 'handlers/views_handler_argument_string.inc',
              12 => 'handlers/views_handler_argument_group_by_numeric.inc',
              13 => 'handlers/views_handler_field.inc',
              14 => 'handlers/views_handler_field_counter.inc',
              15 => 'handlers/views_handler_field_boolean.inc',
              16 => 'handlers/views_handler_field_contextual_links.inc',
              17 => 'handlers/views_handler_field_custom.inc',
              18 => 'handlers/views_handler_field_date.inc',
              19 => 'handlers/views_handler_field_entity.inc',
              20 => 'handlers/views_handler_field_markup.inc',
              21 => 'handlers/views_handler_field_math.inc',
              22 => 'handlers/views_handler_field_numeric.inc',
              23 => 'handlers/views_handler_field_prerender_list.inc',
              24 => 'handlers/views_handler_field_time_interval.inc',
              25 => 'handlers/views_handler_field_serialized.inc',
              26 => 'handlers/views_handler_field_machine_name.inc',
              27 => 'handlers/views_handler_field_url.inc',
              28 => 'handlers/views_handler_filter.inc',
              29 => 'handlers/views_handler_filter_boolean_operator.inc',
              30 => 'handlers/views_handler_filter_boolean_operator_string.inc',
              31 => 'handlers/views_handler_filter_combine.inc',
              32 => 'handlers/views_handler_filter_date.inc',
              33 => 'handlers/views_handler_filter_equality.inc',
              34 => 'handlers/views_handler_filter_entity_bundle.inc',
              35 => 'handlers/views_handler_filter_group_by_numeric.inc',
              36 => 'handlers/views_handler_filter_in_operator.inc',
              37 => 'handlers/views_handler_filter_many_to_one.inc',
              38 => 'handlers/views_handler_filter_numeric.inc',
              39 => 'handlers/views_handler_filter_string.inc',
              40 => 'handlers/views_handler_relationship.inc',
              41 => 'handlers/views_handler_relationship_groupwise_max.inc',
              42 => 'handlers/views_handler_sort.inc',
              43 => 'handlers/views_handler_sort_date.inc',
              44 => 'handlers/views_handler_sort_formula.inc',
              45 => 'handlers/views_handler_sort_group_by_numeric.inc',
              46 => 'handlers/views_handler_sort_menu_hierarchy.inc',
              47 => 'handlers/views_handler_sort_random.inc',
              48 => 'includes/base.inc',
              49 => 'includes/handlers.inc',
              50 => 'includes/plugins.inc',
              51 => 'includes/view.inc',
              52 => 'modules/aggregator/views_handler_argument_aggregator_fid.inc',
              53 => 'modules/aggregator/views_handler_argument_aggregator_iid.inc',
              54 => 'modules/aggregator/views_handler_argument_aggregator_category_cid.inc',
              55 => 'modules/aggregator/views_handler_field_aggregator_title_link.inc',
              56 => 'modules/aggregator/views_handler_field_aggregator_category.inc',
              57 => 'modules/aggregator/views_handler_field_aggregator_item_description.inc',
              58 => 'modules/aggregator/views_handler_field_aggregator_xss.inc',
              59 => 'modules/aggregator/views_handler_filter_aggregator_category_cid.inc',
              60 => 'modules/aggregator/views_plugin_row_aggregator_rss.inc',
              61 => 'modules/book/views_plugin_argument_default_book_root.inc',
              62 => 'modules/comment/views_handler_argument_comment_user_uid.inc',
              63 => 'modules/comment/views_handler_field_comment.inc',
              64 => 'modules/comment/views_handler_field_comment_depth.inc',
              65 => 'modules/comment/views_handler_field_comment_link.inc',
              66 => 'modules/comment/views_handler_field_comment_link_approve.inc',
              67 => 'modules/comment/views_handler_field_comment_link_delete.inc',
              68 => 'modules/comment/views_handler_field_comment_link_edit.inc',
              69 => 'modules/comment/views_handler_field_comment_link_reply.inc',
              70 => 'modules/comment/views_handler_field_comment_node_link.inc',
              71 => 'modules/comment/views_handler_field_comment_username.inc',
              72 => 'modules/comment/views_handler_field_ncs_last_comment_name.inc',
              73 => 'modules/comment/views_handler_field_ncs_last_updated.inc',
              74 => 'modules/comment/views_handler_field_node_comment.inc',
              75 => 'modules/comment/views_handler_field_node_new_comments.inc',
              76 => 'modules/comment/views_handler_field_last_comment_timestamp.inc',
              77 => 'modules/comment/views_handler_filter_comment_user_uid.inc',
              78 => 'modules/comment/views_handler_filter_ncs_last_updated.inc',
              79 => 'modules/comment/views_handler_filter_node_comment.inc',
              80 => 'modules/comment/views_handler_sort_comment_thread.inc',
              81 => 'modules/comment/views_handler_sort_ncs_last_comment_name.inc',
              82 => 'modules/comment/views_handler_sort_ncs_last_updated.inc',
              83 => 'modules/comment/views_plugin_row_comment_rss.inc',
              84 => 'modules/comment/views_plugin_row_comment_view.inc',
              85 => 'modules/contact/views_handler_field_contact_link.inc',
              86 => 'modules/field/views_handler_field_field.inc',
              87 => 'modules/field/views_handler_relationship_entity_reverse.inc',
              88 => 'modules/field/views_handler_argument_field_list.inc',
              89 => 'modules/field/views_handler_argument_field_list_string.inc',
              90 => 'modules/field/views_handler_filter_field_list.inc',
              91 => 'modules/filter/views_handler_field_filter_format_name.inc',
              92 => 'modules/locale/views_handler_field_node_language.inc',
              93 => 'modules/locale/views_handler_filter_node_language.inc',
              94 => 'modules/locale/views_handler_argument_locale_group.inc',
              95 => 'modules/locale/views_handler_argument_locale_language.inc',
              96 => 'modules/locale/views_handler_field_locale_group.inc',
              97 => 'modules/locale/views_handler_field_locale_language.inc',
              98 => 'modules/locale/views_handler_field_locale_link_edit.inc',
              99 => 'modules/locale/views_handler_filter_locale_group.inc',
              100 => 'modules/locale/views_handler_filter_locale_language.inc',
              101 => 'modules/locale/views_handler_filter_locale_version.inc',
              102 => 'modules/node/views_handler_argument_dates_various.inc',
              103 => 'modules/node/views_handler_argument_node_language.inc',
              104 => 'modules/node/views_handler_argument_node_nid.inc',
              105 => 'modules/node/views_handler_argument_node_type.inc',
              106 => 'modules/node/views_handler_argument_node_vid.inc',
              107 => 'modules/node/views_handler_argument_node_uid_revision.inc',
              108 => 'modules/node/views_handler_field_history_user_timestamp.inc',
              109 => 'modules/node/views_handler_field_node.inc',
              110 => 'modules/node/views_handler_field_node_link.inc',
              111 => 'modules/node/views_handler_field_node_link_delete.inc',
              112 => 'modules/node/views_handler_field_node_link_edit.inc',
              113 => 'modules/node/views_handler_field_node_revision.inc',
              114 => 'modules/node/views_handler_field_node_revision_link.inc',
              115 => 'modules/node/views_handler_field_node_revision_link_delete.inc',
              116 => 'modules/node/views_handler_field_node_revision_link_revert.inc',
              117 => 'modules/node/views_handler_field_node_path.inc',
              118 => 'modules/node/views_handler_field_node_type.inc',
              119 => 'modules/node/views_handler_filter_history_user_timestamp.inc',
              120 => 'modules/node/views_handler_filter_node_access.inc',
              121 => 'modules/node/views_handler_filter_node_status.inc',
              122 => 'modules/node/views_handler_filter_node_type.inc',
              123 => 'modules/node/views_handler_filter_node_uid_revision.inc',
              124 => 'modules/node/views_plugin_argument_default_node.inc',
              125 => 'modules/node/views_plugin_argument_validate_node.inc',
              126 => 'modules/node/views_plugin_row_node_rss.inc',
              127 => 'modules/node/views_plugin_row_node_view.inc',
              128 => 'modules/profile/views_handler_field_profile_date.inc',
              129 => 'modules/profile/views_handler_field_profile_list.inc',
              130 => 'modules/profile/views_handler_filter_profile_selection.inc',
              131 => 'modules/search/views_handler_argument_search.inc',
              132 => 'modules/search/views_handler_field_search_score.inc',
              133 => 'modules/search/views_handler_filter_search.inc',
              134 => 'modules/search/views_handler_sort_search_score.inc',
              135 => 'modules/search/views_plugin_row_search_view.inc',
              136 => 'modules/statistics/views_handler_field_accesslog_path.inc',
              137 => 'modules/system/views_handler_argument_file_fid.inc',
              138 => 'modules/system/views_handler_field_file.inc',
              139 => 'modules/system/views_handler_field_file_extension.inc',
              140 => 'modules/system/views_handler_field_file_filemime.inc',
              141 => 'modules/system/views_handler_field_file_uri.inc',
              142 => 'modules/system/views_handler_field_file_status.inc',
              143 => 'modules/system/views_handler_filter_file_status.inc',
              144 => 'modules/taxonomy/views_handler_argument_taxonomy.inc',
              145 => 'modules/taxonomy/views_handler_argument_term_node_tid.inc',
              146 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth.inc',
              147 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_modifier.inc',
              148 => 'modules/taxonomy/views_handler_argument_vocabulary_vid.inc',
              149 => 'modules/taxonomy/views_handler_argument_vocabulary_machine_name.inc',
              150 => 'modules/taxonomy/views_handler_field_taxonomy.inc',
              151 => 'modules/taxonomy/views_handler_field_term_node_tid.inc',
              152 => 'modules/taxonomy/views_handler_field_term_link_edit.inc',
              153 => 'modules/taxonomy/views_handler_filter_term_node_tid.inc',
              154 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth.inc',
              155 => 'modules/taxonomy/views_handler_filter_vocabulary_vid.inc',
              156 => 'modules/taxonomy/views_handler_filter_vocabulary_machine_name.inc',
              157 => 'modules/taxonomy/views_handler_relationship_node_term_data.inc',
              158 => 'modules/taxonomy/views_plugin_argument_validate_taxonomy_term.inc',
              159 => 'modules/taxonomy/views_plugin_argument_default_taxonomy_tid.inc',
              160 => 'modules/system/views_handler_filter_system_type.inc',
              161 => 'modules/translation/views_handler_argument_node_tnid.inc',
              162 => 'modules/translation/views_handler_field_node_link_translate.inc',
              163 => 'modules/translation/views_handler_field_node_translation_link.inc',
              164 => 'modules/translation/views_handler_filter_node_tnid.inc',
              165 => 'modules/translation/views_handler_filter_node_tnid_child.inc',
              166 => 'modules/translation/views_handler_relationship_translation.inc',
              167 => 'modules/user/views_handler_argument_user_uid.inc',
              168 => 'modules/user/views_handler_argument_users_roles_rid.inc',
              169 => 'modules/user/views_handler_field_user.inc',
              170 => 'modules/user/views_handler_field_user_language.inc',
              171 => 'modules/user/views_handler_field_user_link.inc',
              172 => 'modules/user/views_handler_field_user_link_cancel.inc',
              173 => 'modules/user/views_handler_field_user_link_edit.inc',
              174 => 'modules/user/views_handler_field_user_mail.inc',
              175 => 'modules/user/views_handler_field_user_name.inc',
              176 => 'modules/user/views_handler_field_user_permissions.inc',
              177 => 'modules/user/views_handler_field_user_picture.inc',
              178 => 'modules/user/views_handler_field_user_roles.inc',
              179 => 'modules/user/views_handler_filter_user_current.inc',
              180 => 'modules/user/views_handler_filter_user_name.inc',
              181 => 'modules/user/views_handler_filter_user_permissions.inc',
              182 => 'modules/user/views_handler_filter_user_roles.inc',
              183 => 'modules/user/views_plugin_argument_default_current_user.inc',
              184 => 'modules/user/views_plugin_argument_default_user.inc',
              185 => 'modules/user/views_plugin_argument_validate_user.inc',
              186 => 'modules/user/views_plugin_row_user_view.inc',
              187 => 'plugins/views_plugin_access.inc',
              188 => 'plugins/views_plugin_access_none.inc',
              189 => 'plugins/views_plugin_access_perm.inc',
              190 => 'plugins/views_plugin_access_role.inc',
              191 => 'plugins/views_plugin_argument_default.inc',
              192 => 'plugins/views_plugin_argument_default_php.inc',
              193 => 'plugins/views_plugin_argument_default_fixed.inc',
              194 => 'plugins/views_plugin_argument_default_raw.inc',
              195 => 'plugins/views_plugin_argument_validate.inc',
              196 => 'plugins/views_plugin_argument_validate_numeric.inc',
              197 => 'plugins/views_plugin_argument_validate_php.inc',
              198 => 'plugins/views_plugin_cache.inc',
              199 => 'plugins/views_plugin_cache_none.inc',
              200 => 'plugins/views_plugin_cache_time.inc',
              201 => 'plugins/views_plugin_display.inc',
              202 => 'plugins/views_plugin_display_attachment.inc',
              203 => 'plugins/views_plugin_display_block.inc',
              204 => 'plugins/views_plugin_display_default.inc',
              205 => 'plugins/views_plugin_display_embed.inc',
              206 => 'plugins/views_plugin_display_extender.inc',
              207 => 'plugins/views_plugin_display_feed.inc',
              208 => 'plugins/views_plugin_display_page.inc',
              209 => 'plugins/views_plugin_exposed_form_basic.inc',
              210 => 'plugins/views_plugin_exposed_form.inc',
              211 => 'plugins/views_plugin_exposed_form_input_required.inc',
              212 => 'plugins/views_plugin_localization_core.inc',
              213 => 'plugins/views_plugin_localization.inc',
              214 => 'plugins/views_plugin_localization_none.inc',
              215 => 'plugins/views_plugin_pager.inc',
              216 => 'plugins/views_plugin_pager_full.inc',
              217 => 'plugins/views_plugin_pager_mini.inc',
              218 => 'plugins/views_plugin_pager_none.inc',
              219 => 'plugins/views_plugin_pager_some.inc',
              220 => 'plugins/views_plugin_query.inc',
              221 => 'plugins/views_plugin_query_default.inc',
              222 => 'plugins/views_plugin_row.inc',
              223 => 'plugins/views_plugin_row_fields.inc',
              224 => 'plugins/views_plugin_row_rss_fields.inc',
              225 => 'plugins/views_plugin_style.inc',
              226 => 'plugins/views_plugin_style_default.inc',
              227 => 'plugins/views_plugin_style_grid.inc',
              228 => 'plugins/views_plugin_style_list.inc',
              229 => 'plugins/views_plugin_style_jump_menu.inc',
              230 => 'plugins/views_plugin_style_rss.inc',
              231 => 'plugins/views_plugin_style_summary.inc',
              232 => 'plugins/views_plugin_style_summary_jump_menu.inc',
              233 => 'plugins/views_plugin_style_summary_unformatted.inc',
              234 => 'plugins/views_plugin_style_table.inc',
              235 => 'tests/handlers/views_handler_area_text.test',
              236 => 'tests/handlers/views_handler_argument_null.test',
              237 => 'tests/handlers/views_handler_argument_string.test',
              238 => 'tests/handlers/views_handler_field.test',
              239 => 'tests/handlers/views_handler_field_boolean.test',
              240 => 'tests/handlers/views_handler_field_custom.test',
              241 => 'tests/handlers/views_handler_field_counter.test',
              242 => 'tests/handlers/views_handler_field_date.test',
              243 => 'tests/handlers/views_handler_field_file_size.test',
              244 => 'tests/handlers/views_handler_field_math.test',
              245 => 'tests/handlers/views_handler_field_url.test',
              246 => 'tests/handlers/views_handler_field_xss.test',
              247 => 'tests/handlers/views_handler_filter_combine.test',
              248 => 'tests/handlers/views_handler_filter_date.test',
              249 => 'tests/handlers/views_handler_filter_equality.test',
              250 => 'tests/handlers/views_handler_filter_in_operator.test',
              251 => 'tests/handlers/views_handler_filter_numeric.test',
              252 => 'tests/handlers/views_handler_filter_string.test',
              253 => 'tests/handlers/views_handler_sort_random.test',
              254 => 'tests/handlers/views_handler_sort_date.test',
              255 => 'tests/handlers/views_handler_sort.test',
              256 => 'tests/test_plugins/views_test_plugin_access_test_dynamic.inc',
              257 => 'tests/test_plugins/views_test_plugin_access_test_static.inc',
              258 => 'tests/plugins/views_plugin_display.test',
              259 => 'tests/styles/views_plugin_style_jump_menu.test',
              260 => 'tests/styles/views_plugin_style.test',
              261 => 'tests/styles/views_plugin_style_unformatted.test',
              262 => 'tests/views_access.test',
              263 => 'tests/views_analyze.test',
              264 => 'tests/views_basic.test',
              265 => 'tests/views_argument_default.test',
              266 => 'tests/views_argument_validator.test',
              267 => 'tests/views_exposed_form.test',
              268 => 'tests/field/views_fieldapi.test',
              269 => 'tests/views_glossary.test',
              270 => 'tests/views_groupby.test',
              271 => 'tests/views_handlers.test',
              272 => 'tests/views_module.test',
              273 => 'tests/views_pager.test',
              274 => 'tests/views_plugin_localization_test.inc',
              275 => 'tests/views_translatable.test',
              276 => 'tests/views_query.test',
              277 => 'tests/views_upgrade.test',
              278 => 'tests/views_test.views_default.inc',
              279 => 'tests/comment/views_handler_argument_comment_user_uid.test',
              280 => 'tests/comment/views_handler_filter_comment_user_uid.test',
              281 => 'tests/taxonomy/views_handler_relationship_node_term_data.test',
              282 => 'tests/user/views_handler_field_user_name.test',
              283 => 'tests/user/views_user_argument_default.test',
              284 => 'tests/user/views_user_argument_validate.test',
              285 => 'tests/user/views_user.test',
              286 => 'tests/views_cache.test',
              287 => 'tests/views_view.test',
              288 => 'tests/views_ui.test',
            ),
            'version' => '7.x-3.5',
            'project' => 'views',
            'datestamp' => '1345829394',
          ),
          'schema_version' => '7301',
          'project' => 'views',
          'version' => '7.x-3.5',
        ),
        'stylizer' => 
        array (
          'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/lydia/modules/contrib/ctools/stylizer/stylizer.module',
          'basename' => 'stylizer.module',
          'name' => 'stylizer',
          'info' => 
          array (
            'name' => 'Stylizer',
            'description' => 'Create custom styles for applications such as Panels.',
            'core' => '7.x',
            'package' => 'Chaos tool suite',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'color',
            ),
            'version' => '7.x-1.2',
            'project' => 'ctools',
            'datestamp' => '1345319204',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '7.x-1.2',
        ),
        'ctools_access_ruleset' => 
        array (
          'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/lydia/modules/contrib/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
          'basename' => 'ctools_access_ruleset.module',
          'name' => 'ctools_access_ruleset',
          'info' => 
          array (
            'name' => 'Custom rulesets',
            'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
            'core' => '7.x',
            'package' => 'Chaos tool suite',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'version' => '7.x-1.2',
            'project' => 'ctools',
            'datestamp' => '1345319204',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '7.x-1.2',
        ),
        'page_manager' => 
        array (
          'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/lydia/modules/contrib/ctools/page_manager/page_manager.module',
          'basename' => 'page_manager.module',
          'name' => 'page_manager',
          'info' => 
          array (
            'name' => 'Page manager',
            'description' => 'Provides a UI and API to manage pages within the site.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'package' => 'Chaos tool suite',
            'version' => '7.x-1.2',
            'project' => 'ctools',
            'datestamp' => '1345319204',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '7.x-1.2',
        ),
        'ctools_ajax_sample' => 
        array (
          'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/lydia/modules/contrib/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
          'basename' => 'ctools_ajax_sample.module',
          'name' => 'ctools_ajax_sample',
          'info' => 
          array (
            'name' => 'Chaos Tools (CTools) AJAX Example',
            'description' => 'Shows how to use the power of Chaos AJAX.',
            'package' => 'Chaos tool suite',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'core' => '7.x',
            'version' => '7.x-1.2',
            'project' => 'ctools',
            'datestamp' => '1345319204',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '7.x-1.2',
        ),
        'ctools_plugin_example' => 
        array (
          'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/lydia/modules/contrib/ctools/ctools_plugin_example/ctools_plugin_example.module',
          'basename' => 'ctools_plugin_example.module',
          'name' => 'ctools_plugin_example',
          'info' => 
          array (
            'name' => 'Chaos Tools (CTools) Plugin Example',
            'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
            'package' => 'Chaos tool suite',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'panels',
              2 => 'page_manager',
              3 => 'advanced_help',
            ),
            'core' => '7.x',
            'version' => '7.x-1.2',
            'project' => 'ctools',
            'datestamp' => '1345319204',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '7.x-1.2',
        ),
        'ctools_export_test' => 
        array (
          'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/lydia/modules/contrib/ctools/tests/ctools_export_test/ctools_export_test.module',
          'basename' => 'ctools_export_test.module',
          'name' => 'ctools_export_test',
          'info' => 
          array (
            'name' => 'CTools export test',
            'description' => 'CTools export test module',
            'core' => '7.x',
            'package' => 'Chaos tool suite',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'hidden' => true,
            'files' => 
            array (
              0 => 'ctools_export.test',
            ),
            'version' => '7.x-1.2',
            'project' => 'ctools',
            'datestamp' => '1345319204',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '7.x-1.2',
        ),
        'ctools_plugin_test' => 
        array (
          'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/lydia/modules/contrib/ctools/tests/ctools_plugin_test.module',
          'basename' => 'ctools_plugin_test.module',
          'name' => 'ctools_plugin_test',
          'info' => 
          array (
            'name' => 'Chaos tools plugins test',
            'description' => 'Provides hooks for testing ctools plugins.',
            'package' => 'Chaos tool suite',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'files' => 
            array (
              0 => 'ctools.plugins.test',
              1 => 'object_cache.test',
              2 => 'css.test',
              3 => 'context.test',
            ),
            'hidden' => true,
            'version' => '7.x-1.2',
            'project' => 'ctools',
            'datestamp' => '1345319204',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '7.x-1.2',
        ),
        'views_content' => 
        array (
          'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/lydia/modules/contrib/ctools/views_content/views_content.module',
          'basename' => 'views_content.module',
          'name' => 'views_content',
          'info' => 
          array (
            'name' => 'Views content panes',
            'description' => 'Allows Views content to be used in Panels, Dashboard and other modules which use the CTools Content API.',
            'package' => 'Chaos tool suite',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'views',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'plugins/views/views_content_plugin_display_ctools_context.inc',
              1 => 'plugins/views/views_content_plugin_display_panel_pane.inc',
              2 => 'plugins/views/views_content_plugin_style_ctools_context.inc',
            ),
            'version' => '7.x-1.2',
            'project' => 'ctools',
            'datestamp' => '1345319204',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '7.x-1.2',
        ),
        'ctools_custom_content' => 
        array (
          'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/lydia/modules/contrib/ctools/ctools_custom_content/ctools_custom_content.module',
          'basename' => 'ctools_custom_content.module',
          'name' => 'ctools_custom_content',
          'info' => 
          array (
            'name' => 'Custom content panes',
            'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
            'core' => '7.x',
            'package' => 'Chaos tool suite',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'version' => '7.x-1.2',
            'project' => 'ctools',
            'datestamp' => '1345319204',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '7.x-1.2',
        ),
        'bulk_export' => 
        array (
          'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/lydia/modules/contrib/ctools/bulk_export/bulk_export.module',
          'basename' => 'bulk_export.module',
          'name' => 'bulk_export',
          'info' => 
          array (
            'name' => 'Bulk Export',
            'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'package' => 'Chaos tool suite',
            'version' => '7.x-1.2',
            'project' => 'ctools',
            'datestamp' => '1345319204',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '7.x-1.2',
        ),
        'ctools' => 
        array (
          'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/lydia/modules/contrib/ctools/ctools.module',
          'basename' => 'ctools.module',
          'name' => 'ctools',
          'info' => 
          array (
            'name' => 'Chaos tools',
            'description' => 'A library of helpful tools by Merlin of Chaos.',
            'core' => '7.x',
            'package' => 'Chaos tool suite',
            'files' => 
            array (
              0 => 'includes/context.inc',
              1 => 'includes/math-expr.inc',
              2 => 'includes/stylizer.inc',
            ),
            'version' => '7.x-1.2',
            'project' => 'ctools',
            'datestamp' => '1345319204',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '6007',
          'project' => 'ctools',
          'version' => '7.x-1.2',
        ),
        'backup_migrate' => 
        array (
          'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/lydia/modules/contrib/backup_migrate/backup_migrate.module',
          'basename' => 'backup_migrate.module',
          'name' => 'backup_migrate',
          'info' => 
          array (
            'name' => 'Backup and Migrate',
            'description' => 'Backup or migrate the Drupal Database quickly and without unnecessary data.',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'backup_migrate.module',
              1 => 'backup_migrate.install',
              2 => 'includes/destinations.inc',
              3 => 'includes/profiles.inc',
              4 => 'includes/schedules.inc',
            ),
            'configure' => 'admin/config/system/backup_migrate',
            'version' => '7.x-2.4',
            'project' => 'backup_migrate',
            'datestamp' => '1338903073',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7203',
          'project' => 'backup_migrate',
          'version' => '7.x-2.4',
        ),
        'plupload' => 
        array (
          'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/lydia/modules/contrib/plupload/plupload.module',
          'basename' => 'plupload.module',
          'name' => 'plupload',
          'info' => 
          array (
            'name' => 'Plupload integration module',
            'description' => 'Provides a plupload element.',
            'files' => 
            array (
              0 => 'plupload.module',
            ),
            'core' => '7.x',
            'package' => 'Media',
            'version' => '7.x-1.0-beta3',
            'project' => 'plupload',
            'datestamp' => '1306279316',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'plupload',
          'version' => '7.x-1.0-beta3',
        ),
        'token_test' => 
        array (
          'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/lydia/modules/contrib/token/tests/token_test.module',
          'basename' => 'token_test.module',
          'name' => 'token_test',
          'info' => 
          array (
            'name' => 'Token Test',
            'description' => 'Testing module for token functionality.',
            'package' => 'Testing',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'token_test.module',
            ),
            'hidden' => true,
            'version' => '7.x-1.4',
            'project' => 'token',
            'datestamp' => '1348497279',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'token',
          'version' => '7.x-1.4',
        ),
        'token' => 
        array (
          'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/lydia/modules/contrib/token/token.module',
          'basename' => 'token.module',
          'name' => 'token',
          'info' => 
          array (
            'name' => 'Token',
            'description' => 'Provides a user interface for the Token API and some missing core tokens.',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'token.module',
              1 => 'token.install',
              2 => 'token.tokens.inc',
              3 => 'token.pages.inc',
              4 => 'token.test',
            ),
            'version' => '7.x-1.4',
            'project' => 'token',
            'datestamp' => '1348497279',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7001',
          'project' => 'token',
          'version' => '7.x-1.4',
        ),
        'libraries' => 
        array (
          'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/lydia/modules/contrib/libraries/libraries.module',
          'basename' => 'libraries.module',
          'name' => 'libraries',
          'info' => 
          array (
            'name' => 'Libraries',
            'description' => 'Allows version dependent and shared usage of external libraries.',
            'core' => '7.x',
            'version' => '7.x-1.0',
            'project' => 'libraries',
            'datestamp' => '1296096156',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'libraries',
          'version' => '7.x-1.0',
        ),
        'strongarm' => 
        array (
          'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/lydia/modules/contrib/strongarm/strongarm.module',
          'basename' => 'strongarm.module',
          'name' => 'strongarm',
          'info' => 
          array (
            'name' => 'Strongarm',
            'description' => 'Enforces variable values defined by modules that need settings set to operate properly.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'files' => 
            array (
              0 => 'strongarm.admin.inc',
              1 => 'strongarm.install',
              2 => 'strongarm.module',
            ),
            'version' => '7.x-2.0',
            'project' => 'strongarm',
            'datestamp' => '1339604214',
            'php' => '5.2.4',
          ),
          'schema_version' => '7201',
          'project' => 'strongarm',
          'version' => '7.x-2.0',
        ),
        'file_entity_test' => 
        array (
          'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/lydia/modules/contrib/media/file_entity/tests/file_entity_test.module',
          'basename' => 'file_entity_test.module',
          'name' => 'file_entity_test',
          'info' => 
          array (
            'name' => 'File Entity Test',
            'description' => 'Support module for File Entity tests.',
            'package' => 'Testing',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'file_entity',
            ),
            'hidden' => true,
            'version' => '7.x-1.2',
            'project' => 'media',
            'datestamp' => '1341095504',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'media',
          'version' => '7.x-1.2',
        ),
        'file_entity' => 
        array (
          'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/lydia/modules/contrib/media/file_entity/file_entity.module',
          'basename' => 'file_entity.module',
          'name' => 'file_entity',
          'info' => 
          array (
            'name' => 'File entity',
            'description' => 'Extends Drupal file entities to be fieldable and viewable.',
            'package' => 'Media',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'field',
              1 => 'ctools',
            ),
            'files' => 
            array (
              0 => 'file_entity.field.inc',
            ),
            'configure' => 'admin/config/media/file-types',
            'version' => '7.x-1.2',
            'project' => 'media',
            'datestamp' => '1341095504',
            'php' => '5.2.4',
          ),
          'schema_version' => '7100',
          'project' => 'media',
          'version' => '7.x-1.2',
        ),
        'media_internet' => 
        array (
          'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/lydia/modules/contrib/media/modules/media_internet/media_internet.module',
          'basename' => 'media_internet.module',
          'name' => 'media_internet',
          'info' => 
          array (
            'name' => 'Media Internet Sources',
            'description' => 'Provides an API for accessing media on various internet services',
            'package' => 'Media',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'media',
            ),
            'files' => 
            array (
              0 => 'media_internet.module',
            ),
            'version' => '7.x-1.2',
            'project' => 'media',
            'datestamp' => '1341095504',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'media',
          'version' => '7.x-1.2',
        ),
        'media' => 
        array (
          'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/lydia/modules/contrib/media/media.module',
          'basename' => 'media.module',
          'name' => 'media',
          'info' => 
          array (
            'name' => 'Media',
            'description' => 'Provides the core Media API',
            'package' => 'Media',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'file_entity',
              1 => 'image',
            ),
            'files' => 
            array (
              0 => 'includes/MediaReadOnlyStreamWrapper.inc',
              1 => 'test/media.types.test',
              2 => 'test/media.entity.test',
            ),
            'configure' => 'admin/config/media/browser',
            'version' => '7.x-1.2',
            'project' => 'media',
            'datestamp' => '1341095504',
            'php' => '5.2.4',
          ),
          'schema_version' => '7020',
          'project' => 'media',
          'version' => '7.x-1.2',
        ),
        'transliteration' => 
        array (
          'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/lydia/modules/contrib/transliteration/transliteration.module',
          'basename' => 'transliteration.module',
          'name' => 'transliteration',
          'info' => 
          array (
            'name' => 'Transliteration',
            'description' => 'Converts non-latin text to US-ASCII and sanitizes file names.',
            'core' => '7.x',
            'configure' => 'admin/config/media/file-system',
            'version' => '7.x-3.1',
            'project' => 'transliteration',
            'datestamp' => '1338540713',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'transliteration',
          'version' => '7.x-3.1',
        ),
        'googleanalytics' => 
        array (
          'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/lydia/modules/contrib/google_analytics/googleanalytics.module',
          'basename' => 'googleanalytics.module',
          'name' => 'googleanalytics',
          'info' => 
          array (
            'name' => 'Google Analytics',
            'description' => 'Allows your site to be tracked by Google Analytics by adding a Javascript tracking code to every page.',
            'core' => '7.x',
            'package' => 'Statistics',
            'configure' => 'admin/config/system/googleanalytics',
            'files' => 
            array (
              0 => 'googleanalytics.test',
            ),
            'version' => '7.x-1.2',
            'project' => 'google_analytics',
            'datestamp' => '1301340367',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7005',
          'project' => 'google_analytics',
          'version' => '7.x-1.2',
        ),
      ),
      'themes' => 
      array (
        'lydias' => 
        array (
          'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/lydia/themes/lydias/lydias.info',
          'basename' => 'lydias.info',
          'name' => 'Lydias',
          'info' => 
          array (
            'name' => 'Lydias',
            'description' => 'theme for Lydavis',
            'core' => '7.x',
            'engine' => 'phptemplate',
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'style.css',
              ),
            ),
            'region' => 
            array (
              'header' => 'Header',
              'sidebar_first' => 'Left Sidebar',
              'sidebar_second' => 'Right Sidebar',
              'content' => 'Content',
              'footer' => 'Footer',
            ),
            'screenshot' => 'screenshot.PNG',
            'version' => NULL,
          ),
          'project' => '',
          'version' => NULL,
        ),
        'aidyl' => 
        array (
          'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/lydia/themes/aidyl/aidyl.info',
          'basename' => 'aidyl.info',
          'name' => 'Aidyl',
          'info' => 
          array (
            'base theme' => 'garland',
            'name' => 'Aidyl',
            'description' => 'Garland subtheme for lydia project',
            'core' => '7.x',
            'settings' => 
            array (
              'garland_width' => 'fluid',
            ),
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'css/aidyl.css',
                1 => 'css/color.css',
              ),
            ),
            'version' => NULL,
          ),
          'project' => '',
          'version' => NULL,
        ),
      ),
    ),
    'minimal' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
    'standard' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
    'testing' => 
    array (
      'modules' => 
      array (
        'drupal_system_listing_compatible_test' => 
        array (
          'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/testing/modules/drupal_system_listing_compatible_test/drupal_system_listing_compatible_test.module',
          'basename' => 'drupal_system_listing_compatible_test.module',
          'name' => 'drupal_system_listing_compatible_test',
          'info' => 
          array (
            'name' => 'Drupal system listing compatible test',
            'description' => 'Support module for testing the drupal_system_listing function.',
            'package' => 'Testing',
            'version' => '7.23',
            'core' => '7.x',
            'hidden' => true,
            'files' => 
            array (
              0 => 'drupal_system_listing_compatible_test.test',
            ),
            'project' => 'drupal',
            'datestamp' => '1375928238',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'drupal',
          'version' => '7.23',
        ),
        'drupal_system_listing_incompatible_test' => 
        array (
          'filename' => '/var/aegir/platforms/lydia-v.1.1.9/profiles/testing/modules/drupal_system_listing_incompatible_test/drupal_system_listing_incompatible_test.module',
          'basename' => 'drupal_system_listing_incompatible_test.module',
          'name' => 'drupal_system_listing_incompatible_test',
          'info' => 
          array (
            'name' => 'Drupal system listing incompatible test',
            'description' => 'Support module for testing the drupal_system_listing function.',
            'package' => 'Testing',
            'version' => '7.23',
            'core' => '6.x',
            'hidden' => true,
            'project' => 'drupal',
            'datestamp' => '1375928238',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'drupal',
          'version' => '7.23',
        ),
      ),
      'themes' => 
      array (
      ),
    ),
  ),
);