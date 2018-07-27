posix - protocol to define OS to be compatible to Unix.(Linux uses this protocol)
FOSS - freedom of software
GNU/Linux(current linux system) - collaboration with Linux and RMS(Richard Stalmer is who created FOSS)
SUN Solaris - Network based OS => JSP(like ASP) ==> Tomcat Apache


Windows 	Linux

IIS		Apache


___________________________________________________________________
Day 2


Routing file/router ==> will try to reduce the traffic
Will also cache the requests for faster processing

cd /var/www/html
date.htm
To provide permission
sudo chmod -R 777 .

___________________________________________________________________
Day 3

Change of logic:
1. Change default controller in Route.php
2. Create a controller in Controller folder
3. Call View using the below code
	$this->load->view('welcome_balaji');
4. "welcome_balaji" is the view and that file should be in views folder

==> For detailed error logging in code ignitor,

1. Goto /var/www/html/ci/index.php
2. Change the code to reflect the below,
	/*
 *---------------------------------------------------------------
 * ERROR REPORTING
 *---------------------------------------------------------------
 *
 * Different environments will require different levels of error reporting.
 * By default development will show errors but testing and live will hide them.
 */
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
switch (ENVIRONMENT)
{


3. Goto /var/www/html/ci/application/config/config.php
$config['log_threshold'] = 4;

___________________________________________________________________
Day 4

Profiling ==> similar to SQL profiler
Benchmarking ==> comparing your response time with others
Cache grind ==> Available when "profiling" is turned on. Displays the individual sockets of modules that takes what time similar to SQL profiler UI 

To enable:(It goes with a few other settings. Google them)
xdebug.profiler_enable=1

__________________________________________________________________________
Settings to enable profiler
___________________________
webgrind:

goto 
=> /var/www/html 

and do a git clone
=> git clone https://github.com/jokkedk/webgrind.git

copy the below settings 
=>
xdebug.profiler_enable = 1
xdebug.profiler_output_name = xdebug.out.%t
xdebug.profiler_output_dir = /tmp
xdebug.profiler_enable_trigger = 1

set the above settings in the below php.ini files
=>ubuntu@ubuntu:/etc/php5/apache2$ vi php.ini
=>ubuntu@ubuntu:/etc/php5/cli$ vi php.ini
(optional)
=>ubuntu@ubuntu:/etc/php5/mods-available$ vi xdebug.ini

restart ubuntu
=>sudo shutdown -r now

check in phpinfo() on whether the profiler and trigger is turned on

______________________________________________________________________________

Cake PHP
________
Upgrade PHP to 5.6 as Cake PHP works only on versions above 5.6

To upgrade PHP to 5.6 from lower version,

==>sudo add-apt-repository 'deb http://ppa.launchpad.net/ondrej/php/ubuntu trusty main'
==>sudo apt-get update
==>sudo apt-get  install php5.6 php5.6-mcrypt php5.6-mbstring php5.6-curl php5.6-cli php5.6-mysql php5.6-gd php5.6-intl php5.6-xsl php5.6-zip 

The above should make the version reflect in terminal using
==> php -v

Additional things to do if the versioning doesnt reflect in PHPinfo()

==>sudo a2dismod php5
==>sudo a2enmod php5.6
==>sudo service apache2 restart 

___________________________________________________________________________________________

Command to check the OS version from terminal in Linux:
cat /etc/*-release 

Drives in Linux:
1. bin(binaries)
2. boot(boot information)
3. home(user information)
4. etc(configurations)
5. dev(devices)

Difference between > and | in Linux:
'|' - output of first command is the input for the second command
'>' - output of first command is pushed to the file

Checking memory consumption of applications in linux(like task manager):
TOP (Columns details - VIRT-> virtual memory consumed RES-> actual memory consumed S->(s-sleep R-active))
type 'h' to view commands related to TOP

Regex:
"grep" stands for "global regular expression print"
^ -> from cursor to beginning
$ -> from cursor to end

EXPLAIN statement in MySQL:
Uses to get the number of look ups while executing the query.

For studying the effectiveness of the query, 
Count of number of look ups for a query Vs Number of rows for the query

Ideal ratio is less than 100 : 1

GIT Commands:

git pull => To pull latest code
who => To check who are all working in the server


GIT

top
htop

gerp -E 'pattern1|pattern2' filename


Drives in Linux:
1. bin(binaries)
2. boot(boot information)
3. home(user information)
4. etc(configurations)
5. dev(devices) 
