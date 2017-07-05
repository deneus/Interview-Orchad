Section 1 CMS
-------------
* I used Drupal.
* I used docker - the one we are using at Sitback. (docker-compose up to start it, the the site will be available at http://orchad.docker).
* I used MarioDB. The database is in the drupal folder. The database name is interview_orchad
* The module is under /sites/all/modules/custom/orchad
* I didn't use any contrib module except devel for debug purpose.

Section 2
---------
* The section 2 is in part2 folder.
* I chose to do Exercise 1, Exerise 4 and Exerise 5.
* Exercise 1 and 4 will be tested via phpunit (/vendor/bin/phpunit)
* Exercise 5 is testable via php (php Exercise5.php)