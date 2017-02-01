api = 2
core = 7.x
projects[] = drupal

; Contrib modules.
projects[backup_migrate][subdir] = contrib
projects[backup_migrate][version] = 2.4

projects[ctools][subdir] = contrib
projects[ctools][version] = 1.2

projects[entity][subdir] = contrib
projects[entity][version] = 1.0-rc3

projects[features][subdir] = contrib
projects[features][version] = 1.0

projects[google_analytics][subdir] = contrib
projects[google_analytics][version] = 1.2

projects[libraries][subdir] = contrib
projects[libraries][version] = 1.0

projects[media][subdir] = contrib
projects[media][version] = 1.2

; Importent - upgrading plupload will ruin the auto naming function of the files.
projects[plupload][subdir] = contrib
projects[plupload][version] = 1.0-beta3

projects[strongarm][subdir] = contrib
projects[strongarm][version] = 2.0

projects[token][subdir] = contrib
projects[token][version] = 1.4

projects[transliteration][subdir] = contrib
projects[transliteration][version] = 3.1

projects[views][subdir] = contrib
projects[views][version] = 3.5

; Libraries
libraries[plupload][download][type] = get
libraries[plupload][download][url] = https://github.com/downloads/moxiecode/plupload/plupload_1_5_1_1.zip
libraries[plupload][directory_name] = plupload
libraries[plupload][destination] = libraries

libraries[getid3][download][type] = get
libraries[getid3][download][url] = http://sourceforge.net/projects/getid3/files/getID3%28%29%201.x/1.9.1/getid3-1.9.1-20110810.zip/download
libraries[getid3][directory_name] = getid3
libraries[getid3][destination] = libraries

; Libraries
libraries[phpga][download][type] = get
libraries[phpga][download][url] = https://php-ga.googlecode.com/files/php-ga-1.1.1.zip
libraries[phpga][directory_name] = phpga
libraries[phpga][destination] = libraries
