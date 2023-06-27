06:17:30 [tetsuya-takiguchi]@TITAN$~/sources/lograph/BEAR.Authority(issues/1) #
sudo ./vendor/bin/phpunit ./tests/
PHPUnit 10.2.2 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.7
Configuration: /home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/phpunit.xml.dist

EEDEEDEEE                                                           9 / 9 (100%)

Time: 00:00.153, Memory: 20.00 MB

There were 7 errors:

1) Ryo88c\Authority\AuthorityTest::testSuccessAuthorizeByAllow
RuntimeException: 

/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/src/Authorization.php:155
/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/src/Authorization.php:165
/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/src/Authorization.php:89
/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/src/Authorization.php:76
/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/tests/AuthorityTest.php:51

2) Ryo88c\Authority\AuthorityTest::testFailAuthorizeByAllow
RuntimeException: 

/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/src/Authorization.php:155
/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/src/Authorization.php:165
/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/src/Authorization.php:89
/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/src/Authorization.php:76
/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/tests/AuthorityTest.php:64

3) Ryo88c\Authority\AuthorityTest::testSuccessAuthorizeByDeny
RuntimeException: 

/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/src/Authorization.php:155
/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/src/Authorization.php:165
/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/src/Authorization.php:89
/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/src/Authorization.php:76
/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/tests/AuthorityTest.php:92

4) Ryo88c\Authority\AuthorityTest::testFailAuthorizeByDeny
RuntimeException: 

/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/src/Authorization.php:155
/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/src/Authorization.php:165
/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/src/Authorization.php:89
/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/src/Authorization.php:76
/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/tests/AuthorityTest.php:105

5) Ryo88c\Authority\AuthorityTest::testFailAuthorizeByMultipleToken1
RuntimeException: 

/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/src/Authorization.php:155
/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/src/Authorization.php:165
/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/src/Authorization.php:89
/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/src/Authorization.php:76
/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/tests/AuthorityTest.php:133

6) Ryo88c\Authority\AuthorityTest::testFailAuthorizeByMultipleToken2
RuntimeException: 

/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/src/Authorization.php:155
/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/src/Authorization.php:165
/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/src/Authorization.php:89
/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/src/Authorization.php:76
/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/tests/AuthorityTest.php:147

7) Ryo88c\Authority\AuthorityTest::testFailAuthorizeByMultipleToken3
RuntimeException: 

/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/src/Authorization.php:155
/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/src/Authorization.php:165
/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/src/Authorization.php:89
/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/src/Authorization.php:76
/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/tests/AuthorityTest.php:160

--

There were 7 risky tests:

1) Ryo88c\Authority\AuthorityTest::testSuccessAuthorizeByAllow
This test did not perform any assertions

/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/tests/AuthorityTest.php:49

2) Ryo88c\Authority\AuthorityTest::testFailAuthorizeByAllow
This test did not perform any assertions

/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/tests/AuthorityTest.php:62

3) Ryo88c\Authority\AuthorityTest::testSuccessAuthorizeByDeny
This test did not perform any assertions

/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/tests/AuthorityTest.php:90

4) Ryo88c\Authority\AuthorityTest::testFailAuthorizeByDeny
This test did not perform any assertions

/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/tests/AuthorityTest.php:103

5) Ryo88c\Authority\AuthorityTest::testFailAuthorizeByMultipleToken1
This test did not perform any assertions

/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/tests/AuthorityTest.php:131

6) Ryo88c\Authority\AuthorityTest::testFailAuthorizeByMultipleToken2
This test did not perform any assertions

/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/tests/AuthorityTest.php:145

7) Ryo88c\Authority\AuthorityTest::testFailAuthorizeByMultipleToken3
This test did not perform any assertions

/home/tetsuya-takiguchi/sources/lograph/BEAR.Authority/tests/AuthorityTest.php:158

ERRORS!
Tests: 9, Assertions: 4, Errors: 7, Deprecations: 9, Risky: 7.